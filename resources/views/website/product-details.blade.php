@extends('website.layout')
@section('title', 'Product Details || Parallax Soft Inc')
@section('products', 'active')
@section('css')

    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            padding: 30px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 7px;
            color: #222;
            background-color: #ccc;
        }
    </style>
@endsection
@section('content')
   <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>Product Details</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>Product Details</li>
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
    <div class="events-details-area ptb-100">
        <div class="container">
            <div class="events-details-image">
                <img src="{{url('public/images/'.$project->cover_phote)}}" alt="image">
            </div>
            <div class="events-btn-box" style="text-align: center; margin-bottom: 30px;">
                <a href="{{url('checkout/'.$project->slug)}}" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i> <span></span></a>
                <a href="{{$project->demo}}" class="default-btn" style="background-color: #B808BD;">See Demo <i class="ri-arrow-right-line"></i> <span></span></a>
                {{--                            <p>You must <a href="login.html">login</a> before register event.</p>--}}
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="events-details-desc" style="text-align: justify;">
                        {!! nl2br($project->description) !!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="events-details-info" style="background-color: #07C5B4;">
                        <ul class="info">
                            <li class="price">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Price</span>
                                    {{$project->price.'/-'}}
                                </div>
                            </li>
                            @if(@$project->domain)
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Domain</span>
                                   {{$project->domain.'/-'}}
                                </div>
                            </li>
                            @endif
                            @if(@$project->hosting)
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Hosting</span>
                                    {{$project->hosting.'/-'}}
                                </div>
                            </li>
                            @endif
                            @if(@$project->pos)
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Pos Machine</span>
                                    {{$project->pos.'/-'}}
                                </div>
                            </li>
                            @endif
                            @if(@$project->discount)
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Discount</span>
                                    {{$project->discount.'%'}}
                                </div>
                            </li>
                            @endif
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Grand Total</span>
                                    @if(@$project->discount && @$project->pos)
                                    {{ceil($project->price + $project->domain + $project->hosting + $project->pos - (($project->price + $project->domain + $project->hosting + $project->pos)*($project->discount/100))).'/-'}}
                                    @elseif(@$project->pos)
                                        {{($project->price + $project->domain + $project->hosting+ $project->pos).'/-'}}
                                    @else
                                    {{($project->price + $project->domain + $project->hosting).'/-'}}
                                    @endif
                                </div>
                            </li>
                        </ul>
                        <div class="events-btn-box">
                            <a href="{{url('checkout/'.$project->slug)}}" class="default-btn">Purchase Now <i class="ri-arrow-right-line"></i> <span></span></a>
                            <a href="{{$project->demo}}" class="default-btn" style="background-color: #B808BD;">See Demo <i class="ri-arrow-right-line"></i> <span></span></a>
                        </div>
                        <div class="events-share">

                            <div class="share-info">
                                <span>Share This Products</span>
                                <ul class="social-link">
                                    <li><a href="" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-area ptb-100" style="background-color: #F7F7F7; margin-bottom: 60px;">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Related Projects</h2>
                <p>We do aur best to make a project well and  to feel the client happy. </p>
            </div>
            <div class="projects-slides owl-carousel owl-theme">
                @foreach($projects as $project)
                    <div class="single-projects">
                        <div class="projects-image">
                            <a href="{{url('product-details/'.$project->slug)}}"><img src="{{url('public/images/'.$project->cover_phote)}}" alt="image"></a>
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
    <div class="overview-area" style="margin-bottom: 60px;">
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
