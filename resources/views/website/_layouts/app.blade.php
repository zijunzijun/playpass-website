@extends('website._base')

@section('main')
  @include('website._components.nav')
  @yield('layout')
  @include('website._components.footer')
@endsection
