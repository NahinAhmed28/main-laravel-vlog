@extends('layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;margin: 0 auto;">
        <a class="btn btn-warning" href="{{route('members.create')}}" role="button">  @include('layouts.rightarrow') Add New Member</a>
    </div>

    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Education</th>
            <th scope="col">Role</th>


        </tr>
        </thead>

        <tbody>
        @foreach($members as $member)
            <tr>

                <td>{{$member->id}}</td>
                <td>{{$member->name}}</td>
                <td>{{$member->email}}</td>
                <td> {{$member->address}}</td>
                <td> {{$member->education}}</td>
                <td> {{$member->role}}</td>


            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>

@endsection
