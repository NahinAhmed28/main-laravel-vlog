@extends('admin.layouts.app')
@section('content')

    <div class="card" style="width: 1200px">
        <div class="card-header">Admin- Post Detail  Page <div style="float: right" > <a href="{{route('posts.index')}}" class="btn-danger rounded-pill"
                                                                                         style="width: 50px;text-decoration: none;padding: 8px 16px;"> Go Back </a>
                                                            </div>
        </div>

        <div class="card-body">
                <h5 class="card-title">Post Title : {{ $posts->title }}</h5>
                <p class="card-text">ID : {{ $posts->id }}</p>
                <img src="{{asset('uploads/postFiles/'.$posts->file_path)}}" width="150">
                <p class="card-text">Description : {{ $posts->description }}</p>
                <p class="card-text">Category : {{$posts->category_id}}</p>
                <p class="card-text">Created At : {{ \Carbon\Carbon::parse($posts->created_at)->diffForHumans() }}</p>


                 <form action="{{route('admin.comment_update',[$posts->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

                     <div class="form-row">
                         <div class="col-md-5 mb-3">
                             <label for="rating">Give Rating</label><br>
                             <input name="rating" type="radio" value="Good"> Good
                             <input name="rating" type="radio" value="Average"> Average
                             <input name="rating" type="radio" value="Bad"> Bad
                         </div>
                     </div>
                     <input type="submit" value="Rate" class="btn btn-success">
                 </form>
            <p class="card-text"><strong>Given Rating:</strong>  {{ $posts->rating }} </p>
        </div>
    </div>
@endsection
