@extends('admin.layouts.app')
@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product Detail
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Product Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="row product-page-main card-body">
                        <div class="col-xl-4">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                <div class="item">
                                @if($product->image)
                                <img src="{{asset('images/'.$product->image)}}" alt="" class="blur-up lazyloaded"></div>
                                @endif
                               
                            </div>
                            
                        </div>
                        <div class="col-xl-8">
                            <div class="product-page-details product-right mb-0">
                                <h2>{{$product->name}}</h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                </div> 
                                <hr>
                                <h5><u><b>Product Details :</b></u>
                                <p> {{$product->details}}</p>
                                </h5>
                                    <h5><b>Price : </b> {{$product->price}} Taka</h5>
                         
                                
                                <hr>
                                <h5><b>Comany Name :</b> {{$product->company->name}}</h5>
                                
                                <h5><b>Category : </b><span>{{$product->category->name}}</span></h5>

                                <h5><b>Quantity : </b><span>{{$product->quantity}}</span></h5>
                                <h5><b>Availibilty : </b><span>{{$product->stock}}</span></h5>
                                <!-- <div class="add-product-form">
                                    <h5 class="product-title">quantity</h5>
                                    <fieldset class="qty-box mt-2 ml-0">
                                        <div class="input-group">
                                            <input class="touchspin" type="text" value="1">
                                        </div>
                                    </fieldset>
                                </div> -->
                                <hr>
                                <h5><b>Posted Time:  </b><p>{{$product->created_at}}</p></h5>
                                
                                <div class="form-group">
                                    
                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-info">Update</a>
                                    <a class="btn btn-secondary">Discard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
@endsection


@section('head')

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('adminFrontEnd')}}/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('adminFrontEnd')}}/images/dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/flag-icon.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/themify-icons.css">

    <!-- owlcarousel css-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/owlcarousel.css">

    <!-- Rating css-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/rating.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/admin.css">
@endsection




@section('script')
<!-- latest jquery-->
<script src="{{asset('adminFrontEnd')}}/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('adminFrontEnd')}}/js/popper.min.js"></script>
<script src="{{asset('adminFrontEnd')}}/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="{{asset('adminFrontEnd')}}/js/icons/feather-icon/feather.min.js"></script>
<script src="{{asset('adminFrontEnd')}}/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="{{asset('adminFrontEnd')}}/js/sidebar-menu.js"></script>

<!-- Touchspin Js-->
<script src="{{asset('adminFrontEnd')}}/js/touchspin/vendors.min.js"></script>
<script src="{{asset('adminFrontEnd')}}/js/touchspin/touchspin.js"></script>
<script src="{{asset('adminFrontEnd')}}/js/touchspin/input-groups.min.js"></script>

<!-- Rating Js-->
<script src="{{asset('adminFrontEnd')}}/js/rating/jquery.barrating.js"></script>
<script src="{{asset('adminFrontEnd')}}/js/rating/rating-script.js"></script>

<!-- Owlcarousel js-->
<script src="{{asset('adminFrontEnd')}}/js/owlcarousel/owl.carousel.js"></script>
<script src="{{asset('adminFrontEnd')}}/js/dashboard/product-carousel.js"></script>

<!-- lazyload js-->
<script src="{{asset('adminFrontEnd')}}/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="{{asset('adminFrontEnd')}}/js/chat-menu.js"></script>

<!--script admin-->
<script src="{{asset('adminFrontEnd')}}/js/admin-script.js"></script>
@endsection