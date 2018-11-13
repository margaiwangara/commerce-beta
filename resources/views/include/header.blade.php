{{-- Header Section Start --}}
<div class="header-section section">

    {{-- Header Top Start --}}
    <div class="header-top header-top-one header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-10 mb-10">
                    {{-- Header Links Start --}}
                    <div class="header-links">
                        <a href="track-order.html"><img src="{{ asset('images/icons/car.png') }}" alt="Car Icon"> <span>Track your order</span></a>
                        <a href="store.html"><img src="{{ asset('images/icons/marker.png') }}" alt="Car Icon"> <span>Locate Store</span></a>
                    </div>{{-- Header Links End --}}
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    {{-- Header Advance Search Start --}}
                    <div class="header-advance-search">
                        
                        <form action="#">
                            <div class="input"><input type="text" placeholder="Search your product"></div>
                            <div class="select">
                                <select class="nice-select">
                                    <option>All Categories</option>
                                    <option>Mobile</option>
                                    <option>Computer</option>
                                    <option>Laptop</option>
                                    <option>Camera</option>
                                </select>
                            </div>
                            <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>
                        
                    </div>{{-- Header Advance Search End --}}
                </div>

                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    {{-- Header Account Links Start --}}
                    <div class="header-account-links">
                        <a href="register.html"><i class="icofont icofont-user-alt-7"></i> <span>My account</span></a>
                        <a href="login.html"><i class="icofont icofont-login d-none"></i> <span>Login</span></a>
                    </div>{{-- Header Account Links End --}}
                </div>

            </div>
        </div>
    </div>{{-- Header Top End --}}

    {{-- Header Bottom Start --}}
    <div class="header-bottom header-bottom-one header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-15 mb-15">
                    {{-- Logo Start --}}
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{ asset('images/logo.png') }}" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            <img class="theme-dark" src="{{ asset('images/logo-light.png') }}" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                        </a>
                    </div>{{-- Logo End --}}
                </div>

                <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                    {{-- Main Menu Start --}}
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{ route('home.index') }}">HOME</a></li>
                                <li class="menu-item-has-children"><a href="{{ route('shop.index') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="shop-grid.html">shop grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-grid.html">shop grid</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="single-product.html">Single Product</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html">Single Product 1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="mega-menu three-column">
                                        <li><a href="#">Column One</a>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="best-deals.html">Best Deals</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Two</a>
                                            <ul>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="feature.html">Feature</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="store.html">Store</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Three</a>
                                            <ul>
                                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog-1-column-left-sidebar.html">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-1-column-left-sidebar.html">Blog 1 Column Left Sidebar</a></li>
                                        <li><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>{{-- Main Menu End --}}
                </div>

                <div class="col order-2 order-lg-12 order-xl-12">
                    {{-- Header Shop Links Start --}}
                    <div class="header-shop-links">
                        
                        {{-- Compare --}}
                        <a href="compare.html" class="header-compare"><i class="ti-control-shuffle"></i></a>
                        {{-- Wishlist --}}
                        <a href="wishlist.html" class="header-wishlist"><i class="ti-heart"></i> <span class="number">3</span></a>
                        {{-- Cart --}}
                        <a href="cart.html" class="header-cart"><i class="ti-shopping-cart"></i> <span class="number">3</span></a>
                        
                    </div>{{-- Header Shop Links End --}}
                </div>
                
                {{-- Mobile Menu --}}
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div>{{-- Header Bottom End --}}

</div>{{-- Header Section End --}}