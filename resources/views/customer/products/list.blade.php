@extends('customer.layouts.app')

@section('header')
<!-- breadcrumb start -->
<div class="breadcrumb-section" style="padding: 0px 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>collection</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">collection</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
@endsection
<!-- section start -->
@section('content')
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 collection-filter">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Categories Name</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    @foreach($categories as $category)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input value="{{$category->id}}"type="checkbox" class="custom-control-input" id="zara">
                                        <label class="custom-control-label" for="zara">{{$category->name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- color filter start here -->
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Company Name</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                @foreach($companies as $company)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input value="{{$company->id}}"type="checkbox" class="custom-control-input" id="zara">
                                        <label class="custom-control-label" for="zara">{{$company->name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- price filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">price</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="hundred">
                                        <label class="custom-control-label" for="hundred">$10 - $100</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="twohundred">
                                        <label class="custom-control-label" for="twohundred">$100 - $200</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="threehundred">
                                        <label class="custom-control-label" for="threehundred">$200 - $300</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundred">
                                        <label class="custom-control-label" for="fourhundred">$300 - $400</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundredabove">
                                        <label class="custom-control-label" for="fourhundredabove">$400 above</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- silde-bar colleps block end here -->
                  
                   
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                          
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                            <li><img src="{{asset('frontEnd')}}/images/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                            <li><img src="{{asset('frontEnd')}}/images/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                            <li><img src="{{asset('frontEnd')}}/images/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                            <li><img src="{{asset('frontEnd')}}/images/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select>
                                                            <option value="High to low">24 Products Par Page</option>
                                                            <option value="Low to High">50 Products Par Page</option>
                                                            <option value="Low to High">100 Products Par Page</option>
                                                        </select>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                            
                                        @foreach($products as $product)
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                        @if($product->image)
                                                            <a href="{{route('categories.show',$product->id)}}"><img src="{{asset('images/'.$product->image)}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            @endif
                                                        </div>
                                                        <div class="back">
                                                        @if($product->image)
                                                            <a href="{{route('categories.show',$product->id)}}">
                                                            <img src="{{asset('images/'.$product->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                            </a>
                                                        @endif
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <a href="{{url('cart',$product->id)}}"role="button" data-toggle="modal" data-target="#addtocart"  title="Add to cart">
                                                                <i class="ti-shopping-cart" ></i>
                                                            </a> 
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a> 
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a> 
                                                               
                                                        </div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="{{route('categories.show',$product->id)}}"><h6>{{$product->name}}</h6></a>
                                                            <p>{{$product->details}}</p>
                                                            <h4>{{$product->price}}</h4>
                                                            <ul class="color-variant">
                                                                <a href="{{url('cart',$product->id)}}"class="btn btn-info"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         @endforeach
                                       
                                        </div>
                                    </div>
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->

@endsection


@section('modal')
<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="{{asset('frontEnd')}}/images/pro3/1.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>Women Pink Shirt</h2>
                            <h3>$32.96</h3>
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                                        
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->
@endsection





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

<!-- latest jquery-->
@section('script')
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

