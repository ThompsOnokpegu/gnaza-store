@extends('frontend.layouts.main')

@section('content')
<header class="bg-gradient-to-br from-purple-50 to-purple-100 bg-gz-brown-400 py-14">
    <div class="mx-auto max-w-screen-xl px-8">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-12 sm:col-span-5 sm:hidden">
                <img src="{{ asset('frontend/images/hero-image1.png') }}" alt="" />
            </div>
            <div class="col-span-12 sm:col-span-7 text-center sm:text-left">
            <div class="flex flex-col gap-y-4 mb-5 py-8 sm:p-0">
                <h1 class="text-4xl sm:text-5xl md:text-7xl leading-normal sm:mb-7 font-playfair text-gz-black-200">Elevate Your Everyday with
                    <span class="font-meddon text-gz-brown-200">Gnaza</span>
                </h1>
                <p class="sm:text-md font-ridley text-md sm:text-lg text-gz-black-200">Accessorize your look with a bold statement necklace or add some
                    stackable rings and bracelets to your arm candy.</p>            
            </div>
            <a href="{{ route('shop') }}" type="button" class="inline-block border border-gz-brown-200 px-6 py-4 text-xl text-gz-brown-200 hover:text-gz-brown-100 font-bold leading-tight uppercase hover:bg-gz-brown-300 hover:border-gz-brown-300">EXPLORE PRODUCTS</a>
            </div>
            <div class="col-span-12 sm:col-span-5 sm:block hidden mt-2">
                <img src="{{ asset('frontend/images/hero-image1.png') }}" alt="" />
            </div>
 
        </div>
    </div>
</header>
<section class="flex items-center flex-col pt-15 pb-24">
    
    <div class="px-4 mx-auto max-w-7xl">
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <p class="font-ridley text-center font-semibold uppercase text-sm">Welcome to Gnaza</p>
                <h2 class="text-4xl font-thin font-ridley text-center text-gray-900">Shop Collections</h2>
                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                <div class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                    <img src="{{ asset('frontend/images/gold bracelet.webp') }}" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                    </div>
                    <h3 class="mt-6 text-sm text-gray-500">
                    <a href="{{ route('archive',['category'=>'bracelets']) }}" class="font-ridley  uppercase">
                        <span class="absolute inset-0"></span>
                        Bracelets
                    </a>
                    </h3>
                    <p class="text-base font-ridley font-semibold text-gray-900">Stylish wrist accessories.</p>
                </div>
                <div class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                    <img src="{{ asset('frontend/images/look-3-1.jpg') }}" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                    </div>
                    <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#" class="font-ridley  uppercase" >
                        <span class="absolute inset-0"></span>
                        Necklaces
                    </a>
                    </h3>
                    <p class="text-base font-semibold font-ridley text-gray-900">Elegant neck adornments.</p>
                </div>
                <div class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                    <img src="{{ asset('frontend/images/gnaza jewelry set.webp') }}" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                    </div>
                    <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#" class="font-ridley  uppercase">
                        <span class="absolute inset-0"></span>
                        Earrings
                    </a>
                    </h3>
                    <p class="text-base font-semibold font-ridley text-gray-900">Fashionable ear adornments.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <h1 class="text-4xl font-thin font-ridley text-center text-gray-900">Our Best Sellers</h1>
        <p class="font-ridley text-center font-semibold uppercase text-sm">Make you shine on ordinary days</p>
         <!--product row 1-->
         <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4 mt-6">
            @forelse ($products as $product)
                
                <a href="{{ route('product.details',compact('product',)) }}">
                    <div class="w-full">
                        <div class="p-4 text-center bg-white rounded shadow">
                            <div class="block mb-2">
                                <div class="relative overflow-hidden">
                                    <div class="mb-5 overflow-hidden">
                                        <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                            src="{{ env('BASE_URL').$product->product_image }}"
                                            alt="">
                                    </div>
                                </div>
                                <h3 class="mb-2 text-xl font-ridley text-gz-black-200 ">{{ $product->name }}</h3>
                                <p class="text-lg font-bold text-gz-black-100">
                                    <span>{{$product->regular_price }}</span>
                                </p>
                                <button
                                    class="flex items-center font-ridley ustify-center mx-auto mt-4 font-bold text-center text-gz-brown-200 group group">
                                    Add to Cart
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="ml-2 transition-all group-hover:translate-x-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div>No products found!</div>
            @endforelse   
        </div>
        
        
  
    </div>
    <div class="px-4 mx-auto max-w-7xl pt-10">
        <a href="{{ route('shop') }}" type="button" class="inline-block border border-gz-brown-200 px-6 py-4 text-xl text-gz-brown-200 hover:text-gz-brown-100 font-bold leading-tight uppercase hover:bg-gz-brown-300">VIEW MORE PRODUCTS</a>
    </div>
</section>
@endsection
