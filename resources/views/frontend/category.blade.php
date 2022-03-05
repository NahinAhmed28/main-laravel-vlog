@extends('frontend.layouts.app')
@section('content')



    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-sm-12">
                    @foreach($categories as $category)
                    <div class="about_img" style="margin-top:20px "><img src="{{asset('uploads/categoryFiles/'.$category->file_path)}}"></div>
                    <div class="like_icon"><img src="{{asset('frontend/images/like-icon.png')}}"></div>
                    <p class="post_text">Post By : 09/06/2019</p>
                    <h2 class="most_text">{{$category->title}}</h2>
                    <p class="lorem_text"> {{$category->description}}</p>
                    <p class="post_text">Category Id : {{$category->id}} </p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="{{asset('frontend/images/fb-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/twitter-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/instagram-icon.png')}}" alt=""></a></li>
                            </ul>
                        </div>

                    </div>
                    @endforeach
                </div>

                <div class="col-lg-4 col-sm-12 mt-3" >
                    <div class="image_5"><img src="{{asset('frontend/images/img-5.png')}}"></div>
                    <h1 class="about_taital">About Us</h1>
                    <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>

                </div>

            </div>

        </div>

    </div>







@endsection
