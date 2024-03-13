@extends('frontend.layouts.main')

@section('content')
    <section class="py-10 font-poppins bg-white">
        <div class="max-w-6xl px-4 mx-auto">
            <div class="flex flex-wrap mb-15 sm:mb-24 mx-4">
                <div class="w-full mb-8 md:w-1/2 md:mb-0">
                    <div class="sticky top-0 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-96">
                        {{-- <a class="absolute left-0 transform lg:ml-2 top-1/2 translate-1/2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 text-yellow-500 bi bi-chevron-left dark:text-yellow-200" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                            </svg>
                        </a> --}}
                        <img class="object-contain w-full" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                        {{-- <a class="absolute right-0 transform lg:mr-2 top-1/2 translate-1/2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 text-yellow-500 bi bi-chevron-right dark:text-yellow-200" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                        </a> --}}
                        </div>
                        <div class="flex-wrap hidden -mx-2 md:flex">
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a class="block border border-gz-black-700 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
                            <img class="object-contain w-full lg:h-28" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                            </a>
                        </div>
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a class="block border border-gz-black-700 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
                            <img class="object-contain w-full lg:h-28" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                            </a>
                        </div>
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a class="block border border-gz-black-700 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
                            <img class="object-contain w-full lg:h-28" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                            </a>
                        </div>
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a class="block border border-gz-black-700 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
                            <img class="object-contain w-full lg:h-28" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2">
                    @livewire('frontend.product-quantity',['product'=>$product])
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center flex-col pb-24 bg-white">
        <h1 class="font-ridley font-semibold text-lg md:text-2xl tracking-wider uppercase">You May Also Like</h1>
        <div class="px-3 mx-auto max-w-7xl mt-10">
            
            <!--product row 1-->
            <div class="grid grid-cols-1 gap-2 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @forelse ($related as $product)
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
       
    </section>
@endsection