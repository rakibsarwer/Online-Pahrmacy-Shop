<!DOCTYPE html>
<html lang="en">
    
<head>
@yield('head')
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    @include('admin.partials.nav')
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar(Left + right) Start-->
        @include('admin.partials.sidebar')
        <!-- sidebar Ends-->

        <div class="page-body" style="background:#cfd4da !important">

            <!-- Container-fluid starts-->
            @yield('content')
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            @include('admin.partials.footer')
        </footer>
        <!-- footer end-->
    </div>

</div>
@yield('script')

</body>

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2019 01:46:52 GMT -->
</html>
