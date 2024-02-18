@extends('frontend.layouts.main')

@section('content')
<section class="flex items-center flex-col py-24 bg-gz-brown-400">
    <div class="px-4 mx-auto max-w-7xl">
        <!--product row 1-->
        <div class="grid grid-cols-1 gap-4 lg:gap-4 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <a href="#">
                <div class="w-full">
                    <div class="p-4 text-cente bg-whit rounde shado">
                        <div class="block mb-2" href="#">
                            <div class="relative overflow-hidden">
                                <div class="mb-5 overflow-hidden">
                                    <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110"
                                        src="{{ asset('frontend/images/look-3-1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl text-gz-black-200 "> Nikon Lenses </h3>
                            <p class="text-lg font-bold text-gz-black-100">
                                <span>₦9600</span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section> 
@endsection 