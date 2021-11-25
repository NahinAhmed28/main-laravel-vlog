@extends('user.layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;margin: 0 auto;">
        <a class="btn btn-warning" href="{{route('user.commentCreate')}}" role="button">  @include('admin.layouts.rightarrow') Add New Comment</a>
    </div>


    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Comment Title</th>
            <th scope="col">Description</th>
            <th scope="col">POST Title</th>
            <th scope="col">Created At</th>


        </tr>
        </thead>

        <tbody>
        @foreach($comments as $comment)
            <tr>

                <td>{{$comment->id}}</td>
                <td>{{$comment->id}}</td>
                <td>{{$comment->title}}</td>
                <td>{{$comment->description}}</td>
                <td>{{$comment->getPostName($comment->post_id)}}</td>
                <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>

            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>
@endsection
