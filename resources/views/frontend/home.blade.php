@extends('frontend.layouts.app')
@section('content')
    <!-- banner section start -->
    <div class="container-fluid">
        <div class="banner_section layout_padding">
            <h1 class="banner_taital">welcome to<br>MY blog</h1>
            <div id="my_slider" class="carousel slide" data-ride="carousel" >

                <div class="carousel-inner" >
                    @foreach($categories as $category)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}"  >
                                <div class="image_main" >
                                    <div class="container" >
                                        <img src="{{asset('uploads/categoryFiles/'.$category->file_path)}}" class="image_1 h-50 p-3" >
                                        <div class="contact_bt"><a href="{{route('blog.contact')}}">Contact Us</a></div>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev"> <
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next"> >
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->

<!-- about section start -->
    <div class="about_section layout_padding" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="{{asset('frontend/images/about-img.png')}}"></div>
                    <div class="like_icon"><img src="{{asset('frontend/images/like-icon.png')}}"></div>
                    <p class="post_text">Post By : 09/06/2019</p>
                    <h2 class="most_text">Most Awesome Blue Lake With Snow <br>Mountain</h2>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <div class="social_icon_main">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="{{asset('frontend/images/fb-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/twitter-icon.png')}}"></a></li>
                                <li><a href="#"><img src="{{asset('frontend/images/instagram-icon.png')}}" alt=""></a></li>
                            </ul>
                        </div>
{{--                        <div class="read_bt"><a href="#">Read More</a></div>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="image_5"><img src="{{asset('frontend/images/img-5.png')}}"></div>
                    <h1 class="about_taital">About Us</h1>
                    <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
{{--                    <div class="read_bt_1"><a href="#">Read More</a></div>--}}
                </div>
            </div>
        </div>
    </div>

    <!-- about section end -->
    <!-- categories tag section start -->
    <div class="tag_section layout_padding">
        <div class="container">
            <h1 class="tag_taital text-success">Categories</h1>
            <div class="tag_bt">
                @foreach($categories as $category)
                    <ul>
                        <li class="mb-3 pt-3"><a href="#">{{$category->title}}</a></li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    <!-- categories tag section end -->
<!-- blog section start -->
    <h2 class="most_text text-center  text-info bg-info " >  <a class="nav-link" href="{{route('blog.blog')}}">Blog posts:</a></h2>
    @foreach($posts->take(2) as $post)
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
    <!-- recent section start -->
    <h2 class="most_text text-center m-3 text-info" style="background-color: lightseagreen">  <a class="nav-link" href="{{route('blog.blog')}}">Feature posts:</a></h2>
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
{{--                        <div class="read_bt"><a href="{{route('blog.feature')}}">Read More</a></div>--}}
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
    <!-- recent section end -->


    <div class="container">
        <div class="touch_setion">
            <div class="box_main">
                <div class="image_3 active">
                    <a href="https://www.linkedin.com"> <h4 class="who_text ">Get In Touch</h4> </a>
                </div>
            </div>
            <div class="box_main">
                <div class="image_4 active">
                    <a href="https://www.facebook.com"> <h4 class="who_text">Facebook</h4> </a>
                </div>
            </div>
        </div>
    </div>
<!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">1</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">2</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">3</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">4</li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="contact_img"></div>
                            </div>
                            <div class="carousel-item">
                                <img class="contact_img" src="{{asset('frontend/images/img-1.png')}}">
                            </div>
                            <div class="carousel-item">
                                <img class="contact_img" src="{{asset('frontend/images/img-2.png')}}">
                            </div>
                            <div class="carousel-item">
                                <img class="contact_img" src="{{asset('frontend/images/img-4.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="{{route('blog.contact.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mail_section">
                            <h1 class="contact_taital text-warning">Contact us</h1>
                            <input type="text" class="email_text" placeholder="Name" name="name">
                            <input type="text" class="email_text" placeholder="Email" name="email">
                            <input type="text" class="email_text" placeholder="Subject" name="subject">
                            <input class="massage_text" placeholder="Message" rows="5" id="Message" name="message">
                            <button class="btn btn-warning send_bt" type="submit">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- contact section end -->

@endsection
