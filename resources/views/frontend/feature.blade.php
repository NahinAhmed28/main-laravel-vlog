@extends('frontend.layouts.app')
@section('content')
    <div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="about_img"><img src="{{asset('uploads/postFiles/'.$posts[0]->file_path)}}" alt=""></div>
                <div class="like_icon"><img src="{{asset('frontend/images/like-icon.png')}}" alt=""></div>
                <p class="post_text">Post By : 09/06/2019</p>
                <h2 class="most_text">{{$posts[0]->title}}</h2>
                <p class="lorem_text">{{$posts[0]->description}}</p>
                <div class="social_icon_main">
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><img src="{{asset('frontend/images/fb-icon.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/twitter-icon.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/instagram-icon.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="newsletter_main">
                    <h1 class="recent_taital">Recent post</h1>
                    @foreach($posts->take(3) as $post)
                    <div class="recent_box">
                        <div class="recent_left">
                            <div class="image_6"><img src="{{asset('uploads/postFiles/'.$post->file_path)}}"></div>
                        </div>
                        <div class="recent_right">
                            <h3 class="consectetur_text">{{$post->title}}</h3>
                            <p class="dolor_text">{{$post->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
