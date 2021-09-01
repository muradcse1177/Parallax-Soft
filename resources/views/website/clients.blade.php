@extends('website.layout')
@section('title', 'Clients || Parallax Soft Inc.')
@section('clients', 'active')
@section('content')
    <div class="page-banner-area" style="border-bottom: 2px solid darkolivegreen;">
        <div class="container">
            <div class="page-banner-content">
                <h2>Our Clients</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>Our Clients</li>
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
    <div class="clients-area ptb-100" style="border-bottom: 2px solid darkolivegreen;">
        <div class="container">
            <div class="section-title">
                <h2>Our Respected Clients</h2>
                <p>Which peoples loves us a lot, please check out what about says about us</p>
            </div>
            <div class="clients-slides owl-carousel owl-theme" >
                @foreach($clients as $client)
                    <div class="clients-item">
                        <img src="{{url('public/images/'.$client->photo)}}" alt="image" width="85px" height="85px">
                        <p>{{$client->testimonial}}</p>
                        <div class="title-name">
                            <h3>{{$client->name}}</h3>
                            <span>{{$client->designation}}</span>
                        </div>
                        <div class="star-rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <div class="shape-1">
                            <img src="{{url('public/assets/images/clients/shape-4.png')}}" alt="image">
                        </div>
                        <div class="shape-2">
                            <img src="{{url('public/assets/images/clients/shape-5.png')}}" alt="image">
                        </div>
                        <div class="shape-3">
                            <img src="{{url('public/assets/images/clients/shape-6.png')}}" alt="image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clients-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/clients/shape-1.png')}}" alt="image">
        </div>
        <div class="clients-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/clients/shape-2.png')}}" alt="image">
        </div>
        <div class="clients-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/clients/shape-3.png')}}" alt="image">
        </div>
    </div>
    <div class="overview-area" style="margin-bottom: 60px; margin-top: 60px;">
        <div class="container">
            <div class="overview-box">
                <div class="overview-content">
                    <h3>Let's Make Something Amazing Together</h3>
                    <div class="overview-btn">
                        <a href="{{url('contact')}}" class="overview-btn-one">Get Started</a>
                        <img src="{{url('public/assets/images/overview/bar.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="overview-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/overview/shape-1.png')}}" alt="image">
        </div>
        <div class="overview-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/overview/shape-2.png')}}" alt="image">
        </div>
        <div class="overview-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/overview/shape-3.png')}}" alt="image">
        </div>
        <div class="overview-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/overview/shape-4.png')}}" alt="image">
        </div>
        <div class="overview-shape-5" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/overview/shape-5.png')}}" alt="image">
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
