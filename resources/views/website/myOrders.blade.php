@extends('website.layout')
@section('products', 'active')
@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>My Orders</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>My Orders</li>
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
    <div class="cart-area ptb-100">
        <div class="container">
            <form>
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Date</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="product-thumbnail" width="15%" align="center">
                                    <a href="#">
                                        <img src="{{url('public/images/'.$order->cover_phote)}}" alt="item" style="width: 180px; height: 100px;">
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">{{$order->date}}</a>
                                </td>
                                <td class="product-name">
                                    <a href="#">{{$order->order_id}}</a>
                                </td>
                                <td class="product-name">
                                    <a href="#">{{$order->name}}</a>
                                </td>
                                <td class="product-price">
                                    <span class="unit-amount">{{$order->o_price.'/-'}}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{$orders->links()}}
                    </table>
                </div>
            </form>
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
