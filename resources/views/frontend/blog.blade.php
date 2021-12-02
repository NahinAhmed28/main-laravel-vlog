@extends('frontend.layouts.app')
@section('content')

    <!-- blog section start -->
    @foreach($posts as $post)
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="{{asset('uploads/postFiles/'.$post->file_path)}}"></div>
                    <div class="like_icon"><img src="{{asset('frontend/images/like-icon.png')}}"></div>
                    <p class="post_text">Posted : {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                    <h2 class="most_text">{{$post->title}}<br>River</h2>
                    <p class="lorem_text">{{$post->description}}</p>
                    <p class="lorem_text"><strong>Category:</strong> {{$post->category->title}}</p>
                    <p class="lorem_text"><strong>Admin rating:</strong> {{$post->rating}}</p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="https://www.facebook.com/"><img src="{{asset('frontend/images/fb-icon.png')}}"></a></li>
                                <li><a href="https://www.twitter.com/"><img src="{{asset('frontend/images/twitter-icon.png')}}"></a></li>
                                <li><a href="https://www.instagram.com/"><img src="{{asset('frontend/images/instagram-icon.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="about_main">
                        <h1 class="follow_text">CONNECT & FOLLOW</h1>
                        <div class="follow_icon">
                            <ul>
                                <li><a href="https://www.facebook.com/"><img src="{{asset('frontend/images/fb-icon-1.png')}}"></a></li>
                                <li><a href="https://www.twitter.com/"><img src="{{asset('frontend/images/twitter-icon-1.png')}}"></a></li>
                                <li><a href="https://www.linkedin.com/"><img src="{{asset('frontend/images/linkedin-icon-1.png')}}"></a></li>
                                <li><a href="https://www.instagram.com/"><img src="{{asset('frontend/images/instagram-icon-1.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- blog section end -->
@endsection
