<!doctype html>
<html lang="zxx">
@php
    use Illuminate\Support\Facades\DB;
        $rows = DB::table('company_info')->first();
        $services = DB::table('services')->get();
        $cats = DB::table('category')->get();
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! SEOMeta::generate() !!}
    <link rel="icon" type="image/png" href="{{url($rows->photo)}}">
    <link rel="stylesheet" href="{{url('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/responsive.css')}}">
    <style>
        /*body {*/
        /*    min-height: 100vh;*/
        /*    background: linear-gradient(to left, #dce35b, #45b649);*/
        /*}*/
    </style>
    @yield('css')
</head>
<body>

<div class="preloader-area">
    <div class="spinner">
        <div class="inner">
            <div class="disc"></div>
            <div class="disc"></div>
            <div class="disc"></div>
        </div>
    </div>
</div>


<header class="main-header-area">
    <div class="header-information">Office Information</div>
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <ul class="top-header-content">
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{$rows->phone}}">{{$rows->phone}}</a>
                        </li>
                        <li>
                            <i class="ri-earth-line"></i>
                            <a href="mailto:{{$rows->email}}"><span>{{$rows->email}}</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6">
                    <ul class="top-header-optional">
                        <li>
                            <a href="https://web.facebook.com/ParallaxSoft" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="https://m.me/ParallaxSoft" target="_blank">
                                <i class="ri-messenger-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area navbar-box-style">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img style="border: 2px solid red; background-color: #07FFE9; width: 60px; height: 40px;" src="{{url($rows->photo)}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar" >
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img style="border: 2px solid red; background-color: #07FFE9; width: 120px; height: 80px;" src="{{url($rows->photo)}}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link @yield('home')">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('about')}}" class="nav-link @yield('about')">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('services')}}" class="nav-link @yield('service')">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link @yield('products')">Products<i class="ri-arrow-down-s-line"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($cats as $cat)
                                        @php
                                            $sub_cats = DB::table('projects')
                                                    ->select('*','projects.id as p_id')
                                                    ->join('category','category.id','=','projects.cat_id')
                                                    ->join('sub_category','sub_category.id','=','projects.subcat_id')
                                                    ->where('projects.cat_id',$cat->id)
                                                    ->orderBy('projects.id','desc')
                                                    ->get();
                                              //$sub_cats = DB::table('sub_category')->where('cat_id',$cat->id)->get();
                                        @endphp
                                        @if(count($sub_cats)>0)
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">{{$cat->title}}<i class="ri-arrow-right-s-line"></i></a>
                                                <ul class="dropdown-menu">
                                                    @foreach($sub_cats as $sub_cat)
                                                    <li class="nav-item">
                                                        <a href="{{url('product-details/'.$sub_cat->slug)}}" class="nav-link">{{$sub_cat->sub_name}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">{{$cat->title}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('shop')}}" class="nav-link">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('clients')}}" class="nav-link @yield('clients')">Our Clients</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('contact')}}" class="nav-link  @yield('contact')">Contact</a>
                            </li>
                            @if(!Cookie::get('user'))
                            <li class="nav-item">
                                <a href="{{url('login')}}" class="nav-link  @yield('login')">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('signup')}}" class="nav-link  @yield('signup')">Sign Up</a>
                            </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{url('myOrders')}}" class="nav-link  @yield('myOrders')">My Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('logout')}}" class="nav-link  @yield('logout')">Log Out</a>
                                </li>
                            @endif
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search..." type="text">
                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="option-item">
                                <a href="{{url('contact')}}" class="default-btn">Let’s Talk <i class="ri-message-line"></i><span></span></a>
                            </div>
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search..." type="text">
                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="option-item">
                                <a href="{{url('contact')}}" class="default-btn">Let’s Talk <i class="ri-message-line"></i><span></span></a>
                            </div>
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <div class="title" style="text-align: center;">
                    <a href="{{url('/')}}">
                        <img src="{{url($rows->photo)}}" alt="logo" height="150" width="150" >
                    </a>
                </div>
                <div class="sidebar-content">
                    <h3>About Us</h3>
                    <p style="text-align: justify; ">{{substr($rows->about,0,300).'...'}}</p>
                    <div class="sidebar-btn">
                        <a href="{{url('contact')}}" class="default-btn">Let’s Talk <i class="ri-message-line"></i><span></span></a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:+{{$rows->phone}}">{{$rows->phone}}</a></li>
                        <li><i class="ri-mail-line"></i> <a href="mailto:{{$rows->email}}"><span class="__cf_email__">{{$rows->email}}</span></a></li>
                        <li><i class="ri-map-pin-line"></i>{{$rows->address}} </li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">

                    <li>
                        <a href="https://web.facebook.com/ParallaxSoft" target="_blank">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>
                    <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                    <li>
                        <a href="https://m.me/ParallaxSoft" target="_blank">
                            <i class="ri-messenger-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    @yield('content')
