<div class="mb-4 mr-4 lg:mb-0">
    <div class="w-28">
        <div class="relative flex flex-row w-full h-10 bg-transparent rounded-lg">
            <button wire:click="decrement()" class="w-20 h-full text-gz-brown-100 bg-gz-brown-300 outline-none cursor-pointer hover:text-gz-brown-400 hover:bg-gz-brown-200">
            <span class="m-auto text-2xl font-thin">-</span>
            </button>
           
            <input type="number" value="{{ $quantity }}" class="border-gz-brown-300 flex items-center w-full font-semibold text-center text-gz-brown-100 placeholder-gz-brown-100 bg-gz-brown-400 outline-none focus:outline-none text-md hover:text-black" placeholder="1">
            <button wire:click="increment()" class="w-20 h-full text-gz-brown-100 bg-gz-brown-300 outline-none cursor-pointer hover:text-gz-brown-400 hover:bg-gz-brown-200">
            <span class="m-auto text-2xl font-thin">+</span>
            </button>
        </div>
    </div>
</div>