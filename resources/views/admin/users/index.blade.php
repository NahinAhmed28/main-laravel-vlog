@extends('admin.layouts.app')
@section('content')
    <div class="col-md-6" style="display: block">
        <a class="btn btn-warning" href="{{route('users.create')}}" role="button">  @include('admin.layouts.rightarrow')Register New User</a>
    </div>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Created at</th>
            <th>phone</th>
            <th>country</th>
            <th>address</th>
            <th>education</th>
            <th scope="col">Action</th>


        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role_id }}</td>

                <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->country }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->education }}</td>
                <td>
                    <a href="{{ route('users.edit',[$user->id]) }}" title="View Student">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit
                        </button></a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
