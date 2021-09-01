@extends('website.layout')
@section('home', 'active')
@section('content')

    <div class="main-banner-with-large-shape-area without-banner-animation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="main-banner-white-content">
                        <div class="tag wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                             {{$info->name}}. Best Startup Company.
                        </div>
                        <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms" style="text-align: justify;"> {{$info->name}}, Best IT Startup Consulting Company.</h1>
                        <p class="wow fadeInLeft just" data-wow-delay="100ms" data-wow-duration="1000ms" style="text-align: justify;">{{substr($info->about,0,300).'...'}}</p>
                        <div class="banner-btn">
                            <a href="{{url('about')}}" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">Read More <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="main-banner-image-wrap wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
                        <img src="{{url('public/assets/images/main-banner/banner-one/main-pic.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-shape-5">
            <img src="{{url('public/assets/images/main-banner/banner-two/shape-1.png')}}" alt="image">
        </div>
        <div class="main-banner-shape-6">
            <img src="{{url('public/assets/images/main-banner/banner-two/shape-2.png')}}" alt="image">
        </div>
        <div class="main-banner-shape-7">
            <img src="{{url('public/assets/images/main-banner/banner-two/shape-3.png')}}" alt="image">
        </div>
        <div class="main-banner-shape-8">
            <img src="{{url('public/assets/images/main-banner/banner-two/shape-4.png')}}" alt="image">
        </div>
        <div class="main-banner-large-shape">
            <img src="{{url('public/assets/images/main-banner/banner-two/large-shape.png')}}" alt="image">
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
    <div class="process-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box">
                        <i class="ri-hard-drive-line"></i>
                        <p>Research</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box bg-36CC72">
                        <i class="ri-pie-chart-line"></i>
                        <p>Analyze</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box bg-FF414B">
                        <i class="ri-quill-pen-line"></i>
                        <p>Design & Coding</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process-box bg-FF6D3D">
                        <i class="ri-focus-line"></i>
                        <p>Testing & Launch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area">
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
    <div class="technology-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="technology-content">
                        <div class="tag">
                            <img src="{{url($info->photo)}}" alt="image">
                        </div>
                        <h3>Lightning-Fast Tech Support, Guaranteed</h3>
                        <p style="text-align: justify;">As a  software development company, we combine the best of both worlds. We have the focus and speed of the small IT outsourcing companies along with the scalability and expertise of the big ones.</p>
                        <span><b>Syed Muradul Islam,</b> CEO at Parallax Soft Inc</span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="technology-image">
                        <img src="{{url('public/assets/images/technology/technology-1.jpg')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="technology-shape-1" data-speed="0.02" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-1.png')}}" alt="image">
        </div>
        <div class="technology-shape-2" data-speed="0.03" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-2.png')}}" alt="image">
        </div>
        <div class="technology-shape-3" data-speed="0.04" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-1.png')}}" alt="image">
        </div>
        <div class="technology-shape-4" data-speed="0.05" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-2.png')}}" alt="image">
        </div>
        <div class="technology-shape-5" data-speed="0.06" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-3.png')}}" alt="image">
        </div>
        <div class="technology-shape-6" data-speed="0.07" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-4.png')}}" alt="image">
        </div>
        <div class="technology-shape-7" data-speed="0.08" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-3.png')}}" alt="image">
        </div>
        <div class="technology-shape-8" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/technology/shape-4.png')}}" alt="image">
        </div>
    </div>
    <div class="fun-facts-area">
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
    <div class="projects-area ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Our Recent Projects</h2>
                <p>We do aur best to make a project well and  to feel the client happy. </p>
            </div>
            <div class="projects-slides owl-carousel owl-theme">
                @foreach($projects as $project)
                    <div class="single-projects">
                        <div class="projects-image">
                            <a href="{{url('product-details/'.$project->slug)}}"><img src="{{'public/images/'.$project->cover_phote}}" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="{{url('product-details/'.$project->slug)}}">{{$project->name}}</a>
                            </h3>
                            <p style="text-align: justify;">{{nl2br(substr($project->info,0,140)).'...'}}</p>
                            <a href="{{url('product-details/'.$project->slug)}}" class="projects-btn">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="projects-shape-1" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/projects/shape-1.png')}}" alt="image">
        </div>
        <div class="projects-shape-2" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/projects/shape-2.png')}}" alt="image">
        </div>
        <div class="projects-shape-3" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/projects/shape-3.png')}}" alt="image">
        </div>
        <div class="projects-shape-4" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/projects/shape-4.png')}}" alt="image">
        </div>
        <div class="projects-shape-5" data-speed="0.09" data-revert="true">
            <img src="{{url('public/assets/images/projects/shape-5.png')}}" alt="image">
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
                        <img src="{{url('public/images/'.$client->photo)}}" alt="image" style="height: 85px; width: 85px;">
                        <p>{{substr($client->testimonial.'...',0,90)}}</p>
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


    <div class="partner-area ptb-100">
        <div class="container">
            <div class="partner-slides owl-carousel owl-theme">
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/php.jpg')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/laravel.png')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/codigniter.jpg')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/android.jpg')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/jquery.png')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/mysqlp.png')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/node.png')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/vue.png')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/partner-3.png')}}" alt="image"></a>
                </div>
                <div class="single-partner">
                    <a href="#"><img src="{{url('public/assets/images/partner/partner-5.png')}}" alt="image"></a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>

    </script>
@endsection
