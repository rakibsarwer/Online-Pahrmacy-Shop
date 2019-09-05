<header style="background-color: #ffc107;">
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Welcome to Our store</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us:  123 - 456 - 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="header-dropdown">
                    <li class="mobile-shopping-cart">
                            <a href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Cart</a>
                        </li>
                        <li class="mobile-wishlist">
                            <a href="/wishlist"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a>
                        </li>

                      
                        @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> Log In/ Register</a>
                            <div class="dropdown-menu" style="font-size:14px !important">
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/setting">Setting</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> My Account({{ Auth::user()->name }})</a>
                            <div class="dropdown-menu" style="font-size:14px !important">
                            <a class="dropdown-item" href="/dashboard">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                        @endguest

                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        
                        <div class="brand-logo">
                            <a href="index.html"> <img src="{{asset('frontEnd')}}/images/icon/logo.png" class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav">
                                    <i class="fa fa-bars sidebar-bar"></i>
                                </div>
                                <!-- Horizontal menu -->
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li>
                                        <a href="/index">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('categories.index')}}">Shop</a>
                                    </li>
                                   
                                    <li>
                                        <a href="#">Contact Us</a>
                                        <ul>
                                            <li>
                                                <a href="#">Contact Us</a>
                                               
                                            </li>
                                            <li>
                                                <a href="#">About Us</a>
                                                <ul>
                                                    <li><a href="">Services</a></li>
                                                    <li><a href="">Portfolio</a></li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    @auth
                                    <li>
                                        <a href="#">Profile</a>
                                        <ul>
                                            <li>
                                                <a href="#">Account</a>
                                            </li>
                                            <li>
                                                <a href="#">Orders</a>
                                            </li>
                                           
                                            
                                        </ul>
                                    </li>
                                    
                                    @endauth
                                   
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li  class="onhover-div mobile-cart">
                                        <div><img src="{{asset('frontEnd')}}/images/icon/cart.png" class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-shopping-cart"></i></div>
                                        <ul class="show-div shopping-cart">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img class="mr-3" src="{{asset('frontEnd')}}/images/fashion/product/1.jpg" alt="Generic placeholder image"></a>
                                                    <div class="media-body">
                                                        <a href="#"><h4>item name</h4></a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle">
                                                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img class="mr-3" src="{{asset('frontEnd')}}/images/fashion/product/2.jpg" alt="Generic placeholder image"></a>
                                                    <div class="media-body">
                                                        <a href="#"><h4>item name</h4></a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle">
                                                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span>$299.00</span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="button">
                                                    <a href="/cart" class="btn btn-solid view-cart">View Cart</a>
                                                    <a href="/checkout" class="btn btn-solid checkout">Buy</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>