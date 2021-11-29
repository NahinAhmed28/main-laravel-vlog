@extends('user.layouts.app')
@section('content')
    <strong>User Edit Post </strong>
    <form action="{{route('user.postEdit',[$posts->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

{{--        <input type="hidden" name="id" id="id" value="{{$posts->id}}" />--}}

        <label>Name</label> <br>
        <input type="text" name="name" id="name" value="{{$posts->title}}" class="form-control"><br>

        <label>Description</label> <br>
        <input type="text" name="description" id="description" value="{{$posts->description}}" class="form-control"><br>


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

        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
    <br> <br>
@endsection
