@extends('website.layout')
@section('title', 'Product Details || Parallax Soft Inc')
@section('products', 'active')
@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>Checkout</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>Checkout</li>
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
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="user-actions" style="background-color: #001F3F;">
                <i class='bx bx-log-in'></i>
                <span style="color: #FFFFFF;">Returning customer? <a href="{{url('login')}}" style="color: chocolate;">Click here to login</a></span>
            </div>
            {{ Form::open(array('url' => 'payment',  'method' => 'post')) }}
            {{ csrf_field() }}
                <div class="row">
                    @if(!Cookie::get('user_id'))
                    <div class="col-lg-7 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Name Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 passwordDiv" style="display: none;">
                                    <div class="form-group">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="password" class="form-control password" name="password">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="create-an-account">
                                        <label class="form-check-label" for="create-an-account">Create an account?</label>
                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('errorMessage'))

                                <div class="alert alert-danger alert-dismissible">
                                    <h4><i class="icon fa fa-warning"></i> Sorry!</h4>
                                    {{ $message }}
                                </div>
                            @endif
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-5 col-md-12">
                        <div class="order-details">
                            <h3 class="title">Your Order</h3>
                            <div class="order-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="total-price">
                                                <span>{{$project->name}}</span>
                                            </td>
                                            <td class="product-subtotal">
                                                <b><span class="subtotal-amount">
                                                   @if(@$project->discount && @$project->pos)
                                                        {{ceil($project->price + $project->domain + $project->hosting + $project->pos - (($project->price + $project->domain + $project->hosting + $project->pos)*($project->discount/100))).'/-'}}
                                                    @elseif(@$project->pos)
                                                        {{($project->price + $project->domain + $project->hosting+ $project->pos).'/-'}}
                                                    @else
                                                        {{($project->price + $project->domain + $project->hosting).'/-'}}
                                                    @endif
                                                </span></b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="payment-box">
                                @if(Cookie::get('user_email'))
                                    <input type="hidden" name="iscook" value="iscook">
                                @endif
                                <input type="hidden" name="id" value="{{$project->id}}">
                                <button type="submit" class="default-btn">Place Order <i class="ri-check-line"></i> <span></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(".main-header-area").removeClass();
            $('.main-navbar').css('background-color', '#F7F7F7');
            $('.navbar-expand-md').css('background-color', '#F7F7F7');

            $('input[type="checkbox"]').click(function(){
                if($(this).prop("checked") == true){
                    $(".passwordDiv").show();
                    $(".password").prop('required',true);
                }
                if($(this).prop("checked") == false){
                    $(".passwordDiv").hide();
                    $(".password").prop('required',false);
                }
            });
        });
    </script>
@endsection
