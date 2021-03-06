@extends('admin.layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;">
        <a class="btn btn-warning" href="{{route('comments.create')}}" role="button">  @include('admin.layouts.rightarrow') Add New Comment</a>
    </div>


    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">Comment <br> ID</th>
            <th scope="col">POST <br> ID</th>
            <th scope="col">POST  <br> Title</th>
            <th scope="col">Comment <br> Title</th>
            <th scope="col">Comment<br> Description</th>
            <th scope="col">Created At</th>


        </tr>
        </thead>

        <tbody>
        @foreach($comments as $comment)
            <tr>

                <td>{{$comment->id}}</td>
                <td>{{$comment->post_id}}</td>
                <td>{{$comment->post->title}}</td>
                <td>{{$comment->title}}</td>
                <td>{{$comment->description}}</td>
                <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>

            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>
@endsection
