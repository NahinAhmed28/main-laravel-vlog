@extends('user.layouts.app')
@section('content')
    <strong>Create New Post </strong>
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="Name">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"  required>
        </div>


    </div>


    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="Name">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Title"  required>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label for="device">Category</label>
        <select class="custom-select" id="inputGroupSelect03" name="category_id">
            <option selected>Choose...</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>


    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="file">Image</label>
            <input type="file" class="form-control" id="file" name="file_path" placeholder="Enter Image"  required>
        </div>
    </div>


    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<br> <br>
@endsection
