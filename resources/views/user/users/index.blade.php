@extends('user.layouts.app')
@section('content')


    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Created at</th>

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


            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
