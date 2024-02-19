@extends('frontend.layouts.main')

@section('content')
<section class="pb-24 pt-12 bg-gz-brown-400 sm:py-16 lg:py-20">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <h1 class="text-2xl font-semibold text-gray-900">Your Cart</h1>
      </div>
  
      @livewire('frontend.view-cart',['cart'=>$cart])
    </div>
</section>
  
@endsection