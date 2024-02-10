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
                <h1 class="text-4xl sm:text-5xl md:text-7xl leading-normal sm:mb-7 font-playfair text-gz-black-200">Discover Timeless Luxury at
                    <span class="font-meddon text-gz-brown-200">Gnaza</span>
                </h1>
                <p class="sm:text-md font-montserrat text-md sm:text-lg text-gz-black-200">Accessorize your look with a bold statement necklace or add some
                    stackable rings and bracelets to your arm candy.</p>            
            </div>
            <button type="button" class="inline-block border border-gz-brown-200 px-6 py-4 text-xl text-gz-brown-200 hover:text-gz-brown-100 font-bold leading-tight uppercase hover:bg-gz-brown-300 hover:border-gz-brown-300">EXPLORE PRODUCTS</button>
            </div>
            <div class="col-span-12 sm:col-span-5 sm:block hidden mt-2">
                <img src="{{ asset('frontend/images/hero-image1.png') }}" alt="" />
            </div>
 
        </div>
    </div>
</header>
<section class="flex items-center flex-col py-24">
    <div class="px-4 mx-auto max-w-7xl">
        <h1 class="text-3xl sm:text-4xl md:text-6xl text-center leading-normal mb-7 font-playfair text-gz-black-200">Featured Products</h1>
        <!--product row 1-->
        <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="{{ asset('frontend/images/look-3-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200 "> Nikon Lenses </h3>
                        </a>
                        <p class="text-lg font-bold text-gz-black-100">
                            <span>₦9600</span>
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
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="https://i.postimg.cc/sgKB6VR6/ryan-plomp-a-Ctb-RTwu-M-unsplash-1.jpg"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200"> Nike Shoes </h3>
                        </a>
                        <p class="text-lg font-bold text-black text-gz-black-100">
                            <span>₦12500</span>
                        </p>
                        <button
                            class="flex items-center justify-center mx-auto mt-4 font-bold text-center text-gz-brown-200 group group">
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
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="{{ asset('frontend/images/look-3-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200 "> Nikon Lenses </h3>
                        </a>
                        <p class="text-lg font-bold text-gz-black-100">
                            <span>₦12500</span>
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
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="{{ asset('frontend/images/look-3-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200 "> Nikon Lenses </h3>
                        </a>
                        <p class="text-lg font-bold text-gz-black-100">
                            <span>₦12500</span>
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
        </div>
        <!--product row 2-->
        <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4 pt-5">
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="{{ asset('frontend/images/look-3-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200 "> Nikon Lenses </h3>
                        </a>
                        <p class="text-lg font-bold text-gz-black-100">
                            <span>₦12500</span>
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
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="https://i.postimg.cc/sgKB6VR6/ryan-plomp-a-Ctb-RTwu-M-unsplash-1.jpg"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200"> Nike Shoes </h3>
                        </a>
                        <p class="text-lg font-bold text-black text-gz-black-100">
                            <span>₦12500</span>
                        </p>
                        <button
                            class="flex items-center justify-center mx-auto mt-4 font-bold text-center text-gz-brown-200 group group">
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
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="{{ asset('frontend/images/look-3-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200 "> Nikon Lenses </h3>
                        </a>
                        <p class="text-lg font-bold text-gz-black-100">
                            <span>₦12500</span>
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
            <div class="w-full">
                <div class="p-4 text-center bg-white rounded shadow dark:bg-gray-700">
                    <div class="block mb-2" href="#">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                    src="{{ asset('frontend/images/look-3-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h3 class="mb-2 text-xl text-gz-black-200 "> Nikon Lenses </h3>
                        </a>
                        <p class="text-lg font-bold text-gz-black-100">
                            <span>₦12500</span>
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
            
        </div>
    </div>
    <div class="px-4 mx-auto max-w-7xl pt-10">
        <button type="button" class="inline-block border border-gz-brown-200 px-6 py-4 text-xl text-gz-brown-200 hover:text-gz-brown-100 font-bold leading-tight uppercase hover:bg-gz-brown-300">VIEW MORE PRODUCTS</button>
    </div>
</section>
@endsection
