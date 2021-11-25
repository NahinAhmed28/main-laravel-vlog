@extends('user.layouts.app')
@section('content')



    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>


        </tr>
        </thead>

        <tbody>
        @foreach($categories as $category)
            <tr>

                <td>{{$category->id}}</td>
                <td>{{$category->id}}</td>
                <td> {{$category->title}}</td>
                <td> {{$category->description}}</td>


            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>
@endsection
