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

<!-- thank-you section start -->
<section class="section-b-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>thank you</h2>
                    @if($orders->payment_method == 'cash')
                    <p>Order is successfully processsed and your order is on the way</p>
                    <p>Order ID:{{$orders->order_no}}</p>
                    @else
                    <p>Transaction is successfully processsed and your order is on the way</p>
                    <p>Transaction ID:{{$trans->tran_no}}</p>
                    @endif


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
@endsection


@section('content')
<!-- order-detail section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    <div class="row product-order-detail">
                        <div class="col-3">Image</div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>product name</h4>
                              </div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>quantity</h4>
                               </div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>price</h4>
                               </div>
                        </div>
                    </div>
                   @foreach($product_orders as $product_order)
                    <div class="row product-order-detail">
                        <div class="col-3"><img src="{{asset('images/'.$product_order->image)}}" alt="" class="img-fluid blur-up lazyload"></div>
                        <div class="col-3 order_detail">
                            <div>
                               
                                <h5>{{$product_order->name}}</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                               
                                <h5>{{$product_order->quantity}}</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                               
                                <h5>{{$product_order->quantity*$product_order->price}}</h5></div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    <div class="total-sec">
                        <ul>
                            
                            <li>shipping <span>{{$orders->charge}}</span></li>
                            <li>Tax <span>{{$orders->tax}}</span></li>
                            
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>{{$orders->charge+$orders->tax}}</span></h3></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>summery</h4>
                        <ul class="order-detail">
                            <li>order ID: {{$orders->order_no}}</li>
                            <li>Order Date: {{$orders->created_at}}</li>
                            <li>Order Total: {{$orders->amount}}</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>shipping address</h4>
                        <ul class="order-detail">
                            <li>{{$shipping_addresses->address}}</li>
                            <li>{{$shipping_addresses->town}}, {{$shipping_addresses->city}}.</li>
                            <li>{{$shipping_addresses->postcode}}, {{$shipping_addresses->country}}</li>
                            <li>Contact No. {{$shipping_addresses->phone}}</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode">
                        <h4>payment method</h4>
                        @if($orders->payment_method == 'cash')
                    <p>Cash on delivery (COD)</p>
                    
                    @else
                    <p>Card Type : {{$trans->card_name}}</p>
                    <p>Card Last 4 Digit : {{$trans->card_no}}</p>
                    <p>Transaction ID:{{$trans->tran_no}}</p>
                    @endif
                      
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                            <h3>expected date of delivery</h3>
                            <h2>In 7 Days</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
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
