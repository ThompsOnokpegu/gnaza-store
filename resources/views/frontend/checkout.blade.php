@extends('frontend.layouts.checkout-partial')

@section('content')
<div class="flex flex-col items-center border-b border-gz-brown-300  bg-white py-2 sm:flex-row sm:px-10 lg:px-20 xl:px-32">
    <img class="object-cover h-14" src="{{ asset('frontend/images/gz 3.png') }}" alt="logo" />
    <div class="mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base">
      <div class="relative">
        <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
          <li class="flex items-center space-x-3 text-left sm:space-x-4">
            <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gz-brown-300 text-xs font-semibold text-gz-brown-400" href="#"
              ><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg></a>
            <span class="font-semibold text-gray-900">Shop</span>
          </li>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gz-brown-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
          <li class="flex items-center space-x-3 text-left sm:space-x-4">
            <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gz-brown-200 text-xs font-semibold text-white ring ring-gz-brown-200 ring-offset-2" href="#">2</a>
            <span class="font-semibold text-gray-900">Shipping</span>
          </li>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gz-brown-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
          <li class="flex items-center space-x-3 text-left sm:space-x-4">
            <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gz-brown-300 text-xs font-semibold text-white" href="#">3</a>
            <span class="font-semibold text-gray-500">Payment</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32 py-14">
    <div class="px-4 pt-8">
      <p class="text-xl font-medium">Order Summary</p>
      <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
      <div class="mt-8 space-y-3 rounded-lg border border-gz-brown-300 px-2 py-4 sm:px-6">
        <div class="flex flex-row rounded-lg">
          <img class="m-2 h-24 w-28 rounded-md object-cover object-center" src="{{ asset('frontend/images/look-3-1.jpg') }}" alt="" />
          <div class="flex w-full flex-col px-4 py-4">
            <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
            <span class="float-right text-gz-brown-300">Necklaces</span>
            <p class="text-lg font-bold">₦10000.00</p>
          </div>
        </div>
        <div class="flex flex-row rounded-lg">
          <img class="m-2 h-24 w-28 rounded-md object-cover object-center" src="{{ asset('frontend/images/look-3-1.jpg') }}" alt="" />
          <div class="flex w-full flex-col px-4 py-4">
            <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
            <span class="float-right text-gz-brown-300">Necklaces</span>
            <p class="mt-auto text-lg font-bold">₦6800.00</p>
          </div>
        </div>
      </div>
  
      <p class="mt-8 text-lg font-medium">Shipping Methods</p>
      <form class="mt-5 grid gap-6">
        <div class="relative">
          <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
          <span class="peer-checked:border-gz-brown-200 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gz-brown-300 bg-white"></span>
          <label class="peer-checked:border-2 peer-checked:border-gz-brown-200 peer-checked:bg-gz-brown-400 flex cursor-pointer select-none rounded-lg border border-gz-brown-300 p-4" for="radio_1">
            <img class="w-10 object-contain" src="{{ asset('frontend/images/door-step.png') }}" alt="" />
            <div class="ml-5">
              <span class="mt-2 font-semibold">Door-Step Delivery</span>
              <p class="text-slate-500 text-sm leading-6">12-24 Hrs within Abuja</p>
            </div>
          </label>
        </div>
        <div class="relative">
          <input class="peer hidden" id="radio_2" type="radio" name="radio" checked />
          <span class="peer-checked:border-gz-brown-200 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gz-brown-300 bg-white"></span>
          <label class="peer-checked:border-2 peer-checked:border-gz-brown-200 peer-checked:bg-gz-brown-400 flex cursor-pointer select-none rounded-lg border border-gz-brown-300 p-4" for="radio_2">
            <img class="w-10 object-contain" src="{{ asset('frontend/images/pickup.png') }}" alt="" />
            <div class="ml-5">
              <span class="mt-2 font-semibold">Pickup</span>
              <p class="text-slate-500 text-sm leading-6">Pickup at a designated center</p>
            </div>
          </label>
        </div>
        
      </form>
    </div>
    <div class="mt-10 bg-gz-brown-400 px-4 pt-8 lg:mt-0 rounded-l shadow items-center">
        <p class="text-xl font-medium">Delivery Details</p>
        <p class="text-gray-400">Complete your order by providing your delivery details.</p>
        <div class="">
            <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
            <div class="relative">
            <input type="text" id="email" name="email" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="your.email@gmail.com" />
            <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/email.svg') }}" alt="" />
            </div>
            </div>
            <label for="card-holder" class="mt-4 mb-2 block text-sm font-medium">Name</label>
            <div class="relative">
            <input type="text" id="card-holder" name="card-holder" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 pl-11 text-sm uppercase shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="Your full name" />
            <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/name.svg') }}" alt="" />
            </div>
            </div>
            <label for="card-no" class="mt-4 mb-2 block text-sm font-medium">Active Phone</label>
            <div class="flex">
            <div class="relative w-full flex-shrink-0">
                <input type="text" id="card-no" name="card-no" class="w-full rounded-md border border-gz-brown-300 px-2 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="+234-808-888-8888" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/phone.svg') }}" alt="" />
                </div>
            </div>
            {{-- <input type="text" name="credit-expiry" class="w-full rounded-md border border-gz-brown-300 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="MM/YY" />
            <input type="text" name="credit-cvc" class="w-1/6 flex-shrink-0 rounded-md border border-gz-brown-300 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="CVC" /> --}}
            </div>
            <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Delivery Address</label>
            <div class="flex flex-col sm:flex-row">
            <div class="relative flex-shrink-0 sm:w-7/12">
                <input type="text" id="billing-address" name="billing-address" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="Street Address" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/nigeria.svg') }}" alt="" />
                </div>
            </div>
            <select type="text" name="billing-state" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300">
                
                <option value="State" selected>FCT - Abuja</option>
            </select>
            
            </div>
    
            <!-- Total -->
            <div class="mt-6 border-t border-b border-gz-brown-300 py-2">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Products</p>
                <p class="font-semibold text-gray-900">₦16800.00</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Delivery Fee</p>
                <p class="font-semibold text-gray-900">₦1700.00</p>
            </div>
            </div>
            <div class="mt-6 flex items-center justify-between">
            <p class="text-sm font-medium text-gray-900">Total</p>
            <p class="text-2xl font-semibold text-gray-900">₦18500.00</p>
            </div>
        </div>
        <button class="mt-4 mb-8 w-full bg-gz-brown-100 px-6 py-3 font-medium text-white">Place Order</button>
        <div class="flex justify-center mb-4 ">
            <a href="#">
            <img src="{{ asset('frontend/images/discover.svg') }}" alt="" class="object-cover h-8 mr-2">
            </a>
            <a href="#">
            <img src="{{ asset('frontend/images/visa.svg') }}" alt="" class="object-cover h-8 mr-2">
            </a>
            <a href="#">
            <img src="{{ asset('frontend/images/mastercard.svg') }}" alt="" class="object-cover h-8 mr-2">
            </a>
            <a href="#">
            <img src="{{ asset('frontend/images/verve.svg') }}" alt="" class="object-cover h-8 mr-2">
            </a>
            <a href="#">
            <img src="{{ asset('frontend/images/amex.svg') }}" alt="" class="object-cover h-8 mr-2">
            </a>
        </div>
    </div>
</div>
@endsection
  