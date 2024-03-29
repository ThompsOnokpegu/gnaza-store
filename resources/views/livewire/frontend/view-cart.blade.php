<div class="mx-auto mt-8 max-w-2xl md:mt-12">
    <div class="bg-white shadow rounded-md">
        @if(!$cart->isEmpty())
            <div class="px-4 py-6 sm:px-8 sm:py-10">
                <div class="flow-root">
                    <ul class="-my-8">
                            @foreach($cart->getContent() as $item)
                            
                            <li wire:key="{{ $item->id }}" class="flex flex-col space-y-3 py-6 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                <div class="shrink-0">
                                <img class="h-24 w-24 max-w-full rounded-lg object-cover" src="{{ env('BASE_URL').$item->associatedModel->product_image }}" alt="" />
                                </div>

                                <div class="relative flex flex-1 flex-col justify-between">
                                <div class="sm:col-gap-5 sm:grid sm:grid-cols-2">
                                    <div class="pr-8 sm:pr-5">
                                    <p class="text-base font-semibold text-gray-900">{{ $item->name }}</p>
                                    <p class="mx-0 mt-1 mb-0 text-sm uppercase text-gray-400">from {{ $item->associatedModel->category->name }}</p>
                                    </div>

                                    <div class="mt-4 flex items-end justify-between sm:mt-0 sm:items-start sm:justify-end">
                                    <p class="shrink-0 w-20 text-base font-semibold text-gray-900 sm:order-2 sm:ml-8 sm:text-right">₦{{ $item->price }}</p>

                                    <div class="sm:order-1">
                                        <div class="mx-auto flex h-8 border border-gz-brown-300 items-stretch text-gray-600">
                                        <button wire:click="decreaseQuantity('{{ $item->id }}')" class="flex items-center justify-center bg-gz-brown-300 px-4 transition hover:bg-gz-brown-200 hover:text-white">-</button>
                                        <div class="flex w-full items-center justify-centerbg-gz-brown-400 px-4 text-xs uppercase transition">{{ $item->quantity }}</div>
                                        <button wire:click="increaseQuantity('{{ $item->id }}')" class="flex items-center justify-center bg-gz-brown-300 px-4 transition hover:bg-gz-brown-200 hover:text-white">+</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="absolute top-0 right-0 flex sm:bottom-0 sm:top-auto">
                                    <button wire:click="removeItem('{{ $item->id }}')" type="button" class="flex rounded p-2 text-center text-gz-danger transition-all duration-200 ease-in-out focus:shadow hover:text-gz-brown-200">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class=""></path>
                                    </svg>
                                    </button>
                                </div>
                                </div>
                            </li>
                            
                            @endforeach
                        </ul>
                </div>

                <div class="mt-6 border-t border-b border-gz-brown-300 py-2">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-400">Subtotal</p>
                    <p class="text-lg font-semibold text-gray-900">₦{{ $cart->getSubTotal() }}</p>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-400">Shipping</p>
                    <p class="text-sm font-thin text-gray-900">Calculated during checkout</p>
                </div>
                </div>
                <div class="mt-6 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Total</p>
                <p class="text-2xl font-semibold text-gz-brown-100"><span class="text-xs font-normal text-gz-brown-300">NGN</span> {{ $cart->getTotal() }}</p>
                </div>

                <div class="mt-6 text-center">
                <a type="button" wire:navigate href="{{ route('checkout') }}" class="group inline-flex w-full items-center justify-center bg-gz-brown-100 px-6 py-4 text-lg font-semibold text-white transition-all duration-200 ease-in-out focus:shadow hover:bg-gray-800">
                    Checkout
                    <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:ml-8 ml-4 h-6 w-6 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                </div>
                <div class="mt-6 text-center">
                <a wire:navigate href="{{ route('shop') }}" type="button" class="group inline-flex w-full items-center justify-center border border-gz-brown-100 px-6 py-4 text-lg font-semibold text-gz-brown-100 transition-all duration-200 ease-in-out focus:shadow hover:bg-gz-brown-200 hover:text-white hover:border-none">
                    Continue Shopping
                </a>
                </div>
            </div>
        
        @else
            <div class="text-center py-5">
                <p>Your jewelry box is empty!</p>
            </div>
            <div class="my-6 text-center">
                <a wire:navigate href="{{ route('shop') }}" type="button" class="group inline-flex w-full items-center justify-center border border-gz-brown-100 px-6 py-4 text-lg font-semibold text-gz-brown-100 transition-all duration-200 ease-in-out focus:shadow hover:bg-gz-brown-200 hover:text-white hover:border-none">
                    Continue Shopping
                </a>
            </div>
        @endif
    </div>
  </div>
