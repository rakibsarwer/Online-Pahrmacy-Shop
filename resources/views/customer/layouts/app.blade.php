<!DOCTYPE html>
<html lang="en">

<head>
   @yield('head')

</head>

<body>


<!-- header start -->
@include('customer.partials.nav')
<!-- header end -->


<!-- breadcrumb start -->
@yield('header')
<!-- breadcrumb end -->


<!-- section start -->
@yield('content')
<!-- section End -->


<!-- footer start -->
@include('customer.partials.footer')
<!-- footer end -->


<!-- Quick-view modal popup start-->
@yield('modal')
<!-- Quick-view modal popup end-->





<!-- tap to top start -->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- tap to top end -->

@yield('script')
</body>
</html>