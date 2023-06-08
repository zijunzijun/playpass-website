@extends('website._layouts.app')
@section('title', 'Penang Attractions | Penang Playpass')

@section('layout')
    <div class="w-full bg-duffy-100">
        <div class="wrapper">
            <div class="grid grid-cols-12 gap-8 lg:gap-16 mb-32">
                <div class="col-span-12 lg:col-span-8">
                    <div class="transform translate-y-16 flex space-x-6 items-end">
                        <figure class="w-36 pb-2">
                            <img src="{{asset('images/cards/voucher-on-phone.png')}}" alt="">
                        </figure>
                        <div class="flex-1 space-y-6">
                            <h2>Enjoy entry to 25+ top Penang attractions.
                                <br>
                                Save big on gate prices with Penang PlayPass.</h2>

                            <div class="grid grid-cols-3 -mx-1.5 lg:-mx-3 lg:w-10/12">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="w-full space-y-4">
            <h2>Experience Penang with a single pass!</h2>
            <div class="body-1">
                Select visit attraction and view your savings.
            </div>
        </div>
        <div class="flex flex-col items-start lg:grid lg:grid-cols-12 gap-8 lg:gap-16 pt-10 pb-32">
            <div class="col-span-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <div class="card-attraction selected">
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
                    <div class="card-attraction">
                        <div class="details">
                            <div class="inner">
                                <div class="name">Penang Hop-On Hop-Off</div>
                                <div class="text-xs text-lina-50">Hop-on Hop-off on weekend, Panoramic Tour on weekdays
                                    Normally RM 45/25
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <figure>
                                <img src="{{asset('images/attractions/penang-hop-on-hop-off.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
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
            <div class="col-span-4 w-full sticky bottom-0 lg:bottom-auto lg:top-4">
                <div class="attraction-summary -mx-4 px-4 pb-3 lg:pb-0 bg-white">
                    <div class="lg:hidden relative py-2.5">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 py-1 px-2.5 bg-white rounded-t-1/2">
                            <svg class="w-6 h-6 text-gray-700" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m6 15 6-6 6 6" stroke="currentColor" stroke-width="2"/></svg>
                        </div>
                        <div class="relative caption text-center font-semibold">Click to view your savings</div>
                    </div>
                    <div class="hidden lg:block">
                        <div class="top">
                            <h3 class="mb-4">Your Attrations</h3>
                            <div class="summary-list">
                                <div class="item">
                                    <div class="image">
                                        <figure>
                                            <img src="{{asset('images/attractions/the-habitat-penang-hill.jpg')}}"
                                                 alt="">
                                        </figure>
                                    </div>
                                    <div class="description">
                                        <div class="name">The Habitat Penang Hill</div>
                                        <div class="price">
                                            Normally <span class="text-lina-600">RM 45</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="image">
                                        <figure>
                                            <img src="{{asset('images/attractions/entopia.png')}}"
                                                 alt="">
                                        </figure>
                                    </div>
                                    <div class="description">
                                        <div class="name">Entopia - Voices of Nature</div>
                                        <div class="price">
                                            Normally <span class="text-lina-600">RM 75</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="space-y-1 caption">
                                <div class="flex items-center justify-between space-x-4">
                                    <div>
                                        Total gate price cost
                                    </div>
                                    <div class="flex-shrink-0">RM 125</div>
                                </div>
                                <div class="flex items-center justify-between space-x-4 text-lina-600">
                                    <div>
                                        Price of buying a
                                        <br>
                                        1-day Penang Play Pass
                                    </div>
                                    <div class="flex-shrink-0">RM 149</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between space-x-4 body-2 mt-3">
                                <div>
                                    How much you save with
                                    <br>
                                    Penang PlayPass
                                </div>
                                <div class="flex-shrink-0 text-lina-600">RM 149</div>
                            </div>
                        </div>
                        <div class="body-2 text-center py-3">
                            Don't miss out on Penang PlayPass!
                        </div>
                    </div>
                    <a href="" class="btn btn-primary w-full">Buy now</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
    </script>
@endpush