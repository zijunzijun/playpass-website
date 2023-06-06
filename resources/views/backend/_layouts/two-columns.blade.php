@extends('backend._base')

@section('main')
    @include('backend._components.nav')
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                @yield('head')
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">@yield('left')</div>
            <div class="col-md-6">@yield('right')</div>
        </div>
    </div>
@endsection
