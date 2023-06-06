@extends('backend._layouts.app', ['active' => 'user'])

@section('layout')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Users</h2>
        <a href="{{route('backend.user.create')}}" class="btn btn-primary text-white float-end">
            <i class="fas fa-plus me-2"></i> User
        </a>
    </div>

    @include('_component.alert')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Member Since</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td scope="row">{{$user->id}}</td>
                            <td>
                                <a href="{{route('backend.user.edit', $user)}}">{{$user->name}}</a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{optional($user->created_at)->format('Y-m-d')}}</td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center">No User</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
