@extends('layout.app')

@section('title', 'Home')

@section('content')
{{-- Hero Section Start --}}
<div class="hero-section section mb-30">
    <div class="container">
        <div class="row">
            <div class="col">

                {{-- Hero Slider Start --}}
                <div class="hero-slider hero-slider-one">

                    {{-- Hero Item Start --}}
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            {{-- Hero Content --}}
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>uPhone X</span></h1>
                                <h1>IT’S <span class="big">29%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            {{-- Hero Image --}}
                            <div class="hero-image col">
                               <img src="{{ asset('images/hero/hero-1.png') }}" alt="Hero Image">
                            </div>
                        
                        </div>     
                    </div>{{-- Hero Item End --}}

                    {{-- Hero Item Start --}}
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            {{-- Hero Content --}}
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>GL G6</span></h1>
                                <h1>IT’S <span class="big">35%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            {{-- Hero Image --}}
                            <div class="hero-image col">
                               <img src="{{ asset('images/hero/hero-2.png') }}" alt="Hero Image">
                            </div>
                        
                        </div>     
                    </div>{{-- Hero Item End --}}

                    {{-- Hero Item Start --}}
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            {{-- Hero Content --}}
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>MSVII Case</span></h1>
                                <h1>IT’S <span class="big">15%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            {{-- Hero Image --}}
                            <div class="hero-image col">
                               <img src="{{ asset('images/hero/hero-3.png') }}" alt="Hero Image">
                            </div>
                        
                        </div>     
                    </div>{{-- Hero Item End --}}

                </div>{{-- Hero Slider End --}}

            </div>
        </div>
    </div>
</div>{{-- Hero Section End --}}

{{-- Banner Section Start --}}
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row row-10">

            {{-- Banner --}}
            <div class="col-md-8 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-1.jpg') }}" alt="Banner"></a></div>
            </div>

            {{-- Banner --}}
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-2.jpg') }}" alt="Banner"></a></div>
            </div>

        </div>
    </div>
</div>{{-- Banner Section End --}}

{{-- Feature Product Section Start --}}
<div class="product-section section mb-70">
    <div class="container">
        <div class="row">
            
            {{-- Section Title Start --}}
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="FEATURED ITEMS"><h1>FEATURED ITEMS</h1></div>
            </div>{{-- Section Title End --}}

            {{-- Product Tab Filter Start --}}
            <div class="col-12 mb-30">
                <div class="product-tab-filter">
                    
                    {{-- Tab Filter Toggle --}}
                    <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>
                    
                    {{-- Product Tab List --}}
                    <ul class="nav product-tab-list">
                        <li><a class="active" data-toggle="tab" href="#tab-one">all</a></li>
                        <li><a data-toggle="tab" href="#tab-two">MEN</a></li>
                        <li><a data-toggle="tab" href="#tab-one">WOMEN</a></li>
                        {{-- }}
                        <li><a data-toggle="tab" href="#tab-two">TV & AUDIO</a></li>
                        <li><a data-toggle="tab" href="#tab-one">PHONE & TABLET</a></li>
                        <li><a data-toggle="tab" href="#tab-two">CAMERA & PRINTER</a></li>
                        {{ --}}
                    </ul>
                    
                </div>
            </div>{{-- Product Tab Filter End --}}

            {{-- Product Tab Content Start --}}
            <div class="col-12">
                <div class="tab-content">
            
                    {{-- Tab Pane Start --}}
                    <div class="tab-pane fade show active" id="tab-one">
            
                        {{-- Product Slider Wrap Start --}}
                        <div class="product-slider-wrap product-slider-arrow-one">
                            {{-- Product Slider Start --}}
                            <div class="product-slider product-slider-4">
                                <div class="col pb-20 pt-10">
                                    {{-- Product Start --}}
                                    <div class="ee-product">
                                        {{-- Image --}}
                                        <div class="image">
                                        
                                            <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-1.png') }}" alt="Product Image"></a>
                                        
                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                                        
                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                        
                                        </div>

                                        {{-- Content --}}
                                        <div class="content">

                                            {{-- Category & Title --}}
                                            <div class="category-title">

                                                <a href="#" class="cat">Laptop</a>
                                                <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                            </div>

                                            {{-- Price & Ratting --}}
                                            <div class="price-ratting">

                                                <h5 class="price">$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>
                                    </div>{{-- Product End--}}
                                </div>

                                <div class="col pb-20 pt-10">
                                    {{-- Product Start --}}
                                    <div class="ee-product">
                                        {{-- Image --}}
                                        <div class="image">
                                        
                                            <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-1.png') }}" alt="Product Image"></a>
                                        
                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                                        
                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                        
                                        </div>

                                        {{-- Content --}}
                                        <div class="content">

                                            {{-- Category & Title --}}
                                            <div class="category-title">

                                                <a href="#" class="cat">Laptop</a>
                                                <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                            </div>

                                            {{-- Price & Ratting --}}
                                            <div class="price-ratting">

                                                <h5 class="price">$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>
                                    </div>{{-- Product End--}}
                                </div>
                            </div>{{-- Product Slider End --}}
                        </div>{{-- Product Slider Wrap End --}}
                    </div>{{-- Tab Pane End --}}

                    {{-- Tab Pane Start --}}
                    <div class="tab-pane fade" id="tab-two">
                    
                        {{-- Product Slider Wrap Start --}}
                        <div class="product-slider-wrap product-slider-arrow-one">
                            {{-- Product Slider Start --}}
                            <div class="product-slider product-slider-4">
                                <div class="col pb-20 pt-10">
                                    {{-- Product Start --}}
                                    <div class="ee-product">
                                        {{-- Image --}}
                                        <div class="image">
                    
                                            <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-1.png') }}" alt="Product Image"></a>
                    
                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                    
                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                    
                                        </div>
                    
                                        {{-- Content --}}
                                        <div class="content">
                    
                                            {{-- Category & Title --}}
                                            <div class="category-title">
                    
                                                <a href="#" class="cat">Laptop</a>
                                                <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>
                    
                                            </div>
                    
                                            {{-- Price & Ratting --}}
                                            <div class="price-ratting">
                    
                                                <h5 class="price">$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                    
                                            </div>
                    
                                        </div>
                                    </div>{{-- Product End--}}
                                </div>
                    
                                <div class="col pb-20 pt-10">
                                    {{-- Product Start --}}
                                    <div class="ee-product">
                                        {{-- Image --}}
                                        <div class="image">
                    
                                            <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-1.png') }}" alt="Product Image"></a>
                    
                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                    
                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                    
                                        </div>
                    
                                        {{-- Content --}}
                                        <div class="content">
                    
                                            {{-- Category & Title --}}
                                            <div class="category-title">
                    
                                                <a href="#" class="cat">Laptop</a>
                                                <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>
                    
                                            </div>
                    
                                            {{-- Price & Ratting --}}
                                            <div class="price-ratting">
                    
                                                <h5 class="price">$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                    
                                            </div>
                    
                                        </div>
                                    </div>{{-- Product End--}}
                                </div>
                            </div>{{-- Product Slider End --}}
                        </div>{{-- Product Slider Wrap End --}}
                    </div>{{-- Tab Pane End --}}
                </div>
            </div>{{-- Product Tab Content End --}}
        </div>
    </div>