</section>
<footer class="footer-area pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <a href="{{url('/')}}">
                            <img style="border: 2px solid red; background-color: #07FFE9" src="{{url($rows->photo)}}" alt="image" height="80" width="120">
                        </a>
                    </div>
                    <ul class="widget-info">
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{$rows->phone}}">{{$rows->phone}}</a>
                        </li>
                        <li>
                            <i class="ri-global-line"></i>
                            <a href="mailto:{{$rows->email}}"><span class="__cf_email__">{{$rows->email}}</span></a>
                        </li>
                        <li>
                            <i class="ri-map-pin-line"></i>
                            {{$rows->address}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="single-footer-widget">
                    <h3>Quick Link</h3>
                    <ul class="footer-links-list">
                        <li><a href="{{url('about')}}">About Us</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                        <li><a href="{{url('t&c')}}">Terms of Service</a></li>
                        <li><a href="{{url('faq')}}">Faq’s</a></li>
                        <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Important Link</h3>
                    <ul class="footer-links-list">
                        <li><a href="{{url('products')}}">Products</a></li>
                        <li><a href="{{url('services')}}">Services</a></li>
                        <li><a href="{{url('shop')}}">Shop</a></li>
                        <li><a href="{{url('Clients')}}">Our Clients</a></li>
                        <li><a href="{{url('about')}}">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Newsletter</h3>
                    <div class="widget-newsletter">
                        <div class="newsletter-content">
                            <p>To get our newsletter please subscribe us. Thanks</p>
                        </div>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="input-newsletter" placeholder="Enter email" name="EMAIL" required autocomplete="off">
                            <button type="submit"><i class="ri-send-plane-2-line"></i></button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                    <ul class="widget-social">
                        <li>
                            <a href="https://www.facebook.com/ParallaxSoft" target="_blank">
                                <i class="ri-facebook-line"></i>
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
                                <i class="ri-messenger-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <!-- Messenger Chat Plugin Code -->
        <div id="fb-root"></div>

        <!-- Your Chat Plugin code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "142888749725832");
            chatbox.setAttribute("attribution", "biz_inbox");

            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v11.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright © {{Date('Y')}} {{$rows->name}}. All Rights Reserved by
                    <a href="https://parallax-soft.com/" target="_blank">{{$rows->name}}</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{url('public/assets/images/footer/shape-1.png')}}" alt="image">
    </div>
    <div class="footer-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{url('public/assets/images/footer/shape-2.png')}}" alt="image">
    </div>
    <div class="footer-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{url('public/assets/images/footer/shape-3.png')}}" alt="image">
    </div>
    <div class="footer-shape-4" data-speed="0.08" data-revert="true">
        <img src="{{url('public/assets/images/footer/shape-4.png')}}" alt="image">
    </div>
    <div class="footer-shape-5" data-speed="0.08" data-revert="true">
        <img src="{{url('public/assets/images/footer/shape-5.png')}}" alt="image">
    </div>
</footer>


<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="{{url('public/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{url('public/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('public/assets/js/jquery.appear.js')}}"></script>
<script src="{{url('public/assets/js/odometer.min.js')}}"></script>
<script src="{{url('public/assets/js/nice-select.min.js')}}"></script>
<script src="{{url('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('public/assets/js/fancybox.min.js')}}"></script>
<script src="{{url('public/assets/js/TweenMax.min.js')}}"></script>
<script src="{{url('public/assets/js/scrollbar.min.js')}}"></script>
<script src="{{url('public/assets/js/horizontal-scrollbar.min.js')}}"></script>
<script src="{{url('public/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{url('public/assets/js/form-validator.min.js')}}"></script>
<script src="{{url('public/assets/js/contact-form-script.js')}}"></script>
<script src="{{url('public/assets/js/wow.min.js')}}"></script>
<script src="{{url('public/assets/js/main.js')}}"></script>
<script src="{{ asset('public/js/share.js') }}"></script>
<section>
    @yield('js')
</section>
</body>

</html>
