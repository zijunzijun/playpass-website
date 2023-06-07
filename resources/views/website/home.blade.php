@extends('website._layouts.app')
@section('title', 'One pass with 20+ Attractions | Penang Play Pass')

@section('layout')
    <div class="home-header bg-duffy-100">
        <div class="wrapper">
            <div class="pt-20 lg:flex items-center justify-center">
                <div class="text-7xl lg:text-6xl font-bold">One Pass</div>
                <div class="cards">
                    <figure>
                        <img src="{{asset('images/cards/card-1-day.png')}}" alt="">
                    </figure>
                    <figure>
                        <img src="{{asset('images/cards/card-2-day.png')}}" alt="">
                    </figure>
                    <figure>
                        <img src="{{asset('images/cards/card-3-day.png')}}" alt="">
                    </figure>
                </div>
                <div class="text-4xl md:text-6xl font-bold">with 20+ Attractions!</div>
            </div>
        </div>
    </div>
    <div class="w-full relative py-10 md:py-16 bg-duffy-50">
        <div class="absolute left-0 top-0 right-0 w-full h-1/2 bg-duffy-100 rounded-b-xl lg:rounded-b-3xl"></div>
        <div class="wrapper relative">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="card-type bg-lina-600">
                    <div class="header">
                        <figure>
                            <img src="{{asset('icons/cards/card-outline.svg')}}" alt="">
                        </figure>
                        <div class="title">
                            <div class="day">1</div>
                            <div class="flex-1">Day<br>Pass</div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="item">
                            <div class="inner">
                                <div class="variant">Adult</div>
                                <div class="dotted">
                                </div>
                                <div class="price">RM 149</div>
                            </div>
                            <div class="price-for-mykad">RM 119 (MyKad)</div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <div class="variant">Child</div>
                                <div class="dotted">
                                </div>
                                <div class="price">RM 89</div>
                            </div>
                            <div class="price-for-mykad">RM 69 (MyKad)</div>
                        </div>
                    </div>
                </div>
                <div class="card-type bg-olu-300">
                    <div class="header">
                        <figure>
                            <img src="{{asset('icons/cards/card-outline.svg')}}" alt="">
                        </figure>
                        <div class="title">
                            <div class="day">2</div>
                            <div class="flex-1">Day<br>Pass</div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="item">
                            <div class="inner">
                                <div class="variant">Adult</div>
                                <div class="dotted">
                                </div>
                                <div class="price">RM 289</div>
                            </div>
                            <div class="price-for-mykad">RM 219 (MyKad)</div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <div class="variant">Child</div>
                                <div class="dotted">
                                </div>
                                <div class="price">RM 175</div>
                            </div>
                            <div class="price-for-mykad">RM 135 (MyKad)</div>
                        </div>
                    </div>
                </div>
                <div class="card-type bg-cookie-500">
                    <div class="header">
                        <figure>
                            <img src="{{asset('icons/cards/card-outline.svg')}}" alt="">
                        </figure>
                        <div class="title">
                            <div class="day">3</div>
                            <div class="flex-1">Day<br>Pass</div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="item">
                            <div class="inner">
                                <div class="variant">Adult</div>
                                <div class="dotted">
                                </div>
                                <div class="price">RM 419</div>
                            </div>
                            <div class="price-for-mykad">RM 329 (MyKad)</div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <div class="variant">Child</div>
                                <div class="dotted">
                                </div>
                                <div class="price">RM 259</div>
                            </div>
                            <div class="price-for-mykad">RM 199 (MyKad)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-duffy-50 rounded-b-xl lg:rounded-b-3xl">
        <div class="wrapper pt-8 pb-20 lg:pb-32">
            <div class="text-center w-full max-w-screen-md mx-auto space-y-4">
                <h2>Experience Penang with a single pass!</h2>
                <div class="body-1">
                    Don't know what to do or where to go in Penang?
                    <br>
                    Penang Playpass has you covered! Anything from famous lantdmarks to transportation, it's all
                    available with just one pass!
                </div>
            </div>
            <div class="usp-items">
                <div class="item">
                    <div class="inner">
                        <figure>
                            <img src="{{asset('icons/usp/usp-komtar.svg')}}" alt="">
                        </figure>
                        <p>
                            Access 25++ top
                            attractions
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="inner">
                        <figure>
                            <img src="{{asset('icons/usp/usp-cable-car.svg')}}" alt="">
                        </figure>
                        <p>
                            Penang Hill Train
                            Return Trip included
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="inner">
                        <figure>
                            <img src="{{asset('icons/usp/usp-double-decker.svg')}}" alt="">
                        </figure>
                        <p>
                            1-day hop-on hop-off
                            bus tour included
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="inner">
                        <figure>
                            <img src="{{asset('icons/usp/usp-gift.svg')}}" alt="">
                        </figure>
                        <p>
                            Additional exclusive
                            deals and discounts
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        {{-- Recommended Attractions --}}
        <div class="py-20">
            <div class="flex items-center justify-between">
                <h2>Recommended Attractions</h2>
                <div class="flex-shrink-0">
                    <a href="" class="inline-flex items-center hover:underline">
                        <p class="button-text-2">See All Attractions</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="w-5 h-5 text-cookie-500">
                            <path fill-rule="evenodd"
                                  d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative py-4 md:py-8">
                <div class="swiper attractionSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-attraction">
                                <div class="details">
                                    <div class="inner">
                                        <div class="name">The Habitat Penang Hill</div>
                                        <div class="text-xs text-lina-50">Included with pass - Normally RM 47</div>
                                    </div>
                                </div>
                                <div class="image">
                                    <figure>
                                        <img src="{{asset('images/attractions/the-habitat-penang-hill.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-attraction">
                                <div class="details">
                                    <div class="inner">
                                        <div class="name">Penang Hill Train (Fast Lane)</div>
                                        <div class="text-xs text-lina-50">Included with pass - Normally RM 80</div>
                                    </div>
                                </div>
                                <div class="image">
                                    <figure>
                                        <img src="{{asset('images/attractions/penang-hill-train.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-attraction">
                                <div class="details">
                                    <div class="inner">
                                        <div class="name">Entopia - Voices of Nature</div>
                                        <div class="text-xs text-lina-50">Included with pass - Normally RM 75</div>
                                    </div>
                                </div>
                                <div class="image">
                                    <figure>
                                        <img src="{{asset('images/attractions/entopia.png')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-attraction">
                                <div class="details">
                                    <div class="inner">
                                        <div class="name">Penang Hop-On Hop-Off</div>
                                        <div class="text-xs text-lina-50">Hop-on Hop-off on weekend, Panoramic Tour on weekdays Normally RM 45/25</div>
                                    </div>
                                </div>
                                <div class="image">
                                    <figure>
                                        <img src="{{asset('images/attractions/penang-hop-on-hop-off.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-attraction">
                                <div class="details">
                                    <div class="inner">
                                        <div class="name">The Top Penang Skywalk</div>
                                        <div class="text-xs text-lina-50">Included with pass - Normally RM 61</div>
                                    </div>
                                </div>
                                <div class="image">
                                    <figure>
                                        <img src="{{asset('images/attractions/the-top-penang-skywalk.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block custom-swiper-button-next">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="15" stroke="currentColor" stroke-width="2"/>
                        <path d="m13 10 6 6-6 6" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <div class="hidden md:block custom-swiper-button-prev">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="15" stroke="currentColor" stroke-width="2"/>
                        <path d="m19 22-6-6 6-6" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Calculate How Much You Saved! --}}
        <div class="pb-20 lg:pb-32">
            <div class="text-center w-full max-w-screen-md mx-auto space-y-4">
                <h2>Calculate How Much You Saved!</h2>
                <div class="body-1">
                    Plan your itineraty and see how much you saved!
                </div>
            </div>
            <div class="py-4 md:py-10 space-y-4">
                <div class="max-w-screen-sm mx-auto bg-gray-100 py-10 px-4 md:py-14 md:px-10 rounded-3xl text-gray-900 font-bold">
                    <div class="flex items-center space-x-4 md:space-x-6">
                        <div class="flex-1 inline-flex flex-col items-end">
                            <div class="flex items-center space-x-2">
                                <div class="">Attraction</div>
                                <div class="inline-flex items-center justify-center w-14 h-14 border-12 border-lina-600 rounded-3xl">
                                    <h2>A</h2>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="inline-flex items-center justify-center w-14 h-14">
                                    <h2>+</h2>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="">Attraction</div>
                                <div class="inline-flex items-center justify-center w-14 h-14 border-12 border-olu-300 rounded-3xl">
                                    <h2>B</h2>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="inline-flex items-center justify-center w-14 h-14">
                                    <h2>+</h2>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="">Attraction</div>
                                <div class="inline-flex items-center justify-center w-14 h-14 border-12 border-cookie-500 rounded-3xl">
                                    <h2>C</h2>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2>=</h2>
                        </div>
                        <div class="flex-1">
                            <p>Original Price</p>
                            <h2>RM ???</h2>
                        </div>
                    </div>
                </div>
                <div class="max-w-screen-sm mx-auto bg-gray-100 p-8 md:p-14 rounded-3xl text-gray-900 font-bold">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4 md:pl-8">
                        <div class="-mx-2">
                            <div class="grid grid-cols-3">
                                <figure>
                                    <img src="{{asset('images/cards/card-1-day.png')}}" alt="">
                                </figure>
                                <figure>
                                    <img src="{{asset('images/cards/card-2-day.png')}}" alt="">
                                </figure>
                                <figure>
                                    <img src="{{asset('images/cards/card-3-day.png')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <div>
                            <p>With Penang PlayPass</p>
                            <h2>
                                You <span class="text-lina-600">Save</span> RM <span class="text-lina-600">???</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-md mx-auto">
                <a href=""
                   class="w-full btn btn-lg btn-outline-primary btn-with-icon">
                    <span>Compare now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                         class="w-5 h-5">
                        <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const swiperNewProducts = new Swiper('.attractionSwiper', {
            slidesPerView: 1.1,
            spaceBetween: 16,
            navigation: {
                nextEl: ".custom-swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
@endpush