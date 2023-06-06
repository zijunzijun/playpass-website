@extends('backend._base')

@section('main')
    @include('backend._components.nav')
    <div class="container">
        <div class="row my-3">
            <div class="col-12 col-md-6 offset-md-3">
                @yield('layout')
            </div>
        </div>
    </div>
@endsection
