@extends('layouts.app')
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

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category ID"  required>
        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="file">Image</label>
            <input type="file" class="form-control" id="file" name="file" placeholder="Enter Image"  required>
        </div>
    </div>


    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<br> <br>
@endsection
