@extends('backend._layouts.narrow', ['active' => 'user'])

@section('layout')
    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex align-items-center">
            <a href="{{route('backend.user.index')}}" class="btn btn-link">
                <i class="fas fa-chevron-left me-2"></i>
            </a>
            <h2>Update <strong>{{$user->name}}</strong></h2>
        </div>
    </div>
    @include('_component.alert')
    <div class="card my-3">
        <div class="card-body">
            <form class="form-horizontal" method="POST"
                  action="{{route('backend.user.update', $user)}}">
                @include('backend.user._form')
                @method('PATCH')
                @csrf
                <div class="mb-3 row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password-confirmation" class="col-sm-4 col-form-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password_confirmation"
                               id="password-confirmation">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary text-light">Update</button>
                <button type="button" class="btn btn-outline-danger float-right" data-bs-toggle="modal"
                        data-bs-target="#deleteModal">
                    Delete
                </button>
            </form>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Confirm deleting <strong>{{$user->name}}</strong> permanently.
                </div>
                <div class="modal-footer">
                    <form class="form-horizontal" method="POST"
                          action="{{route('backend.user.update', $user)}}">
                        @method('DELETE')
                        @csrf

                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
