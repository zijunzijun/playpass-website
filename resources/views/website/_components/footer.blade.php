<footer>
    <div class="w-full bg-lina-600 text-white py-10">
        <div class="wrapper">
            <div class="flex items-center justify-between space-x-8">
                <div class="flex-1">
                    <div class="lg:flex lg:items-center lg:space-x-7">
                        <figure>
                            <img src="{{asset('images/logo-playpass-white.svg')}}" alt=""
                                 class="h-8">
                        </figure>
                        <div class="footer-links">
                            <a href="#">
                                How it works
                            </a>

                            <a href="#">
                                Attractions
                            </a>

                            <a href="#">
                                Guidebook
                            </a>

                            <a href="#">
                                Refund Policy
                            </a>
                        </div>
                        <a href=""
                           class="btn btn-outline-white w-full md:w-auto">Buy Now</a>
                    </div>
                </div>
                <div class="text-right">
                    <div class="caption whitespace-nowrap mb-2">
                        Powered by
                    </div>
                    <img src="{{asset('images/logo-playpinang-white.svg')}}" alt="playpinang logo"
                         class="h-4">
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-lina-700 text-white py-10 md:pt-14 md:pb-20">
        <div class="wrapper">
            <div class="flex flex-col lg:flex-row justify-between">
                <div>
                    <div class="flex space-x-10 lg:space-x-14">
                        <figure class="flex-shrink-0">
                            <img src="{{asset('images/logo-ep2020-white.svg')}}" alt=""
                                 class="h-14">
                        </figure>
                        <div class="max-w-sm caption !leading-5">
                            Experience Penang 2020 (EPY2020) is campaign by the Penang State Committee for Tourism,
                            Arts, Culture and Heritage to promote enriching, authentic and immersive local experience
                            for visiting travellers.
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 flex items-center md:items-start md:flex-col space-x-4 md:space-x-0 my-8 md:my-0">
                    <div class="text-sm font-medium md:mb-3">Follow us</div>
                    <div class="sns-links">
                        <a href="/" target="_blank">
                            <img src="{{asset('icons/sns/facebook.svg')}}" alt="Facebook">
                        </a>
                        <a href="/" target="_blank">
                            <img src="{{asset('icons/sns/instagram.svg')}}" alt="instagram">
                        </a>
                        <a href="/" target="_blank">
                            <img src="{{asset('icons/sns/twitter.svg')}}" alt="Twitter">
                        </a>
                        <a href="/" target="_blank">
                            <img src="{{asset('icons/sns/youtube.svg')}}" alt="Youtube">
                        </a>
                    </div>
                </div>
                <div class="text-xs">
                    <p class="mb-2">Copyright © {{ now()->year }}, All rights reserved.</p>
                    <div class="tnc-links">
                        <a href="/">Terms of Use</a>
                        <a href="/">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>