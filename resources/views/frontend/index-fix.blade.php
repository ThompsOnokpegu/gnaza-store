<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('frontend/styless.min.css') }}">
        <link href="https://fonts.cdnfonts.com/css/ridley-grotesk" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Meddon&family=Montserrat:wght@300;400;600;700&family=Playfair+Display&display=swap">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="bg-white dark:bg-gray-900">
            <nav x-data="{ isOpen: false }" class="relative bg-white dark:bg-gray-900">
                <div class="container px-6 lg:px-16 py-4 mx-auto md:flex md:justify-between md:items-center">
                    <div class="flex items-center justify-between">
                        <div class="flex md:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                                </svg>

                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            
                        </div>
                        <a href="#">
                            <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
                        </a>
            
                        <!-- Mobile menu button -->
                        <div class="flex md:hidden">
                            
                            <div class="flex justify-center md:block">
                                <a class="relative text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300" href="#">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                
                                    <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-900 md:bg-transparent md:dark:bg-transparent md:mt-0 md:p-0 md:top-0 md:relative md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                        <div class="flex flex-col md:flex-row md:mx-6">
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">Home</a>
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">Shop</a>
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">Contact</a>
                            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">About</a>
                        </div>
            
                        <div class="flex justify-center md:block">
                            <a class="hidden md:block relative text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300" href="#">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
            
                                <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container px-6 lg:px-16 py-16 mx-auto">
                <div class="items-center flex">
                    <div class="w-full lg:w-1/2">
                        <div class="lg:max-w-lg">
                            <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Best place to choose <br> your <span class="text-blue-500 ">clothes</span></h1>
                            
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                            
                            <button class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop Now</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                        <img class="w-full h-full lg:max-w-3xl" src="https://merakiui.com/images/components/Catalogue-pana.svg" alt="Catalogue-pana.svg">
                    </div>
                </div>
            </div>
        </header>
        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 lg:px-16 py-16 mx-auto">
                <div class="items-center lg:flex">
                    <div class="w-full lg:w-1/2">
                        <div class="lg:max-w-lg">
                            <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Best place to choose <br> your <span class="text-blue-500 ">clothes</span></h1>
                            
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                            
                            <button class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop Now</button>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                        <img class="w-full h-full lg:max-w-3xl" src="https://merakiui.com/images/components/Catalogue-pana.svg" alt="Catalogue-pana.svg">
                    </div>
                </div>
            </div>
        </section>

        <footer aria-label="Site Footer" class="bg-gz-brown-300 mb-0">
            <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                <a href=""></a><img class="h-12 w-auto mx-auto object-contain" src="{{ asset('frontend/images/gnaza-logo.png') }}" alt="logo" />
                {{-- <div class="mx-auto mt-6 w-full text-center leading-relaxed text-gray-800 font-ridley">Accessorize your look with a bold statement necklace or add some stackable rings and bracelets to your arm candy.</div> --}}
                <nav aria-label="Footer Nav" class="mt-12">
                    <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12 font-ridley">
                        <li>
                        <a class="cursor-pointer font-medium text-gray-800 transition hover:text-gray-800/75 hover:underline"> About </a>
                        </li>
                        <li>
                        <a class="cursor-pointer font-medium text-gray-800 transition hover:text-gray-800/75 hover:underline"> Products </a>
                        </li>
                        <li>
                        <a class="cursor-pointer font-medium text-gray-800 transition hover:text-gray-800/75 hover:underline"> Contact </a>
                        </li>
                        <li>
                        <a class="cursor-pointer font-medium text-gray-800 transition hover:text-gray-800/75 hover:underline"> Terms &amp; Condition </a>
                        </li>
                        <li>
                        <a class="cursor-pointer font-medium text-gray-800 transition hover:text-gray-800/75 hover:underline"> Privacy Policy </a>
                        </li>
                        <li>
                        <a class="cursor-pointer font-medium text-gray-800 transition hover:text-gray-800/75 hover:underline"> Exchange &amp; Returns </a>
                        </li>
                    </ul>
                </nav>
                <ul class="mt-12 flex items-center justify-center gap-6 md:gap-8">
                    <li>
                        <a target="_blank" class="cursor-pointer text-gz-brown-100 transition hover:text-gray-800/75">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" class="cursor-pointer text-gz-brown-100 transition hover:text-gray-800/75">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" class="cursor-pointer text-gz-brown-100 transition hover:text-gray-800/75">
                        <span class="sr-only">TikTok</span>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-8 w-8" viewBox="0 0 30 30" fill="currentColor">
                            <path d="M22.5 9.84202C20.4357 9.84696 18.4221 9.20321 16.7435 8.00171V16.3813C16.7429 17.9333 16.2685 19.4482 15.3838 20.7233C14.499 21.9984 13.246 22.973 11.7923 23.5168C10.3387 24.0606 8.75362 24.1477 7.24914 23.7664C5.74466 23.3851 4.39245 22.5536 3.37333 21.383C2.3542 20.2125 1.71674 18.7587 1.54617 17.2161C1.3756 15.6735 1.68007 14.1156 2.41884 12.7507C3.15762 11.3858 4.2955 10.279 5.68034 9.57823C7.06517 8.87746 8.63095 8.61616 10.1683 8.82927V13.0439C9.4648 12.8227 8.70938 12.8293 8.0099 13.063C7.31041 13.2966 6.70265 13.7453 6.2734 14.345C5.84415 14.9446 5.61536 15.6646 5.6197 16.402C5.62404 17.1395 5.8613 17.8567 6.29759 18.4512C6.73387 19.0458 7.34688 19.4873 8.04906 19.7127C8.75125 19.9381 9.5067 19.9359 10.2075 19.7063C10.9084 19.4768 11.5188 19.0316 11.9515 18.4345C12.3843 17.8374 12.6173 17.1188 12.6173 16.3813V0H16.7435C16.7406 0.348435 16.7698 0.696395 16.8307 1.03948V1.03948C16.9741 1.80537 17.2722 2.53396 17.7068 3.18068C18.1415 3.8274 18.7035 4.37867 19.3585 4.80075C20.2903 5.41688 21.3829 5.74528 22.5 5.74505V9.84202Z"/>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a class="cursor-pointer text-gz-brown-100 transition hover:text-gray-800/75">
                        <span class="sr-only">Youtube</span>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-8 w-8" fill="currentColor" viewBox="0 0 64 64">
                            <path d="M 32 15 C 14.938 15 12.659656 15.177734 10.472656 17.427734 C 8.2856563 19.677734 8 23.252 8 32 C 8 40.748 8.2856562 44.323266 10.472656 46.572266 C 12.659656 48.821266 14.938 49 32 49 C 49.062 49 51.340344 48.821266 53.527344 46.572266 C 55.714344 44.322266 56 40.748 56 32 C 56 23.252 55.714344 19.677734 53.527344 17.427734 C 51.340344 15.177734 49.062 15 32 15 z M 32 19 C 45.969 19 49.379156 19.062422 50.535156 20.232422 C 51.691156 21.402422 52 24.538 52 32 C 52 39.462 51.691156 42.597578 50.535156 43.767578 C 49.379156 44.937578 45.969 45 32 45 C 18.031 45 14.620844 44.937578 13.464844 43.767578 C 12.308844 42.597578 12.03125 39.462 12.03125 32 C 12.03125 24.538 12.308844 21.402422 13.464844 20.232422 C 14.620844 19.062422 18.031 19 32 19 z M 27.949219 25.017578 L 27.949219 38.982422 L 40.095703 31.945312 L 27.949219 25.017578 z"></path>
                        </svg>
                        </a>
                    </li>
                </ul>
                <div class="mx-auto mt-12 w-full text-center leading-relaxed text-gray-800">&copy; 2024 All right reserved</div>
            </div>          
        </footer>

        <script src="//unpkg.com/alpinejs" defer></script>
    </body>
</html>