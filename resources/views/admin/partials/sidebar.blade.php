<div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img style="width: 280px;height: 60px;"class="blur-up lazyloaded" src="{{asset('adminFrontEnd')}}/images/dashboard/new.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('adminFrontEnd')}}/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">Profile Name</h6>
                    <p>General manager.</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="/admin/dashboard"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('products.index') }}"><i class="fa fa-circle"></i>Product List</a></li>
                            <li><a href="{{ route('products.create') }}"><i class="fa fa-circle"></i>Add Product</a></li>   
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Categories</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="/admin/companies"><i class="fa fa-circle"></i>Company List</a></li>
                            <li><a href="/admin/categories"><i class="fa fa-circle"></i>Product categories list</a></li>
                        </ul>
                    </li>
                    
                    <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{'orders'}}"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="{{'transactions'}}"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{'coupons'}}"><i class="fa fa-circle"></i>List Coupons</a></li>
                            <li><a href="{{'coupons/create'}}"><i class="fa fa-circle"></i>Create Coupons </a></li>
                        </ul>
                    </li>
                   
                    
                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{'users'}}"><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href="{{'users/create'}}"><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{'vendors'}}"><i class="fa fa-circle"></i>Vendor List</a></li>
                            <li><a href="{{'vendors/create'}}"><i class="fa fa-circle"></i>Create Vendor</a></li>
                        </ul>
                    </li>
                   
                    <li><a class="sidebar-header" href="{{'reports'}}"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="settings" ></i><span>Profile Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{'profile'}}"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{'invoices'}}"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li>
                    <li><a class="sidebar-header" href="{{'vendors'}}"><i data-feather="log-in"></i><span>Login</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

       