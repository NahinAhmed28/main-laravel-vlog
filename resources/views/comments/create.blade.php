@extends('layouts.app')
@section('content')
    <strong>Create New comment </strong>
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="col-md-6 mb-3">
        <label for="device">Select Post</label>
        <select class="custom-select" id="inputGroupSelect03" name="post_id">
            <option selected>select...</option>
            @foreach($posts as $post)
                <option value="{{$post->id}}">{{$post->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="Name">Comment Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"  required>
        </div>


    </div>


    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="Name">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Title"  required>
        </div>
    </div>


    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<br> <br>
@endsection
