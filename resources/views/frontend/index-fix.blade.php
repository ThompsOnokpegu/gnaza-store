@extends('frontend.layouts.main')

@section('content')
 {{-- HERO --}}
 <div class="container mx-auto">
    <div class="items-center flex flex-col-reverse lg:px-16">
        <div class="w-full items-center justify-center mt-6">
            <div class="text-center mx-3">
                <h1 class="text-xl font-semibold font-montserrat  tracking-wide text-gray-800 dark:text-white lg:text-2xl uppercase">Elevate Your Everyday</h1>
                
                <p class="mt-3 text-sm text-gray-600 font-normal font-montserrat tracking-wider">Accessorize your look with a bold statement necklace or add some
                    stackable rings and bracelets to your arm candy.</p>
                
                <button class="px-1 border-b mt-2 border-b-black text-md font-ridley tracking-wider text-black transition-colors duration-300 transform bg-blue-600 lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop Gnaza Collection</button>
            </div>
        </div>

        <div class="flex items-center justify-center w-full mt-0">
            <img class="w-full h-full" src="{{ asset('frontend/images/01_HOMEPAGE_TRINITY_BANNER_2560x996.jpg') }}" alt="Catalogue-pana.svg">
        </div>
    </div>
</div>
{{-- END HERO --}}
{{-- FEATURED PRODUCTS --}}
<div class="px-3 mx-auto max-w-7xl mt-10">
    <!--product row 1-->
    <div class="grid grid-cols-2 gap-2 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @forelse ($products as $product)
            @php
                $category = $product->category;
            @endphp
            <a href="{{ route('product.details',compact('product',)) }}">
                <div class="w-full">
                    <div class="text-center bg-white">
                        <div class="block mb-2">
                            <div class="relative overflow-hidden">
                                <div class="mb-5 overflow-hidden">
                                    <img class="object-cover w-full mx-auto transition-all h-52 lg:h-72 hover:scale-110"
                                        src="{{ env('BASE_URL').$product->product_image }}"
                                        alt="">
                                </div>
                            </div>
                            <h3 class="uppercase text-md text-gz-black-200 font-ridley tracking-wider">{{ $product->name }}</h3>
                            <p class="my-2 text-sm text-gray-600 font-normal font-montserrat tracking-wider">{{$product->description}}</p>
                            <p class="text-lg font-semibold text-gz-black-100">
                                <span>₦{{$product->regular_price }}</span>
                            </p>
                            {{-- <button
                                class="flex items-center uppercase justify-center mx-auto mt-4 font-bold text-center text-gz-brown-200 group group">
                                Buy Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="ml-2 transition-all group-hover:translate-x-2" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button> --}}
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <div>No products found!</div>
        @endforelse   
    </div>
</div>
{{-- END FEATURED PRODUCTS --}}
{{-- FEATURED CATEGORY --}}
<div class="container mx-auto my-10">
    <div class="items-center flex flex-col-reverse lg:px-16">
        <div class="w-full items-center justify-center mt-6">
            <div class="text-center mx-3">
                <h1 class="text-xl font-semibold font-montserrat  tracking-wide text-gray-800 dark:text-white lg:text-2xl uppercase">Elevate Your Everyday</h1>
                
                <p class="my-4 text-sm text-gray-600 font-normal font-montserrat tracking-wider">Accessorize your look with a bold statement necklace or add some
                    stackable rings and bracelets to your arm candy.</p>
                
                    <button class="px-1 border-b mt-2 border-b-black text-md font-ridley tracking-wider text-black transition-colors duration-300 transform bg-blue-600 lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop the collection</button>
            </div>
        </div>

        <div class="flex items-center justify-center w-full mt-0">
            <img class="w-full" src="{{asset('frontend/images/2560x996-LG2.avif')}}" alt="Catalogue-pana.svg">
        </div>
    </div>
</div>
{{-- END FEATURED CATEGORY --}}
{{-- CATEGORIES --}}
<div class="container mx-auto my-10">
    <div class="items-center flex flex-col-reverse lg:px-16">
        <div class="w-full items-center justify-center mt-6">
            <div class="text-center mx-3">
                <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0 z-1">
                    <div class="group relative z-1">
                        <div class="relative h-80 w-full overflow-hidden bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="{{ asset('frontend/images/gold-bracelet.webp') }}" alt="Gnaza Jewelry Gold Bracelet Collections." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-lg text-gray-500">
                        <a href="{{ route('archive',['category'=>'bracelets']) }}" class="font-ridley tracking-wider uppercase">
                            <span class="absolute inset-0"></span>
                            Bracelets
                        </a>
                        </h3>
                        <p class="my-3 text-sm font-montserrat tracking-wider font-normal text-gray-900">Stylish wrist accessories.</p>
                        <button class="px-1 border-b mt-2 border-b-black text-md font-ridley tracking-wider text-black transition-colors duration-300 transform bg-blue-600 lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop the collection</button>
                        
                    </div>
                    <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="{{ asset('frontend/images/matching-set-jewelry.jpg') }}" alt="Gnaza Jewelry Matching Jewelry Set Collections." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-lg text-gray-500">
                        <a href="{{ route('archive',['category'=>'jewelry-set']) }}" class="font-ridley tracking-wider uppercase" >
                            <span class="absolute inset-0"></span>
                            Matching Set
                        </a>
                        </h3>
                        <p class="my-3 text-sm font-normal font-montserrat tracking-wider text-gray-900">Elegant neck adornments.</p>
                        <button class="px-1 border-b mt-2 border-b-black text-md font-ridley tracking-wider text-black transition-colors duration-300 transform bg-blue-600 lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop the collection</button>
                    </div>
                    <div class="group relative">
                        <div class="relative h-80 w-full overflow-hidden bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="{{ asset('frontend/images/matching-set-jewelry.jpg') }}" alt="Gnaza Jewelry Matching Jewelry Set Collections." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-lg text-gray-500">
                        <a href="{{ route('archive',['category'=>'jewelry-set']) }}" class="font-ridley tracking-wider uppercase" >
                            <span class="absolute inset-0"></span>
                            Matching Set
                        </a>
                        </h3>
                        <p class="my-3 text-sm font-normal font-montserrat tracking-wider text-gray-900">Elegant neck adornments.</p>
                        <button class="px-1 border-b mt-2 border-b-black text-md font-ridley tracking-wider text-black transition-colors duration-300 transform bg-blue-600 lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop the collection</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
{{--END CATEGORIES  --}}
@endsection