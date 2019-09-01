@extends('admin.layouts.app')

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Edi Products
                                    <small> Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Digital</li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <form action="{{route('products.update',['product'=>$product])}}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                   @section('button')
                        <button type="submit" name="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-primary">Discard</button>
                    @endsection
                    @include('admin.products.form')
                    @csrf
            </form>
        
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

    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminFrontEnd')}}/css/dropzone.css">

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

    <!--dropzone js-->
    <script src="{{asset('adminFrontEnd')}}/js/dropzone/dropzone.js"></script>
    <script src="{{asset('adminFrontEnd')}}/js/dropzone/dropzone-script.js"></script>

    <!--ckeditor js-->
    <script src="{{asset('adminFrontEnd')}}/js/editor/ckeditor/ckeditor.js"></script>
    <script src="{{asset('adminFrontEnd')}}/js/editor/ckeditor/styles.js"></script>
    <script src="{{asset('adminFrontEnd')}}/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="{{asset('adminFrontEnd')}}/js/editor/ckeditor/ckeditor.custom.js"></script>

    <!-- lazyload js-->
    <script src="{{asset('adminFrontEnd')}}/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="{{asset('adminFrontEnd')}}/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="{{asset('adminFrontEnd')}}/js/admin-script.js"></script>

@endsection