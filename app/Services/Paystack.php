<?php

namespace App\Services;

use App\Mail\NewOrderNotice;
use App\Mail\OrderReceived;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class Paystack {
    
    private $api = 'https://api.paystack.co';
    
    public function getPaymentLink(User $user, Order $order) {
        
        //set callback url
        $callback_url = url(route('thank-you',$order->reference));
        
        // Set the API endpoint
        $endpoint = $this->api . '/transaction/initialize';
        
        // Define metadata for the payment
        $metadata = [
            'metadata' => [
                'cart_id' => 398, // Replace with an order id
                'custom_fields' => [
                    [
                        'display_name' => 'Full Name',
                        'variable_name' => 'full_name',
                        'value' => $user->name,
                    ],
                    
                ],
            ],
        ];
        // Prepare the request data
        $requestData = [
            'email' => $user->email,
            'amount' => $order->total * 100, // Paystack expects the amount in kobo
            'reference' => $order->reference,
            'callback_url' => $callback_url,
            'currency' => 'NGN',
            'metadata' => $metadata['metadata'],
        ];
        
        try {
            // Make the API call to Paystack
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
                'Content-Type' => 'application/json',
            ])->post($endpoint, $requestData);
        } catch (Throwable $e) {
            // Handle exceptions here, e.g., log the error and return an appropriate response
            return session()->flash('message','Something went wrong! Try again later.');
        }

        if ($response->successful()) {
            $data = $response->json('data');
            return $data;
        } else {
            // Handle API request failure, return an appropriate response
            return session()->flash('message','Connection failed!');
        }
        
    }

    public function getTransactionCharges($amount){
        $fees = 0;
        $charges = ($amount * 0.015) + 100;  //For Local Transactions 1.5% + NGN 100
        $cap = 2000; //Local transactions fees are capped at ₦2000, 

        $fees = $charges;

        if($amount < 2500){   
            //₦100 fee waived for transactions under ₦2500
            $fees = $charges - 100;
        }

        if($charges > $cap){
            // 2000 is the absolute maximum you'll ever pay in fees per transaction
            $fees = 2000;
        }

        return $fees;

    }
    
    public function getTransferCharges($amount){
        $fees = 0;
        /*
            Transfers of NGN 5,000 and below = NGN 10 per Transfer
            Transfers between NGN 5,001 and NGN 50,000 = NGN 25 per Transfer
            Transfers above NGN 50,000 = NGN 50 per Transfer
        */
        if($amount <= 5000){
            $fees = 10;
        }

        if($amount > 5000 && $amount <= 50000){
            $fees = 25;
        }

        if($amount > 50000 ){
            $fees = 50;
        }

        return $fees;
    }

    public function webhook(Request $request){
        // Log::info('Webhook was fired');

        // Check if it's a POST request with Paystack signature header
        if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER) ) {
            exit();
        }

        // Retrieve the payload from the request
        $payload = $request->getContent();

        // Retrieve the Paystack signature from the request headers
        $paystackSignature = $request->header('X-Paystack-Signature');

        // Calculate your own HMAC signature
        $generatedSignature = hash_hmac('sha512', $payload, env('PAYSTACK_SECRET_KEY'));

        // Verify if the Paystack signature matches the generated one
        if ($paystackSignature === $generatedSignature) {
            // Log::info('Signature verification successful');
            
            // Decode the payload as a JSON object
            $event = json_decode($payload);

            if (!$event) {
                Log::error('Invalid JSON payload');
                return response('Invalid Payload', 400);
            }

            // Retrieve the reference from the Paystack event
            $reference = $event->data->reference;

            switch ($event->event) {
                case 'charge.success':
                    // Log::info("Processing charge.success event for reference: $reference");

                    // Find the order associated with the reference
                    $order = Order::where('reference', $reference)->first();

                    if ($order) {
                        // Update the order status to 'Processing' and save it
                        $order->order_status = 'Processing';
                        $order->payment_status = 'paid';
                        $order->save();

                        // Log success
                        // Log::info("Order {$order->id} status updated to Processing and paid.");

                        // Send email notifications
                        Mail::to($order->user->email)->send(new OrderReceived($order));
                        Mail::to('care@gnaza.com')->send(new NewOrderNotice($order));
                    } else {
                        // Log::warning("Order with reference {$reference} not found");
                    }
                    break;

                default:
                    // Log::info("Unhandled event type: {$event->event}");
                    break;
            }

            return response('Webhook Processed', 200);
        } else {
            // Signatures do not match, reject the request.
            Log::warning('Paystack HMAC signature does not match');
            abort(400);
        }
    }
}
