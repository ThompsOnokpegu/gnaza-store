@extends('frontend.layouts.main')

@section('content')


<section style="background-image: url('{{ asset('frontend/images/2560x996-LG2.avif') }}')" class="bg-center bg-repeat-x bg-cover bg-gz-black-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-7 lg:py-18">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Elevate Your <span class=" font-meddon">Everyday!</span></h1>
        <p class="mb-8 text-lg font-normal font-ridley text-white lg:text-xl sm:px-16 lg:px-48">Gnaza Timeless Pieces.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            {{-- <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a> --}}
            {{-- <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>   --}}
        </div>
    </div>
</section>

<section class="flex items-center flex-col bg-white pb-24">
    
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
</section> 
@endsection 