</div>{{-- Feature Product Section End --}}

{{-- Best Sell Product Section Start --}}
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">
            {{-- Section Title Start --}}
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="BEST SELLER"><h1>BEST SELLERS</h1></div>
            </div>{{-- Section Title End --}}

            <div class="col-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        {{-- Product Start --}}
                        <div class="ee-product">
                            {{-- Image --}}
                            <div class="image">
                            
                                <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-5.png') }}" alt="Product Image"></a>
                            
                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>
                            
                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                            
                            </div>

                            {{-- Content --}}
                            <div class="content">
                            
                                {{-- Category & Title --}}
                                <div class="category-title">
                            
                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>
                            
                                </div>
                            
                                {{-- Price & Ratting --}}
                                <div class="price-ratting">
                            
                                    <h5 class="price">$110.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                            
                                </div>
                            
                            </div>
                        </div>{{-- Product End --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>{{-- Best Sell Product Section End --}}

{{-- Banner Section Start --}}
<div class="banner-section section mb-90">
    <div class="container">
        <div class="row">

            {{-- Banner --}}
            <div class="col-12">
                <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-3.jpg') }}" alt="Banner"></a></div>
            </div>

        </div>
    </div>
</div>
{{-- Banner Section End --}}

{{-- Feature Section Start --}}
<div class="feature-section section mb-60">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                {{-- Feature Start --}}
                <div class="feature feature-shipping">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('images/icons/feature-van.png') }}" alt="Feature"></div>
                        <h4>FREE SHIPPING</h4>
                        <p>Start from $100</p>
                    </div>
                </div>
                {{-- Feature End --}}
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                {{-- Feature Start --}}
                <div class="feature feature-guarantee">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('images/icons/feature-walet.png') }}" alt="Feature"></div>
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>Back within 15 days</p>
                    </div>
                </div>
                {{-- Feature End --}}
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                {{-- Feature Start --}}
                <div class="feature feature-security">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{ asset('images/icons/feature-shield.png') }}" alt="Feature"></div>
                        <h4>SECURE PAYMENTS</h4>
                        <p>Payment Security</p>
                    </div>
                </div>
                {{-- Feature End --}}
            </div>

        </div>
    </div>
</div>
{{-- Feature Section End --}}

