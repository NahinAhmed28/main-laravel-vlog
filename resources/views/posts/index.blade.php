@extends('layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;margin: 0 auto;">
        <a class="btn btn-warning" href="{{route('posts.create')}}" role="button">  @include('layouts.rightarrow') Add New Post</a>
    </div>

    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">category</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>


        </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>

                <td>{{$post->id}}</td>
                <td>{{$post->id}}</td>
                <td>{{$post->category}}</td>
                <td> {{$post->title}}</td>
                <td> {{$post->description}}</td>


            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>

@endsection
