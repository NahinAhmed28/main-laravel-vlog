@extends('admin.layouts.app')
@section('content')
    <div class="col-md-6" style="display: block;">
        <a class="btn btn-warning" href="{{route('categories.create')}}" role="button">  @include('admin.layouts.rightarrow')Add New Category</a>
    </div>


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
                <td>

                  <img src="{{asset('uploads/categoryFiles/'.$category->file_path)}}" width="150">

                </td>
                <td> {{$category->title}}</td>
                <td> {{$category->description}}</td>


            </tr>

        @endforeach


        {{-------}}

        </tbody>

    </table>
@endsection
