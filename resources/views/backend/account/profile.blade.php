@extends('backend._layouts.narrow', ['active' => 'account'])

@section('layout')
    <div class="my-3">
        <h2>Update Profile</h2>
        @include('_component.alert')
        <div class="card shadow-sm my-3">
            <div class="card-body">
                <form class="form-horizontal" method="POST"
                      action="{{route('backend.account.update')}}">
                    @method('PATCH')
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label required">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" id="name" value="{{ $user->name }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label required">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}"
                                   required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password-confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password_confirmation"
                                   id="password-confirmation">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-light">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
