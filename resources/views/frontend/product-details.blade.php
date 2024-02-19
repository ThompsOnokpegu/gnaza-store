@extends('frontend.layouts.main')

@section('content')
    <section class="py-10 font-poppins bg-gz-brown-400">
        <div class="max-w-6xl px-4 mx-auto">
        <div class="flex flex-wrap mb-24 -mx-4">
            <div class="w-full px-4 mb-8 md:w-1/2 md:mb-0">
                <div class="sticky top-0 overflow-hidden ">
                    <div class="relative mb-6 lg:mb-10 lg:h-96">
                    {{-- <a class="absolute left-0 transform lg:ml-2 top-1/2 translate-1/2" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 text-yellow-500 bi bi-chevron-left dark:text-yellow-200" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                        </svg>
                    </a> --}}
                    <img class="object-contain w-full lg:h-full" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                    {{-- <a class="absolute right-0 transform lg:mr-2 top-1/2 translate-1/2" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 text-yellow-500 bi bi-chevron-right dark:text-yellow-200" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                        </svg>
                    </a> --}}
                    </div>
                    <div class="flex-wrap hidden -mx-2 md:flex">
                    <div class="w-1/2 p-2 sm:w-1/4">
                        <a class="block border border-gz-brown-300 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
                        <img class="object-contain w-full lg:h-28" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                        </a>
                    </div>
                    <div class="w-1/2 p-2 sm:w-1/4">
                        <a class="block border border-gz-brown-300 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
                        <img class="object-contain w-full lg:h-28" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                        </a>
                    </div>
                    <div class="w-1/2 p-2 sm:w-1/4">
                        <a class="block border border-gz-brown-300 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
                        <img class="object-contain w-full lg:h-28" src="{{ env('BASE_URL').$product->product_image }}" alt="">
                        </a>
                    </div>
                    <div class="w-1/2 p-2 sm:w-1/4">
                        <a class="block border border-gz-brown-300 hover:border-yellow-400 dark:border-gray-700 dark:hover:border-yellow-300" href="#">
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
    <section class="flex items-center flex-col py-24 bg-gz-brown-400">
        <div class="px-4 mx-auto max-w-7xl">
            <h1 class="text-2xl sm:text-3xl md:text-4xl text-center leading-normal mb-7 font-playfair text-gz-black-200">Customers Also View</h1>
            <!--product row 1-->
            <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @forelse ($related as $product)
                    <div class="w-full">
                        <div class="p-4 text-center bg-white rounded shadow">
                            <div class="block mb-2" href="#">
                                <div class="relative overflow-hidden">
                                    <div class="mb-5 overflow-hidden">
                                        <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                            src="{{ env('BASE_URL').$product->product_image }}"
                                            alt="">
                                    </div>
                                </div>
                                @php
                                    $category = $product->category;
                                @endphp
                                <a href="{{ route('product.details',compact('category','product')) }}">
                                    <h3 class="mb-2 text-xl text-gz-black-200 ">{{ $product->name }}</h3>
                                </a>
                                <p class="text-lg font-bold text-gz-black-100">
                                    <span>₦{{ $product->regular_price }}</span>
                                </p>
                                <button
                                    class="flex items-center justify-center mx-auto mt-4 font-bold text-center text-gz-brown-200 group">
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
                @empty
                    <div class="w-full text-center">No similar products found!</div>
                @endforelse
            </div>
        </div>
        <div class="px-4 mx-auto max-w-7xl pt-10">
            <button type="button" class="inline-block border border-gz-brown-200 px-6 py-4 text-xl text-gz-brown-200 hover:text-gz-brown-100 font-bold leading-tight uppercase hover:bg-gz-brown-300">VIEW MORE PRODUCTS</button>
        </div>
    </section>
@endsection