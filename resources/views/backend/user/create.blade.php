@extends('backend._layouts.narrow', ['active' => 'user'])

@section('layout')
    <div class="d-flex justify-content-between mb-3">
        <h2>Add User</h2>
    </div>
    @include('_component.alert')
    <div class="card shadow-sm">
        <div class="card-body p-5">
            <form class="form-horizontal" method="POST" action="{{route('backend.user.store')}}">
                @include('backend.user._form')
                @csrf

                <div class="mb-3">
                    <div class="row no-gutters">
                        <div class="col-lg-3">
                            <label for="password" class="col-form-label required">Password</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row no-gutters">
                        <div class="col-lg-3">
                            <label for="password-confirmation" class="col-form-label required">Confirm Password</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password_confirmation"
                                   id="password-confirmation" required>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button class="custom-btn btn btn-primary text-light"><i class="fas fa-save me-2"></i>Save</button>
                    <a href="{{route('backend.user.index')}}"
                       class="custom-btn btn btn-outline-light text-muted">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
