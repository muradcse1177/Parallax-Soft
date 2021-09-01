@extends('website.layout')
@section('title', 'Service-Details || Parallax Soft Inc.')
@section('service', 'active')
@section('css')
<style>
    .nav-pills-custom .nav-link {
        color: #aaa;
        background: #fff;
        position: relative;
    }

    .nav-pills-custom .nav-link.active {
        background-color:darkviolet;
        color: #45b649;
    }

    /* Add indicator arrow for the active tab */
    @media (min-width: 992px) {
        .nav-pills-custom .nav-link::before {
            content: '';
            display: block;
            border-top: 8px solid transparent;
            border-left: 10px solid #fff;
            border-bottom: 8px solid transparent;
            position: absolute;
            top: 50%;
            right: -10px;
            transform: translateY(-50%);
            opacity: 0;
        }
    }

    .nav-pills-custom .nav-link.active::before {
        opacity: 1;
    }
</style>
@endsection
@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>Service Details</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>Service Details</li>
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
    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <section class="py-5 header">
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-md-3">
                                <!-- Tabs nav -->
                                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @php
                                        $slug = request()->segment(count(request()->segments()));
                                           $i =1;
                                    @endphp
                                    @foreach($services as $ser)
                                        @if($slug == $ser->slug)
                                            @php
                                                $active = 'active';
                                            @endphp
                                        @endif
                                        <a class="nav-link mb-3 p-3 shadow {{@$active}}" id="{{'tab'.$i}}" data-toggle="pill" href="{{'#tabh'.$i}}" role="tab" aria-controls="{{'tabh'.$i}}" aria-selected="true">
                                            <i class="fa fa-user-circle-o mr-2"></i>
                                            <span class="font-weight-bold small text-uppercase" style="color: black;"><b>{{$ser->title}}</b></span>
                                        </a>
                                        @php
                                            $i++;
                                            $active ='';
                                        @endphp
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-9">
                                <!-- Tabs content -->
                                <div class="tab-content" id="v-pills-tabContent">
                                    @php
                                            $slug = request()->segment(count(request()->segments()));
                                            $i =1;
                                    @endphp
                                    @foreach($services as $ser)
                                        @if($slug == $ser->slug)
                                            @php
                                              $active = 'active';
                                            @endphp
                                        @endif
                                        <div style="text-align: justify;" class="tab-pane fade shadow rounded bg-white show {{@$active}} p-5" id="{{'tabh'.$i}}" role="tabpanel" aria-labelledby="{{'tab'.$i}}">
                                            <h4 class="font-italic mb-4">{{$ser->title}}</h4>
                                            <p class="font-italic text-muted mb-2" style="color: #0a0a0a;">{!! nl2br($ser->description) !!}</p>
                                        </div>
                                        @php
                                            $i++;
                                            $active ='';
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".main-header-area").removeClass();
            $('.main-navbar').css('background-color', '#F7F7F7');
            $('.navbar-expand-md').css('background-color', '#F7F7F7');
        });
    </script>
@endsection
