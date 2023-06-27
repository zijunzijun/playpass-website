<header>
    <div class="relative bg-duffy-100 @if(isset($navRounded) && $navRounded === true) lg:rounded-b-3xl @endif">
        <div class="wrapper">
            <div class="flex justify-between items-center py-4 lg:justify-start lg:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="/" class="ep-logo">
                        <span class="sr-only">Experience Penang 2020</span>
                        <img src="{{asset('images/logo-ep2020.svg')}}" alt="Experience Penang 2020 Logo">
                    </a>
                </div>
                {{--Toogle button--}}
                <div class="-mr-2 -my-2 lg:hidden">
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
                <nav id="menu" class="hidden lg:block">
                    <div class="inner">
                        <div class="links">
                            <a href="/"
                               class="link">
                                Penang Playpass
                            </a>

                            <a role="link" aria-disabled="true"
                               class="link">
                                How it works
                            </a>

                            <a href="{{route('website.attractions.index')}}"
                               class="link">
                                Attractions
                            </a>

                            <a role="link" aria-disabled="true"
                               class="link">
                                Guidebook
                            </a>

                            <div class="order-first mb-4 flex items-center justify-between lg:hidden">
                                <div>
                                    <img class="h-10 lg:h-16 w-auto relative"
                                         src="{{asset('images/logo-ep2020.svg')}}" alt="Experience Penang 2020 Logo">
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


                        <div class="pt-5 pb-6 px-5 lg:p-0 lg:hidden">
                            <a href="{{route('website.checkout.pricing')}}"
                               class="w-full flex items-center justify-center px-4 py-3 border border-transparent rounded shadow-sm text-base font-medium text-white bg-lina-600 hover:bg-lina-700">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="hidden lg:flex items-center justify-end">
                    <a href="{{route('website.checkout.pricing')}}"
                       class="whitespace-nowrap btn btn-primary">
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
