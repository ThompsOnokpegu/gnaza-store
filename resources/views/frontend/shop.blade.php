@extends('frontend.layouts.main')

@section('content')
<section class="flex items-center flex-col py-24 bg-gz-brown-400">
    <div class="px-4 mx-auto max-w-7xl">
        <!--product row 1-->
        <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($products as $product)
                @php
                    $category = $product->category;
                @endphp
                <a href="{{ route('product.details',compact('category','product',)) }}">
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
                                <h3 class="mb-2 text-xl text-gz-black-200 ">{{ $product->name }}</h3>
                                <p class="text-lg font-bold text-gz-black-100">
                                    <span>{{$product->regular_price }}</span>
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
                </a>
            @empty
                <div>No products found!</div>
            @endforelse   
        </div>
    </div>
</section> 
@endsection 