@extends('website._layouts.app', ['navRounded' => true])
@section('title', 'Buy Now | Penang Playpass')

@section('layout')
    <div id="vue-app" class="pt-12 md:pt-20">
        <div class="wrapper">
            <div class="grid grid-cols-12 gap-8 lg:gap-16">
                <div class="col-span-12 lg:col-span-8">
                    <h2 class="mb-1 md:mb-2.5">Pass duration and prices</h2>
                    <div class="body-1">
                        Select your pass duration and enjoy access to over 25 attractions including the Tower of London, The Shard, and a hop-on hop-off bus tour.
                    </div>
                </div>
            </div>
            <Checkout></Checkout>
        </div>
    </div>
@endsection