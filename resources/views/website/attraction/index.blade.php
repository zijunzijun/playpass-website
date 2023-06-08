@extends('website._layouts.app')
@section('title', 'Penang Attractions | Penang Playpass')

@section('layout')
    <div class="w-full bg-duffy-100">
        <div class="wrapper">
            <div class="grid grid-cols-12 gap-8 lg:gap-16 mb-20 md:mb-32">
                <div class="col-span-12 lg:col-span-8">
                    <div class="transform translate-y-8 md:translate-y-16 flex space-x-4 md:space-x-6 items-end">
                        <figure class="w-28 md:w-36 pb-2">
                            <img src="{{asset('images/cards/voucher-on-phone.png')}}" alt="">
                        </figure>
                        <div class="flex-1 space-y-2 md:space-y-6">
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
    <div id="vue-app">
        <div class="wrapper">
            <div class="w-full">
                <h2 class="mb-1 md:mb-2.5">Experience Penang with a single pass!</h2>
                <div class="body-1">
                    Select visit attraction and view your savings.
                </div>
            </div>
            <Attractions/>
        </div>
    </div>
@endsection