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
    <title>Payment</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>


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
                        <li class="breadcrumb-item active">Payment</li>
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
<div class="container">
  {{session()->get('order')}}
    <h1>Laravel 5 - Stripe Payment Gateway Integration Example <br/> ItSolutionStuff.com</h1>
  
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
  
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
  
                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="payment-form">
                        @csrf
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'

 
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                            <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name</label> <input
                                    class='form-control' size='14' type='text'>
                            </div>
                        </div>
                          
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                            </div>
                        </div>
                          
                    </form>
                </div>
            </div>        
        </div>
    </div>
      
</div>
<!--section end-->
@endsection







@section('script')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
           
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
  
            $form.get(0).submit();
        }
    }
  
});
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