@extends('admin.layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;margin: 0 auto;">
        <a class="btn btn-warning" href="{{route('posts.create')}}" role="button">  @include('admin.layouts.rightarrow') Add New Post</a>
    </div>

    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">POST Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>



        </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>
                    <img src="{{asset('uploads/postFiles/'.$post->file_path)}}" width="150">
                </td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>

                <td>{{$post->getCategoryName($post->category_id)}}</td>
                <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.edit',[$post->id]) }}" title="View Student">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit
                        </button></a>
                    <a href="{{ route('posts.show',[$post->id]) }}" title="View Student">
                        <button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i> Show
                        </button></a>

                </td>

            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>

@endsection
