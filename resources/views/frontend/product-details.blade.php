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
                <div class="lg:pl-20">
                    <div class="mb-6 ">
                    <span class="px-2.5 py-0.5 text-xs text-gz-brown-200 bg-yellow-100 rounded-xl dark:text-gray-200">New
                    Arrival</span>
                    <h2 class="max-w-xl mt-6 mb-3 text-3xl font-ridley font-semibold leading-normal tracking-wide md:text-3xl">
                        {{ $product->name }}
                    </h2>
                    <p class="mb-3 font-ridley leading-4 text-sm font-normal text-gz-black-200">
                        {{ $product->description }}
                    </p>
                    <div class="flex flex-wrap items-center mb-6">
                        <ul class="flex mb-4 mr-2 lg:mb-0">
                            <li>
                                <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gz-brown-600" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 dark:text-gray-400 bi bi-star " viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gz-brown-600" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 dark:text-gray-400 bi bi-star " viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gz-brown-600" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 dark:text-gray-400 bi bi-star " viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gz-brown-600" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 dark:text-gray-400 bi bi-star " viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gz-brown-600" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 dark:text-gray-400 bi bi-star " viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                </svg>
                                </a>
                            </li>
                        </ul>
                        <a class="mb-4 text-xs underline hover:text-yellow-600 dark:text-gray-400 dark:hover:text-gray-300 lg:mb-0" href="#">
                        (23 Reviews)
                        </a>
                    </div>
                    <p class="inline-block text-2xl font-semibold text-gray-700 dark:text-gray-400 ">
                        <span>₦{{ $product->regular_price }}</span>
                        <span class="ml-3 text-base font-normal text-gray-500 line-through dark:text-gray-400">₦19500.00</span>
                    </p>
                    </div>
                    <div class="mb-6">
                    {{-- <h2 class="mb-2 text-lg font-bold text-gray-700 dark:text-gray-400">Our Promise :</h2> --}}
                    <div class="bg-gz-brown-300 rounded-xl">
                        <div class="p-3 lg:p-5 ">
                            <div class="p-2 rounded-xl lg:p-6 bg-gz-brown-400 font-ridley">
                                <div class="flex flex-wrap justify-center gap-x-10 gap-y-4">
                                <div class="w-full mb-4 md:w-2/5">
                                    <div class="flex ">
                                        <span class="mr-3 text-gz-brown-100 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                        </span>
                                        <div>
                                            <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                            Authenic Material
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mb-4 md:w-2/5">
                                    <div class="flex ">
                                        <span class="mr-3 text-gray-500 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history w-7 h-7" viewBox="0 0 16 16">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                            </svg>
                                        </span>
                                        <div>
                                            <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                            Fast Shipping
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mb-4 lg:mb-0 md:w-2/5">
                                    <div class="flex ">
                                        <span class="mr-3 text-gray-500 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M7 15h0M2 9.5h20"/>
                                            </svg>
                                        </span>
                                        <div>
                                            {{-- <p class="mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                            Payment
                                            </p> --}}
                                            <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                            Secure Payment
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mb-4 lg:mb-0 md:w-2/5">
                                    <div class="flex ">
                                        <span class="mr-3 text-gray-500 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/></svg>
                                        </span>
                                        <div>
                                            <h2 class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                            Easy Returns
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="py-6 mb-6 border-t border-b border-gz-brown-300 dark:border-gray-700">
                    <span class="text-base text-gz-brown-300 dark:text-gray-400">In Stock</span>
                    <p class="mt-2 text-sm font-ridley text-yellow-500 dark:text-yellow-200">Ships from Abuja
                        <span class="text-gray-600">
                        to other states within 2-5 days.
                        </span>
                    </p>
                    <p class="mt-2 text-sm font-ridley text-yellow-500">Ships within 12-24hrs in Abuja.</p>
                    </div>
                    <div class="mb-6 "></div>
                    <div class="flex flex-wrap items-center mb-6">
                    <div class="mb-4 mr-4 lg:mb-0">
                        <div class="w-28">
                            <div class="relative flex flex-row w-full h-10 bg-transparent rounded-lg">
                                <button class="w-20 h-full text-gz-brown-100 bg-gz-brown-300 outline-none cursor-pointer hover:text-gz-brown-400 hover:bg-gz-brown-200">
                                <span class="m-auto text-2xl font-thin">-</span>
                                </button>
                                <input type="number" class="border-gz-brown-300 flex items-center w-full font-semibold text-center text-gz-brown-100 placeholder-gz-brown-100 bg-gz-brown-400 outline-none focus:outline-none text-md hover:text-black" placeholder="1">
                                <button class="w-20 h-full text-gz-brown-100 bg-gz-brown-300 outline-none cursor-pointer hover:text-gz-brown-400 hover:bg-gz-brown-200">
                                <span class="m-auto text-2xl font-thin">+</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 lg:mb-0">
                        <button class="flex items-center justify-center w-full h-10 p-2 mr-4 text-gz-brown-100 border border-gz-brown-300 lg:w-11 hover:text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gz-brown-300 hover:stroke-gz-brown-200" width="16" height="16" fill="currentColor" class=" bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                            </svg>
                        </button>
                    </div>
                    <a href="#" class="w-full px-4 py-3 text-center text-gz-brown-100 bg-gz-brown-300 border border-gz-brown-300 hover:text-gz-brown-400 hover:bg-gz-brown-200 lg:w-1/2">
                    Add to cart
                    </a>
                    </div>
                    <div class="flex gap-4 mb-6">
                    <a href="#" class="w-full px-4 py-3 text-center text-white bg-gz-brown-200 border border-transparent hover:border-yellow-500 hover:text-gz-brown-400 hover:bg-gz-brown-100">
                    Buy now</a>
                    </div>
                </div>
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