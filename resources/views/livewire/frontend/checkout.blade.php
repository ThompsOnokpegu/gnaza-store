<div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32 py-14">
    <div class="px-4 pt-8">
      <p class="text-xl font-medium">Order Summary</p>
      <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
      <div class="mt-8 space-y-3 rounded-lg border border-gz-brown-300 px-2 py-4 sm:px-6">
        @foreach($cart->getContent() as $item)
        <div class="flex flex-row rounded-lg">
          <img class="m-2 h-24 w-28 rounded-md object-cover object-center" src="{{ env('BASE_URL').$item->associatedModel->product_image }}" alt="" />
          <div class="flex w-full flex-col px-4 py-4">
            <span class="font-semibold">{{ $item->name }}</span>
            <span class="float-right uppercase text-gz-brown-300">from {{ $item->associatedModel->category->name }}</span>
            <p class="text-lg font-normal">₦{{ $item->price }} <span class="font-semibold text-sm">x {{ $item->quantity }}</span></p>
          </div>
        </div>
        @endforeach
      </div>
  
      <p class="mt-8 text-lg font-medium">Shipping Methods</p>
      <form class="mt-5 grid gap-6">
        <div class="relative">
          <input class="peer hidden" id="radio_1" type="radio" name="radio" @if($this->cart->getCondition('Delivery')->getValue() > 0) checked @endif />
          <span class="peer-checked:border-gz-brown-200 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gz-brown-300 bg-white"></span>
          <label wire:click="calculateShipping('door')" class="peer-checked:border-2 peer-checked:border-gz-brown-200 peer-checked:bg-gz-brown-400 flex cursor-pointer select-none rounded-lg border border-gz-brown-300 p-4" for="radio_1">
            <img class="w-10 object-contain" src="{{ asset('frontend/images/door-step.png') }}" alt="" />
            <div class="ml-5">
              <span class="mt-2 font-semibold">Door-Step Delivery</span>
              <p class="text-slate-500 text-sm leading-6">12-24 Hrs within Abuja.</p>
              @if($this->cart->getCondition('Delivery')->getValue() > 0)
              <p class="text-slate-500 text-sm leading-6">₦{{ $this->cart->getCondition('Delivery')->getValue() }}.00</p>
              @endif
            </div>
          </label>
        </div>
        <div class="relative">
          <input class="peer hidden" id="radio_2" type="radio" name="radio" @if($this->cart->getCondition('Delivery')->getValue() == 0) checked @endif/>
          <span class="peer-checked:border-gz-brown-200 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gz-brown-300 bg-white"></span>
          <label wire:click="calculateShipping('pickup')" class="peer-checked:border-2 peer-checked:border-gz-brown-200 peer-checked:bg-gz-brown-400 flex cursor-pointer select-none rounded-lg border border-gz-brown-300 p-4" for="radio_2">
            <img class="w-10 object-contain" src="{{ asset('frontend/images/pickup.png') }}" alt="" />
            <div class="ml-5">
              <span class="mt-2 font-semibold">Pickup (10AM - 4PM)</span>
              <p class="text-slate-500 text-sm leading-6">Novare Gateway Mall, Airport Road.</p>
              @if($this->cart->getCondition('Delivery')->getValue() == 0)
              <p class="text-slate-500 text-sm leading-6">₦{{ $this->cart->getCondition('Delivery')->getValue() }}.00</p>
              @endif
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
                <input type="text" id="email" wire:model="billing_email" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="your.email@gmail.com" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/email.svg') }}" alt="" />
                </div>
            </div>
            @error('billing_email')
                <span class="text-gz-danger">{{ $message }}</span>
            @enderror
            <label for="card-holder" class="mt-4 mb-2 block text-sm font-medium">Name</label>
            <div class="relative">
                <input type="text" id="card-holder" wire:model="{{ old('billing_name') }}" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 pl-11 text-sm uppercase shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="Your full name" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/name.svg') }}" alt="" />
                </div>
            </div>
            @error('billing_name')
                <span class="text-gz-danger">{{ $message }}</span>
            @enderror
            <label for="card-no" class="mt-4 mb-2 block text-sm font-medium">Active Phone</label>
            <div class="flex">
            <div class="relative w-full flex-shrink-0">
                <input type="text" id="card-no" wire:model="billing_phone" class="w-full rounded-md border border-gz-brown-300 px-2 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="+234-808-888-8888" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/phone.svg') }}" alt="" />
                </div>
            </div>
            
            {{-- <input type="text" name="credit-expiry" class="w-full rounded-md border border-gz-brown-300 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="MM/YY" />
            <input type="text" name="credit-cvc" class="w-g1/6 flex-shrink-0 rounded-md border border-gz-brown-300 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="CVC" /> --}}
            </div>
            @error('billing_phone')
                <span class="text-gz-danger">{{ $message }}</span>
            @enderror
            <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Delivery Address</label>
            <div class="flex flex-col sm:flex-row">
            <div class="relative flex-shrink-0 sm:w-7/12">
                <input type="text" id="billing-address" wire:model="billing_address" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300" placeholder="Street Address" />
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                <img class="h-4 w-4 object-contain" src="{{ asset('frontend/images/nigeria.svg') }}" alt="" />
                </div>
                
            </div>
           
            <select type="text" wire:model="billing_city" class="w-full rounded-md border border-gz-brown-300 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-gz-brown-200 focus:ring-gz-brown-300">   
                <option selected>Select Zone</option>
                <option value="Central Area-Wuse-Maitama">Central Area->Wuse->Maitama</option>
                <option value="Utako-Gwarinpa-Lifecamp-Jabi">Utako->Gwarinpa->Lifecamp->Jabi</option>
                <option value="Garki-Asokoro-Guzape">Garki->Asokoro->Guzape</option>
                <option value="Airport Road-Lugbe">Airport Road->Lugbe</option>
                <option value="Lokogoma-Galadimawa-Durunmi">Durunmi-Apo</option>
                <option value="Lokogoma-Galadimawa-Durunmi">Kaura->Lokogoma->Galadimawa</option>
                <option value="Katampe-Dawaki-Dutse-Kubwa">Katampe->Dawaki->Dutse->Kubwa</option>
                <option value="Nyanya-Karu-Mararaba">Nyanya->Karu->Mararaba</option>
            </select>
            
            </div>
            @error('billing_address')
                <span class="text-gz-danger">{{ $message }}</span>
            @enderror
            @error('billing_city')
                <span class="text-gz-danger">{{ $message }}</span>
            @enderror
            <!-- Total -->
            <div class="mt-6 border-t border-b border-gz-brown-300 py-2">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Products</p>
                <p class="font-semibold text-gray-900">₦{{str_replace(',','',$this->cart->getSubTotal()) - $this->cart->getCondition('Delivery')->getValue() }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Delivery Fee</p>
                <p class="font-semibold text-gray-900">₦{{ $this->cart->getCondition('Delivery')->getValue() }}</p>
            </div>
            </div>
            <div class="mt-6 flex items-center justify-between">
            <p class="text-sm font-medium text-gray-900">Total</p>
            <p class="text-2xl font-semibold text-gray-900">₦{{ $cart->getTotal() }}</p>
            </div>
        </div>
        <button wire:click="placeOrder" class="mt-4 mb-8 w-full bg-gz-brown-100 px-6 py-3 font-medium text-white">Place Order</button>
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
