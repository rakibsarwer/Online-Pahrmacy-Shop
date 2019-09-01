@extends('admin.layouts.app')
@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category
                                    <small> Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Digital</li>
                                <li class="breadcrumb-item active">Category</li>
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
                                <h5>Digital Products</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Category</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Category Information</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <form class="needs-validation" method="post" action="{{'categories'}}" autocomplete="off">
                                                <div class="modal-body">
                                                   @csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                                <input name="name" class="form-control" id="validationCustom01" type="text">
                                                            </div>
                                                        </div>
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-success" type="submit">Save</button>
                                                    <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="product-physical">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>
                                            <form action="/admin/categories/{{$category->id}}">
                                               
                                                    @method('delete')
                                                    <button type="submit"class="btn btn-primary">Delete</button>
                                                    @csrf
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
    <script src="{{asset('adminFrontEnd')}}/js/jsgrid/griddata-digital.js"></script>
    <script src="{{asset('adminFrontEnd')}}/js/jsgrid/jsgrid-manage-product.js"></script>

    <!-- lazyload js-->
    <script src="{{asset('adminFrontEnd')}}/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="{{asset('adminFrontEnd')}}/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="{{asset('adminFrontEnd')}}/js/admin-script.js"></script>
@endsection