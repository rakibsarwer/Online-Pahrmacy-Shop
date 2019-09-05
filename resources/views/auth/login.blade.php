@extends('customer.layouts.app')

@section('head')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('frontEnd')}}/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontEnd')}}/images/favicon/1.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/color1.css" media="screen" id="color">

@endsection


@section('header')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>customer's login</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
@endsection

@section('content')
<!--section start-->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Login</h3>
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input type="text" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="review">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                         
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                          
                        </div>

                        <button type="submit" name="submit" class="btn btn-solid">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </form>
                </div>
            </div>
            <div class="col-lg-6 right-login">
                <h3>New Customer</h3>
                <div class="theme-card authentication-right">
                    <h6 class="title-font">Create A Account</h6>
                    <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p><a href="#" class="btn btn-solid">Create an Account</a></div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection



@section('script')

<!-- latest jquery-->
<script src="{{asset('frontEnd')}}/js/jquery-3.3.1.min.js"></script>

<!-- menu js-->
<script src="{{asset('frontEnd')}}/js/menu.js"></script>

<!-- lazyload js-->
<script src="{{asset('frontEnd')}}/js/lazysizes.min.js"></script>

<!-- popper js-->
<script src="{{asset('frontEnd')}}/js/popper.min.js"></script>

<!-- slick js-->
<script src="{{asset('frontEnd')}}/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('frontEnd')}}/js/bootstrap.js"></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('frontEnd')}}/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="{{asset('frontEnd')}}/js/script.js"></script>

<script>
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

@endsection


