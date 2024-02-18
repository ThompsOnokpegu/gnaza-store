<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $user = User::create([
            'name' => 'Thompson Alfred',
            'email' => 'thompson@gmail.com',
            'address' => '234 Sam Drive, Abuja',
            'city' => 'Abuja',
            'state' => 'FCT',
            'phone' => '08045432453',
            'password' => Hash::make('password')
        ]);

        $shipping = 1500;
        for($i=1;$i<=5;$i++){
            $order = Order::create([
                'user_id' =>  $user->id,
                'reference' => 'ref0001'.$i,
                'recipient_address' => $user->address,
                'recipient_phone' => $user->phone,
                'recipient_name' => $user->first_name.' '.$user->last_name,
                'discount' => 0,
                'shipping' => $shipping,
                'total' => random_int(9000,15000) + $shipping,
                'payment_method' => 'Paystack',
                'order_status' => 'Processing',
                'payment_status' => 'paid',
            ]);

            for($j=1;$j<=3;$j++){
                OrderItem::create([
                    'order_id' => $order->id,
                    'name' => 'Morgana Necklace',
                    'price' => random_int(3000,5000),
                    'quantity' => random_int(1,2),
                ]);
            }
        }
    }
}
