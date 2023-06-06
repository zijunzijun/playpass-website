@extends('backend._layouts.naked')

@section('layout')
    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-md-10">
                <div class="card rounded-lg shadow-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('images/hero-login-tm.jpg')}}" class="w-100">
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <div class="col-10 no-gutters mt-3">
                                <h4 class="text-center mb-5">{{ __('Login') }}</h4>
                                <div>
                                    <form method="POST" action="{{ route('backend.login.store') }}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required
                                                   autocomplete="email" autofocus>
                                            <label for="email">{{ __('Email') }}</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">
                                            <label for="password">{{ __('Password') }}</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>]
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-3 row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary text-white">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
