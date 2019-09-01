@extends('admin.layouts.app')

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product List
                                    <small> Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Digital</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Product Lists</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <a href="{{route('products.create')}}"><button type="button" class="btn btn-secondary">Add New Product</button></a>
                                   
                                </div>
                                <div class="table-responsive">
                                    <div class="product-physical">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>type</th>
                                            <th>Availibility</th>
                                            <th>Quantity</th>

                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                            <td>{{$product->id}}</td>
                                            <td>
                                                @if($product->image)
                                                    <img style="height:50px;width:50px;"class="img-thumbnail"src="{{asset('images/'.$product->image)}}" alt="">
                                                @endif
                                            </td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->company->name}}</td> 
                                            <td>{{$product->category->name}}</td>
                                            <td>{{$product->stock}}</td> 
                                            <td>{{$product->quantity}}</td>
                                           
                                            <td>
                                            <form action="{{ route('products.destroy',$product->id)}}" method="POST">
                                                <a href="{{route('products.show',$product->id)}}" class="btn btn-success"><i class="fa fa-external-link"></i></a>
                                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                                    @csrf
                                               
                                                    @method('DELETE')
                                                    <button name="submit" type="submit"class="btn btn-warning"><i class="fa fa-times"></i></button>
                                                    
                                                </form>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
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

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/jsgrid.css">

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

    <!-- Jsgrid js-->
    <script src="{{asset('adminFrontEnd')}}/js/jsgrid/jsgrid.min.js"></script>
    <script src="{{asset('adminFrontEnd')}}/js/jsgrid/griddata-productlist-digital.js"></script>
    <script src="{{asset('adminFrontEnd')}}/js/jsgrid/jsgrid-list.js"></script>

    <!-- lazyload js-->
    <script src="{{asset('adminFrontEnd')}}/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="{{asset('adminFrontEnd')}}/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="{{asset('adminFrontEnd')}}/js/admin-script.js"></script>

@endsection
