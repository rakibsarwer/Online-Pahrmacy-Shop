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
    <title>Checkout</title>

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
                    <h2>Check-out</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
@endsection


@section('content')

<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="checkout-page"style="padding:0px 100px">
            <div class="checkout-form">
                <form action="checkout" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <div class="row check-out">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Name</div>
                                    <input type="text" name="name" value="" placeholder="Name" required="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="phone" value="" placeholder="Phone" required="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="email" name="email" value="" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country</div>
                                    <input type="text" name="country" value="" placeholder="Country" required="">
                                    <!-- <select name="country">
                                        <option value="india">India</option>
                                        <option>South Africa</option>
                                        <option>United State</option>
                                        <option>Australia</option>
                                    </select> -->
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="address" value="" placeholder="Street address" required="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">City</div>
                                    <input type="text" name="city" value="" placeholder="City" required="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Town</div>
                                    <input type="text" name="town" value="" placeholder="Town" required="">
                                </div>
                               
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Postal Code</div>
                                    <input type="text" name="postal-code" value="" placeholder="Postal Code" required="">
                                </div>
                                <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                    <label for="account-option">Create An Account?</label>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                     <ul class="qty">
                                    @foreach($carts as $cart)
                                   
                                        <li>{{$cart->name}} × {{$cart->quantity}} <span>{{$cart->price*$cart->quantity}} Taka</span></li>
                                    
                                
                                    @endforeach
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">{{$total}} Taka</span></li>
                                        <li>Shipping Type


                                       
 
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="radio" required="" value="200" name="shipping" class="cbox" id="free-shipping" increment="200"/>
                                                    <label for="free-shipping">Free Shipping</label><p>( 200 Taka )</p>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="radio" required="" value="0" name="shipping" class="cbox" id ="local-pickup" increment="0"/>
                                                    <label for="local-pickup">Local Pickup</label> <p>( Free )</p>
                                                </div>
                                                <br>
                                               
                                            </div>
                             
                                        </li>
                                        
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count"><span id="increment-me">{{$total}}</span>  Taka</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment" value="cash" id="cash" required="">
                                                        <label for="cash">Cash On Delivery</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option stripe">
                                                        <input type="radio" name="payment" value="stripe" id="stripe" required="">
                                                        <label for="stripe">Stripe<span class="image"><img src="{{asset('frontEnd')}}/images/paypal.png" alt=""></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-right"><button type="submit" type="submit" name="submit"class="btn-solid btn">Place Order</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

@endsection



@section('script')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
       
<script>
$('.cbox').change(function(e){
    var c = $(this).is(":checked");
    var i = parseInt($(this).attr('increment'));
    var current_value = {{$total}};
    if (c){
        $('span#increment-me').text(current_value+i);
    }else{
        $('span#increment-me').text(current_value-i);
    }
})
</script>
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