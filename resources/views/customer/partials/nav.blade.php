<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Welcome to Our store Multikart</li>
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

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> My Account</a>
                            <div class="dropdown-menu" style="font-size:14px !important">
                            <a class="dropdown-item" href="/dashboard">Profile</a>
                            <a class="dropdown-item" href="/signin">Sign In</a>
                            <a class="dropdown-item" href="/signup">Sign Up</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/signout">Sign Out</a>
                            </div>
                        </li>

                       
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
                                        <a href="#">product</a>
                                        <ul>
                                            <li>
                                                <a href="#">sidebar</a>
                                                <ul>
                                                    <li><a href="product-page.html">left sidebar</a></li>
                                                    <li><a href="product-page(right-sidebar).html">right sidebar</a></li>
                                                    <li><a href="product-page(no-sidebar).html">no sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">thumbnail image</a>
                                                <ul>
                                                    <li><a href="product-page(left-image).html">left image</a></li>
                                                    <li><a href="product-page(right-image).html">right image</a></li>
                                                    <li><a href="product-page(image-outside).html">image outside <span class="new-tag">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">three column</a>
                                                <ul>
                                                    <li><a href="product-page(3-col-left).html">thumbnail left</a></li>
                                                    <li><a href="product-page(3-col-right).html">thumbnail right</a></li>
                                                    <li><a href="product-page(3-column).html">thubnail bottom</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product-page(4-image).html">four image <span class="new-tag">new</span></a></li>
                                            <li><a href="product-page(sticky).html">sticky</a></li>
                                            <li><a href="product-page(accordian).html">accordian</a></li>
                                            <li><a href="product-page(bundle).html">bundle<span class="new-tag">new</span></a></li>
                                            <li><a href="product-page(image-swatch).html">image swatch <span class="new-tag">new</span></a></li>
                                            <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega" id="hover-cls"><a href="#">features
                                        <div class="lable-nav">new</div>
                                    </a>
                                        <ul class="mega-menu full-mega-menu">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>portfolio</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="grid-2-col.html">portfolio grid 2</a></li>
                                                                        <li><a href="grid-3-col.html">portfolio grid 3</a></li>
                                                                        <li><a href="grid-4-col.html">portfolio grid 4</a></li>
                                                                        <li><a href="masonary-2-grid.html">mesonary grid 2</a></li>
                                                                        <li><a href="masonary-3-grid.html">mesonary grid 3</a></li>
                                                                        <li><a href="masonary-4-grid.html">mesonary grid 4</a></li>
                                                                        <li><a href="masonary-fullwidth.html">mesonary full width</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>add to cart</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="nursery.html">cart modal popup</a></li>
                                                                        <li><a href="vegetables.html">qty. counter <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="bags.html">cart top</a></li>
                                                                        <li><a href="shoes.html">cart bottom</a></li>
                                                                        <li><a href="watch.html">cart left</a></li>
                                                                        <li><a href="tools.html">cart right</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>theme elements</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="element-title.html">title</a></li>
                                                                        <li><a href="element-banner.html">collection banner</a></li>
                                                                        <li><a href="element-slider.html">home slider</a></li>
                                                                        <li><a href="element-category.html">category</a></li>
                                                                        <li><a href="element-service.html">service</a></li>
                                                                        <li><a href="element-image-ratio.html">image size ratio <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>product elements</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li class="up-text"><a href="element-productbox.html">product box<span>10+</span></a></li>
                                                                        <li><a href="element-product-slider.html">product slider</a></li>
                                                                        <li><a href="element-no_slider.html">no slider</a></li>
                                                                        <li><a href="element-mulitiple_slider.html">multi slider</a></li>
                                                                        <li><a href="element-tab.html">tab</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template   </h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="email-order-success.html">order success</a></li>
                                                                        <li><a href="email-order-success-two.html">order success 2</a></li>
                                                                        <li><a href="email-template.html">email template</a></li>
                                                                        <li><a href="email-template-two.html">email template 2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li>
                                                <a href="#">account</a>
                                                <ul>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="dashboard.html">Dashboard</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="forget_pwd.html">forget password</a></li>
                                                    <li><a href="profile.html">profile <span class="new-tag">new</span></a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-page.html">about us</a></li>
                                            <li><a href="search.html">search</a></li>
                                            <li><a href="typography.html">typography <span class="new-tag">new</span></a></li>
                                            <li><a href="review.html">review <span class="new-tag">new</span></a></li>
                                            <li><a href="order-success.html">order success</a></li>
                                            <li>
                                                <a href="#">compare</a>
                                                <ul>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="compare-2.html">compare-2 <span class="new-tag">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="collection.html">collection</a></li>
                                            <li><a href="lookbook.html">lookbook</a></li>
                                            <li><a href="sitemap.html">site map <span class="new-tag">new</span></a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="coming-soon.html">coming soon <span class="new-tag">new</span></a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">blog</a>
                                        <ul>
                                            <li><a href="blog-page.html">left sidebar</a></li>
                                            <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                            <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="{{asset('frontEnd')}}/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-search" onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div>
                                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-setting">
                                        <div><img src="{{asset('frontEnd')}}/images/icon/setting.png" class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-settings"></i></div>
                                        <div class="show-div setting">
                                            <h6>language</h6>
                                            <ul>
                                                <li><a href="#">english</a> </li>
                                                <li><a href="#">french</a> </li>
                                            </ul>
                                            <h6>currency</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">euro</a> </li>
                                                <li><a href="#">rupees</a> </li>
                                                <li><a href="#">pound</a> </li>
                                                <li><a href="#">doller</a> </li>
                                            </ul>
                                        </div>
                                    </li>
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