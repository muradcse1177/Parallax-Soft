@extends('website.layout')
@section('about', 'active')
@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>About Us</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>About Us</li>
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
    <div class="features-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Services We Offer</h2>
                <p>We provide most effective, professional, cheapest service.</p>
            </div>
            <div class="row justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-features-box" style="text-align: justify;">
                            <a href="{{url('service-details/'.$service->slug)}}"><center><img src="{{url('public/images/'.$service->image)}}" alt="image"></center>
                                <h3>{{$service->title}}</h3>
                                <p style="text-align: justify;">{!! nl2br(substr($service->description,0,130)).'...Read More' !!}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="features-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/features/shape-1.png')}}" alt="image">
        </div>
        <div class="features-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/features/shape-2.png')}}" alt="image">
        </div>
        <div class="features-shape-3">
            <img src="{{url('public/assets/images/features/shape-3.png')}}" alt="image">
        </div>
        <div class="features-shape-4">
            <img src="{{url('public/assets/images/features/shape-4.png')}}" alt="image">
        </div>
    </div>
    <div class="about-area" style="margin-bottom: 20px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image" data-speed="0.02" data-revert="true">
                        <img src="{{url('public/assets/images/about/about.png')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-content">
                            <div class="tag">
                                <img src="{{url($info->photo)}}" alt="image">
                            </div>
                            @php
                                $date1 = "2015-01-01";
                                $date2 = date('Y-m-d');
                                $diff = abs(strtotime($date2) - strtotime($date1));

                                $years = floor($diff / (365*60*60*24));
                            @endphp
                            <h3>Over {{$years}}  Year Professional Experiences</h3>
                            <p style="text-align: justify;">{!! nl2br($info->about)  !!}</p>
                        </div>
                        <div class="about-inner-content">
                            <img src="{{url('public/assets/images/about/img1.png')}}" alt="image">
                            <p>Best strategic planner company for development of software in Bangladesh.</p>
                        </div>
                        <div class="about-inner-content">
                            <img src="{{url('public/assets/images/about/img2.png')}}" alt="image">
                            <p>Best software provider company in Bangladesh. Many ready software are in our hub.</p>
                        </div>
                        <div class="about-inner-content">
                            <img src="{{url('public/assets/images/about/img3.png')}}" alt="image">
                            <p>Strong and professional team provide service.</p>
                        </div>
                        <div class="about-btn">
                            <a href="{{url('about')}}" class="default-btn">Read More <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/about/shape-1.png')}}" alt="image">
        </div>
        <div class="about-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/about/shape-2.png')}}" alt="image">
        </div>
        <div class="about-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/about/shape-3.png')}}" alt="image">
        </div>
        <div class="about-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/about/shape-4.png')}}" alt="image">
        </div>
        <div class="about-shape-5" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/about/shape-5.png')}}" alt="image">
        </div>
        <div class="about-shape-6" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/about/shape-4.png')}}" alt="image">
        </div>
        <div class="about-shape-7" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/about/shape-5.png')}}" alt="image">
        </div>
    </div>
    <div class="fun-facts-area" style="margin-bottom: 40px">
        <div class="container">
            <div class="fun-facts-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-user-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="390">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Total Cases</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-briefcase-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="365">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Case Solved</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-trophy-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="35">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Ready Software</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-flag-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="18">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Country Over</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fun-facts-shape-1" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/fun-facts/shape-1.png')}}" alt="image">
        </div>
        <div class="fun-facts-shape-2" data-speed="0.05" data-revert="true">
            <img src="{{url('public/assets/images/fun-facts/shape-2.png')}}" alt="image">
        </div>
        <div class="fun-facts-shape-3" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/fun-facts/shape-3.png')}}" alt="image">
        </div>
        <div class="fun-facts-shape-4" data-speed="0.05" data-revert="true">
            <img src="{{url('public/assets/images/fun-facts/shape-4.png')}}" alt="image">
        </div>
    </div>
    <div class="support-area">
        <div class="container">
            <div class="support-content">
                <div class="tag">
                    <img src="{{url($info->photo)}}" alt="image">
                </div>
                <h3>Lightning-Fast Tech Support, Guaranteed</h3>
                <p style="text-align: justify;">As a  software development company, we combine the best of both worlds. We have the focus and speed of the small IT outsourcing companies along with the scalability and expertise of the big ones.</p>
                <span><b>Syed Muradul Islam,</b> CEO at Parallax Soft Inc</span>
            </div>
        </div>
        <div class="support-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/support/shape-1.png')}}" alt="image">
        </div>
        <div class="support-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/support/shape-2.png')}}" alt="image">
        </div>
        <div class="support-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/support/shape-3.png')}}" alt="image">
        </div>
        <div class="support-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/support/shape-4.png')}}" alt="image">
        </div>
        <div class="support-shape-5" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/support/shape-5.png')}}" alt="image">
        </div>
        <div class="support-shape-6" data-speed="0.02" data-revert="true">
            <img src="{{url('public/assets/images/support/shape-6.png')}}" alt="image">
        </div>
    </div>
    <div class="clients-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Our Respected Clients</h2>
                <p>Which peoples loves us a lot, please check out what about says about us</p>
            </div>
            <div class="clients-slides owl-carousel owl-theme">
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
    <div class="overview-area">
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
