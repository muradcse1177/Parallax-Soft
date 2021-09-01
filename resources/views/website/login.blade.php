@extends('website.loginLayout')
@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('public/login-asset/images/bg-01.jpg');">
            <div class="wrap-login100">
                {{ Form::open(array('url' => 'verifyUser',  'method' => 'post')) }}
                {{ csrf_field() }}
					<span class="login100-form-logo">
						<i class="zmdi zmdi-shield-security"></i>
					</span>
                    <span class="login100-form-title p-b-34 p-t-27">
						Parallax || Log in
					</span>
                    @if ($message = Session::get('errorMessage'))
                        <center><p style="color: red">{{$message}} </p></center>
                    @endif
                        <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                            <input class="input100" type="email" name="email" placeholder="Enter Email">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Enter Password">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>

                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" name="login" value="login" class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-90">
                            <a class="txt1" href="#">
                                Forgot Password?
                            </a>
                        </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection

