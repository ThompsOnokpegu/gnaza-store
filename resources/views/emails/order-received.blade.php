@extends('emails.layouts.email-partial')

@section('content')
<section class="flex items-center py-10 bg-gz-brown-400 md:py-15 font-poppins">
    <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-5 sm:mx-auto bg-white sm:border border-gz-brown-300 rounded-md md:py-10 md:px-10">
       <div>
          <h1 class="px-4 text-2xl font-semibold tracking-wide text-gray-700 ">
             Thank You!
          </h1>
          <p class="px-4 text-xl font-semibold tracking-wide text-black-300 ">
             Your order has been received. 
          </p>
          <p class="px-4 mb-8 border-b py-3 text-sm border-gz-brown-300">We are currently processing your order and should get to you within 12-24 hours.</p>
          
          <div class="flex flex-wrap items-center pb-4 mb-10 border-b border-gz-brown-300">
             <div class="w-ful px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm leading-5 text-gray-600 ">
                   Order Number: 
                </p>
                <p class="text-base font-semibold leading-4 badge text-gz-brown-100 rounded-xl bg-gz-brown-300 py-1 px-2">
                   #GZ{{ 94000 + $order->id }}
                   
                </p>
             </div>
             <div class="w-full px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm leading-5 text-gray-600 ">
                   Date: 
                </p>
                <p class="text-base font-semibold leading-4 text-gray-800">
                   {{ $order->created_at->toDayDateTimeString() }}
                </p>
             </div>
             <div class="w-full px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm leading-5 text-gray-800 ">
                   Payment Reference: 
                </p>
                <p class="text-base font-semibold leading-4 text-blue-600">
                   {{ $order->reference }}
                </p>
             </div>
             <div class="w-full px-4 mb-4 md:w-1/4">
                <p class="mb-2 text-sm leading-5 text-gray-600 ">
                   Payment Method: 
                </p>
                <p class="text-base font-semibold leading-4 text-gray-800 ">
                   {{ $order->payment_method }} 
                </p>
             </div>
          </div>
          <div class=" px-4 mb-10">
            <div class="flow-root">
              <ul role="list" class="-my-6 divide-y divide-gz-black-900">
                    @foreach ($order->items as $item)
                        <li class="flex py-6">
                            <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gz-brown-200">
                                <img src="{{ url(env('BASE_URL') . $item->product->product_image) }}" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                            </div>
        
                            <div class="ml-4 flex flex-1 flex-col">
                            <div>
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                <h3>
                                    <a href="#">{{ $item->name }}</a>
                                </h3>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">₦{{ number_format($item->price,2) }}</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">
                                <p class="text-gray-500">QTY: {{ $item->quantity }}</p>
                            </div>
                            </div>
                        </li>
                    @endforeach
              </ul>
            </div>
          </div>
          <div class="px-4 mb-10">
             <div class="flex flex-col items-stretch justify-center w-full space-y-4 md:flex-row md:space-y-0 md:space-x-8">
                <div class="flex flex-col w-full space-y-6 ">
                   <h2 class="mb-2 text-xl font-semibold text-gray-700">Order Summary</h2>
                   <div class="flex flex-col items-center justify-center w-full pb-4 space-y-4 border-b border-gz-brown-300">
                      <div class="flex justify-between w-full">
                         <p class="text-base leading-4 text-gray-800">Products</p>
                         <p class="text-base leading-4 text-gray-600">₦{{number_format($order->total - $order->shipping,2) }}</p>
                      </div>
                      <div class="flex items-center justify-between w-full">
                         <p class="text-base leading-4 text-gray-800">Discount</p>
                         <p class="text-base leading-4 text-gray-600">₦{{ $order->discount }}</p>
                      </div>
                      <div class="flex items-center justify-between w-full">
                         <p class="text-base leading-4 text-gray-800">Shipping</p>
                         <p class="text-base leading-4 text-gray-600">₦{{ number_format($order->shipping,2) }}</p>
                      </div>
                   </div>
                   <div class="flex items-center justify-between w-full">
                      <p class="text-base font-semibold leading-4 text-gray-800">Total</p>
                      <p class="text-base font-semibold leading-4 text-gray-600">₦{{ number_format($order->total,2) }}</p>
                   </div>
                </div>
                <div class="flex flex-col w-full pt-10 px-2 space-y-4 md:px-8 ">
                   
                   <div class="flex items-start justify-between w-full">
                      <div class="flex items-center justify-center space-x-2">
                         <div class="w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 text-blue-600 dark:text-blue-400 bi bi-truck" viewBox="0 0 16 16">
                               <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                            </svg>
                         </div>
                         <div class="flex flex-col items-center justify-start">
                            <p class="text-lg font-semibold leading-6 text-gray-800">
                               Delivery
                               <br><span class="text-sm font-normal">{{ $order->recipient_address }}</span>
                               <br><span class="text-sm font-normal">{{ $order->recipient_city }}</span>
                               <br><span class="text-sm font-normal">{{ $order->recipient_phone }}</span>
                               <br><span class="text-sm font-normal">{{ $order->user->email }}</span>
                            </p>
                         </div>
                      </div>
                      
                   </div>
                </div>
             </div>
          </div>
          <div class="flex flex-wrap text-center justify-start gap-4 px-4 mt-6 ">
             <a href="{{ route('thank-you',['reference'=>$order->reference]) }}" class="w-full px-4 py-2 text-gz-brown-100 border border-gz-brown-100 rounded-md md:w-auto hover:text-gz-brown-400 hover:bg-gz-brown-100">
             Track My Order
             </a>
             {{-- <button class="w-full px-4 py-2 bg-gz-brown-100 rounded-md text-gz-brown-400 md:w-auto hover:bg-gz-brown-200">
             Track My Order
             </button> --}}
          </div>
       </div>
    </div>
 </section>

@endsection