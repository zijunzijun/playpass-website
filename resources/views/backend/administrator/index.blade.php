@extends('backend._layouts.app', ['active' => 'administrator'])

@section('layout')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Administrator</h2>
        <a href="{{route('backend.administrator.create')}}" class="btn btn-primary text-light float-end">
            <i class="fas fa-plus me-2"></i> Administrator
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
                        <th scope="col">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($administrators as $administrator)
                        <tr>
                            <td scope="row">{{$administrator->id}}</td>
                            <td>
                                <a href="{{route('backend.administrator.edit', $administrator)}}">{{$administrator->name}}</a>
                            </td>
                            <td>{{$administrator->email}}</td>
                            <td>{{optional($administrator->created_at)->format('Y-m-d')}}</td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center">No Administrator</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
