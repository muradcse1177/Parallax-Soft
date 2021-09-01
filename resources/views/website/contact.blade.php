@extends('website.layout')
@section('title', 'Contact || Parallax Soft Inc')
@section('contact', 'active')
@section('content')

    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/page-banner/shape-1.png')}}" alt="image">
        </div>
        <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/page-banner/shape-2.png')}}" alt="image">
        </div>
        <div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/page-banner/shape-3.png')}}" alt="image">
        </div>
        <div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/page-banner/shape-4.png')}}" alt="image">
        </div>
    </div>
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="contact-form">
                <h3>Get in Touch</h3>
                @if ($message = Session::get('successMessage'))
                    <div class="alert alert-success alert-dismissible">

                        <h4><i class="icon fa fa-check"></i> Thank You!!</h4>
                        {{ $message }}</b>
                    </div>
                @endif
                @if ($message = Session::get('errorMessage'))

                    <div class="alert alert-warning alert-dismissible">
                        <h4><i class="icon fa fa-warning"></i> Sorry!</h4>
                        {{ $message }}
                    </div>
                @endif
                    {{ Form::open(array('url' => 'send-mail',  'method' => 'post',  'id' => '')) }}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit"  class="default-btn">Send Message <i class="ri-arrow-right-line"></i><span></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="contact-info-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-address">
                        <h3>Contact Address:</h3>
                        <p style="text-align: justify;">{{substr($info->about,0,145).'...'}}</p>
                        <ul class="address-info">
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:{{$info->phone}}">{{$info->phone}}</a>
                            </li>
                            <li>
                                <i class="ri-global-line"></i>
                                <a href="mailto:{{$info->email}}"><span>{{$info->email}}</span></a>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                {{ $info->address}}
                            </li>
                        </ul>
                        <ul class="address-social">
                            <li>
                                <a href="https://web.facebook.com/ParallaxSoft" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://m.me/ParallaxSoft" target="_blank">
                                    <i class="ri-messenger-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div id="map">
                        <iframe
                            width="600"
                            height="450"
                            style="border:0"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAOc0-5SE59M8qVpKbDKPPt7bda9xiOEaE&q=Parallax Soft Inc">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(".main-header-area").removeClass();
            $('.main-navbar').css('background-color', '#F7F7F7');
            $('.navbar-expand-md').css('background-color', '#F7F7F7');
        });
    </script>
@endsection
