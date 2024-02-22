<?php

namespace App\Http\Controllers;

use App\Services\Paystack;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request){
        $paystack = new Paystack();
        $paystack->webhook($request);
    }
}