{{-- Best Deals Product Section Start --}}
<div class="product-section section mb-40">
    <div class="container">
        <div class="row">

            {{-- Section Title Start --}}
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="BEST DEALS">
                    <h1>BEST DEALS</h1>
                </div>
            </div>
            {{-- Section Title End --}}

            {{-- Product Tab Filter Start--}}
            <div class="col-12">
                <div class="offer-product-wrap row">
                    {{-- Product Tab Filter Start --}}
                    <div class="col mb-30">
                        <div class="product-tab-filter">
                            {{-- Tab Filter Toggle --}}
                            <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>
                    
                            {{-- Product Tab List --}}
                            <ul class="nav product-tab-list">
                                <li><a class="active" data-toggle="tab" href="#tab-three">all</a></li>
                                <li><a data-toggle="tab" href="#tab-four">MEN</a></li>
                                <li><a data-toggle="tab" href="#tab-three">WOMEN</a></li>
                                {{-- }}
                                <li><a data-toggle="tab" href="#tab-four">TV & AUDIO</a></li>
                                <li><a data-toggle="tab" href="#tab-three">PHONE & TABLET</a></li>
                                <li><a data-toggle="tab" href="#tab-four">CAMERA & PRINTER</a></li>
                                {{ --}}
                            </ul>
                    
                        </div>
                    </div>{{-- Product Tab Filter End --}}

                    {{-- Offer Time Wrap Start --}}
                    <div class="col mb-30">
                        <div class="offer-time-wrap" style="background-image: url({{ asset('images/bg/offer-products.jpg') }})">
                            <h1><span>UP TO</span> 55%</h1>
                            <h3>QUALITY & EXCLUSIVE <span>PRODUCTS</span></h3>
                            <h4><span>LIMITED TIME OFFER</span> GET YOUR PRODUCT</h4>
                            <div class="countdown" data-countdown="2019/06/20"></div>
                        </div>
                    </div>{{-- Offer Time Wrap End --}}

                    {{-- Product Tab Content Start --}}
                    <div class="col-12 mb-30">
                        <div class="tab-content">

                            {{-- Tab Pane Start --}}
                            <div class="tab-pane fade show active" id="tab-three">

                                {{-- Product Slider Wrap Start --}}
                                <div class="product-slider-wrap product-slider-arrow-two">
                                    {{-- Product Slider Start --}}
                                    <div class="product-slider product-slider-3">

                                        <div class="col pb-20 pt-10">
                                            {{-- Product Start --}}
                                            <div class="ee-product">

                                                {{-- Image --}}
                                                <div class="image">

                                                    <span class="label sale">sale</span>

                                                    <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-13.png') }}" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                {{-- Content --}}
                                                <div class="content">

                                                    {{-- Category & Title --}}
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Games</a>
                                                        <h5 class="title"><a href="single-product.html">Game Stations PW 25</a></h5>

                                                    </div>

                                                    {{-- Price & Ratting --}}
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$285</span>$135.35</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>{{-- Product End --}}
                                        </div>

                                    </div>{{-- Product Slider End --}}
                                </div>{{-- Product Slider Wrap End --}}
                            </div>{{-- Tab Pane End --}}

                            {{-- Tab Pane Start --}}
                            <div class="tab-pane fade" id="tab-four">

                                {{-- Product Slider Wrap Start --}}
                                <div class="product-slider-wrap product-slider-arrow-two">
                                    {{-- Product Slider Start --}}
                                    <div class="product-slider product-slider-3">

                                        <div class="col pb-20 pt-10">
                                            {{-- Product Start --}}
                                            <div class="ee-product">

                                                {{-- Image --}}
                                                <div class="image">

                                                    <span class="label sale">sale</span>

                                                    <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-18.png') }}" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                {{-- Content --}}
                                                <div class="content">

                                                    {{-- Category & Title --}}
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Games</a>
                                                        <h5 class="title"><a href="single-product.html">Game Stations PW 25</a></h5>

                                                    </div>

                                                    {{-- Price & Ratting --}}
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$285</span>$135.35</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>{{-- Product End --}}
                                        </div>

                                    </div>{{-- Product Slider End --}}
                                </div>{{-- Product Slider Wrap End --}}
                            </div>{{-- Tab Pane End --}}
                        </div>
                    </div>{{-- Product Tab Content End --}}

                </div>
            </div>{{-- Product Tab Filter End --}}
        </div>
    </div>
</div>{{-- Best Deals Product Section End --}}

{{-- New Arrival Product Section Start --}}
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">
            
            {{-- Section Title Start --}}
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="NEW ARRIVAL"><h1>NEW ARRIVAL</h1></div>
            </div>{{-- Section Title End --}}
            
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        {{-- Product Start --}}
                        <div class="ee-product">

                            {{-- Image --}}
                            <div class="image">

                                <span class="label new">New</span>

                                <a href="single-product.html" class="img"><img src="{{ asset('images/product/product-16.png') }}" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            {{-- Content --}}
                            <div class="content">

                                {{-- Category & Title --}}
                                <div class="category-title">

                                    <a href="#" class="cat">Tv & Audio</a>
                                    <h5 class="title"><a href="single-product.html">Nexo Andriod TV Box</a></h5>

                                </div>

                                {{-- Price & Ratting --}}
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$360 </span>$250.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div>{{-- Product End --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>{{-- New Arrival Section End --}}

{{-- Banner Section Start --}}
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row">
            
            {{-- Banner --}}
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-4.jpg') }}" alt="Banner"></a></div>
            </div>
            
            {{-- Banner --}}
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-5.jpg') }}" alt="Banner"></a></div>
            </div>
            
            {{-- Banner --}}
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-6.jpg') }}" alt="Banner"></a></div>
            </div>
            
        </div>
    </div>
</div>{{-- Banner Section End --}}


@endsection