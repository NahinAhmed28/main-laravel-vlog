@extends('frontend.layouts.app')
@section('content')

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
                                <div class="contact_img"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="contact_img"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="contact_img"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="{{route('blog.contact.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mail_section">
                            <h1 class="contact_taital">Contact us</h1>
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

@endsection
