@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Admin- Post Detail  Page</div>
        <div class="card-body">

                <h5 class="card-title">Post Title : {{ $posts->title }}</h5>
                <p class="card-text">ID : {{ $posts->id }}</p>
                <img src="{{asset('uploads/postFiles/'.$posts->file_path)}}" width="150">
                <p class="card-text">Description : {{ $posts->description }}</p>
                <p class="card-text">Category : {{$posts->getCategoryName($posts->category_id)}}</p>
                <p class="card-text">Created At : {{ \Carbon\Carbon::parse($posts->created_at)->diffForHumans() }}</p>

                <p class="card-text"> {{ $posts->comment }} </p>
                 <form action="{{route('comment.update',[$posts->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

                     <div class="form-row">
                         <div class="col-md-5 mb-3">
                             <label for="comment">Comment</label>
                             <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter comment"  >
                         </div>
                     </div>
                     <input type="submit" value="comment" class="btn btn-success">
                 </form>
        </div>
    </div>
@endsection
