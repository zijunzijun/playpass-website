<header>
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-4 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">PlayPass</span>
                        <img class="h-6 w-auto"
                             src="{{asset('images/logo.svg')}}" alt="PlayPass Logo">
                    </a>
                </div>
                {{--Toogle button--}}
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                            onclick="naviTrigger();"
                            class="nav-trigger bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-50 focus:outline-none focus:ring-0">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/bars-2 -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                        </svg>

                        </svg>
                    </button>
                </div>
                <nav id="menu" class="absolute z-10 top-0 inset-x-0 hidden
                transform origin-top-right
                transition duration-100 ease-in
                md:relative md:block">
                    <div class="bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5
                    divide-y-2 divide-gray-50 md:shadow-none md:ring-0">

                        <div class="flex flex-col md:flex-row md:space-x-7 pt-4 pb-2 px-4 md:p-0">
                            <a href="#"
                               class="block py-3 md:py-2 text-lg md:text-sm font-semibold md:font-medium text-gray-900 hover:text-gray-700">
                                Penang Playpass
                            </a>

                            <a href="#"
                               class="block py-3 md:py-2 text-lg md:text-sm font-semibold md:font-medium text-gray-900 hover:text-gray-700">
                                How it works
                            </a>

                            <a href="#"
                               class="block py-3 md:py-2 text-lg md:text-sm font-semibold md:font-medium text-gray-900 hover:text-gray-700">
                                Attractions
                            </a>

                            <a href="#"
                               class="block py-3 md:py-2 text-lg md:text-sm font-semibold md:font-medium text-gray-900 hover:text-gray-700">
                                Guidebook
                            </a>

                            <div class="order-first mb-4 flex items-center justify-between md:hidden">
                                <div>
                                    <img class="h-6 w-auto" src="{{asset('images/logo.svg')}}"
                                         alt="PlayPass Logo">
                                </div>
                                <div class="-mr-2 -my-2">
                                    <button type="button"
                                            onclick="naviTrigger();"
                                            class="nav-trigger bg-white rounded-md p-2 inline-flex items-center justify-center
                                        text-gray-400 hover:text-gray-500
                                        hover:bg-gray-50 focus:outline-none
                                        focus:ring-0">
                                        <span class="sr-only">Close menu</span>
                                        <!-- Heroicon name: outline/x-mark -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="pt-5 pb-6 px-5 md:p-0 md:hidden">
                            <a href="#"
                               class="w-full flex items-center justify-center px-4 py-3 border border-transparent rounded shadow-sm text-base font-medium text-white bg-lina-600 hover:bg-lina-700">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="hidden md:flex items-center justify-end">
                    <a href="#"
                       class="whitespace-nowrap inline-flex items-center justify-center px-5 py-2.5 border border-transparent rounded text-sm font-medium text-white bg-lina-600 hover:bg-lina-700">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>



@push('script')
    <script>
        function naviTrigger() {
            const menu = document.querySelector('#menu')
            menu.classList.toggle('hidden');
        }
    </script>
@endpush
