@extends('backend._layouts.narrow', ['active' => 'administrator'])

@section('layout')
    @include('_component.alert')
    <div class="card shadow-sm">
        <div class="card-header">
            Create Administrator
        </div>
        <div class="card-body p-5">
            <form class="form-horizontal" method="POST" action="{{route('backend.administrator.store')}}">
                @include('backend.administrator._form')
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
                    <a href="{{route('backend.administrator.index')}}"
                       class="custom-btn btn btn-outline-light text-muted">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
