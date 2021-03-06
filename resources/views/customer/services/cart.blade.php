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
                    <h2>cart</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">cart</li>
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
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    <tbody>
                 
                    @foreach($carts as $cart)
                    <tr>
                        <td>
                            <a href="#"><img style="height: 50px;"src="{{asset('images/'.$cart->attributes->image)}}" alt=""></a>
                        </td>
                        <td><a href="#">{{$cart->name}}</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                <form method="POST"action="/cart/update" multipart="form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$cart->id}}">
                                    <div class="qty-box">
                                        <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number" value="{{$cart->quantity}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color">{{$cart->price}}</h2></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"> <button type="submit"class="btn btn-success"><i class="ti-check"></i></button>
                        </form>
                            <a style="color:#fff; "role="button" href="{{url('cart/remove',$cart->id)}}" class="btn btn-danger"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>{{$cart->price}} TAKA</h2></td>
                        <td>
                        <form method="POST"action="/cart/update" multipart="form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$cart->id}}">
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="{{$cart->quantity}}">
                                </div>
                            </div>
                        </td>
                        <td>
                        <button type="submit"class="btn btn-success"><i class="ti-check"></i></button>
                        </form>
                            <a style="color:#fff; margin-left:20px;"role="button" href="{{url('cart/remove',$cart->id)}}" class="btn btn-danger"><i class="ti-close"></i></a></td>
                        <td>
                           
                            <h2 class="td-color">{{
                                $cart->price * $cart->quantity
                            }} TAKA</h2></td>
                    </tr>
                    @endforeach
                    </tbody>
                   
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h2>{{$total }} TAKA</h2></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-4"><a href="/categories" class="btn btn-solid">continue shopping</a></div>
            <div class="col-8">
            
            <a href="/checkout" class="btn btn-solid">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->
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