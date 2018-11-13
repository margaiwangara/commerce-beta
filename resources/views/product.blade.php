@extends('layout.app')

@section('title', $product->name)

@section('content')
{{-- Page Banner Section Start --}}
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        {{-- Page Banner --}}
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Product Details</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Product Details</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Banner --}}
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-15.jpg') }}" alt="Banner"></a></div>
        </div>

        {{-- Banner --}}
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="{{ asset('images/banner/banner-14.jpg') }}" alt="Banner"></a></div>
        </div>

    </div>
</div>{{-- Page Banner Section End --}}

{{-- Single Product Section Start --}}
<div class="product-section section mt-90 mb-90">
    <div class="container">
        
        <div class="row mb-90">
                    
            <div class="col-lg-6 col-12 mb-50">

                {{-- Image --}}
                <div class="single-product-image thumb-right">

                    <div class="tab-content">
                        <div id="single-image-1" class="tab-pane fade show active big-image-slider">
                            <div class="big-image"><img src="{{ asset('images/single-product/big-1.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-1.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ asset('images/single-product/big-2.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-2.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ asset('images/single-product/big-3.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-3.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-2" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="{{ asset('images/single-product/big-7.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-7.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ asset('images/single-product/big-8.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-9.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ asset('images/single-product/big-9.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-9.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-3" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="{{ asset('images/single-product/big-13.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-13.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ asset('images/single-product/big-14.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-14.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{ asset('images/single-product/big-15.png') }}" alt="Big Image"><a href="{{ asset('images/single-product/big-15.png') }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                    </div>
                    
                    <div class="thumb-image-slider nav" data-vertical="true">
                        <a class="thumb-image active" data-toggle="tab" href="#single-image-1"><img src="{{ asset('images/single-product/thumb-1.png') }}" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-2"><img src="{{ asset('images/single-product/thumb-2.png') }}" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-3"><img src="{{ asset('images/single-product/thumb-3.png') }}" alt="Thumbnail Image"></a>
                    </div>

                </div>

            </div>
                    
            <div class="col-lg-6 col-12 mb-50">

                {{-- Content --}}
                <div class="single-product-content">

                    {{-- Category & Title --}}
                    <div class="head-content">

                        <div class="category-title">
                            <a href="#" class="cat">{{ $product->category }}</a>
                            <h5 class="title" style="font-size: 15px;">{{ $product->name }}</h5>
                        </div>

                        <h5 class="price">{{ $product->presentPrice() }}</h5>

                    </div>

                    <div class="single-product-description">

                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                        <div class="desc">
                            <p>{{ $product->description }}</p>
                        </div>
                        
                        <span class="availability">Availability: <span>In Stock</span></span>
                        
                        <div class="quantity-colors">
                    
                            <div class="colors">
                                <h5>Color</h5>
                                <select class="nice-select">
                                    <option>red</option>
                                    <option>black</option>
                                    <option>yellow</option>
                                    <option>grey</option>
                                </select>
                            </div>    

                            <div class="colors">
                                <h5>Size</h5>
                                <select class="nice-select">
                                    <option>small</option>
                                    <option>medium</option>
                                    <option>large</option>
                                    <option>xlarge</option>
                                </select>
                            </div>    
                            
                        </div> 
                        <div class="quantity-colors">
                        
                            <div class="quantity">
                                <h5>Quantity</h5>
                                <div class="pro-qty"><input type="text" value="1"></div>
                            </div>
                        </div>

                        <div class="actions">

                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            <div class="wishlist-compare">
                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                            </div>

                        </div>
                        
                        <div class="tags">
                            
                            <h5>Tags:</h5>
                            <a href="#">Electronic</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Phone</a>
                            <a href="#">Charger</a>
                            <a href="#">Powerbank</a>
                            
                        </div>
                        
                        <div class="share">
                            
                            <h5>Share: </h5>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            
                        </div>

                    </div>

                </div>

            </div>
            
        </div>
        
        <div class="row">
            
            <div class="col-lg-10 col-12 ml-auto mr-auto">
                
                <ul class="single-product-tab-list nav">
                    <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                    <li><a href="#product-specifications" data-toggle="tab" >additional details</a></li>
                    <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
                </ul>
                
                <div class="single-product-tab-content tab-content">
                    <div class="tab-pane fade show active" id="product-description">
                        
                        <div class="row">
                            <div class="single-product-description-content col-lg-8 col-12">
                                {{--  <h4>Introducing Flex 3310</h4>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in</p>
                                <h4>Stylish Design</h4>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                <h4>Digital Camera, FM Radio & many more...</h4>
                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>  --}}
                                <h4>{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="single-product-description-image col-lg-4 col-12">
                                <img src="{{ asset('images/single-product/description.png') }}" alt="description">
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="product-specifications">
                        <div class="single-product-specification">
                            <ul>
                                <li>{{ $product->add_details }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-reviews">
                       
                        <div class="product-ratting-wrap">
							<div class="pro-avg-ratting">
								<h4>4.5 <span>(Overall)</span></h4>
								<span>Based on {{ $product->reviews->count() }} Comment(s)</span>
							</div>
							<div class="ratting-list">
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>(5)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<span>(4)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(3)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(2)</span>
								</div>
								<div class="sin-list float-left">
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<span>(1)</span>
                                </div>
                                <div class="sin-list float-left">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(0)</span>
                                </div>
							</div>
							<div class="rattings-wrapper">
                                @if(count($product->reviews) > 0)
                                    @foreach($product->reviews as $review)
                                        <div class="sin-rattings">
                                            <div class="ratting-author">
                                                <h3>{{ $review->username }}</h3>
                                                <div class="ratting-star">    
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>({{ $review->rating }})</span>
                                                </div>
                                            </div>
                                            <p>{{ $review->message }}</p>
                                        </div>
                                    @endforeach
                                @endif

									
							</div>
							<div class="ratting-form-wrapper fix">
								<h3>Add your Comments</h3>
								<form action="#">
								    <div class="ratting-form row">
										<div class="col-12 mb-15">
											<h5>Rating:</h5>
											<div class="ratting-star fix">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="col-md-6 col-12 mb-15">
                                            <label for="name">Name:</label>
                                            <input id="name" placeholder="Name" type="text">
										</div>
										<div class="col-md-6 col-12 mb-15">
                                            <label for="email">Email:</label>
                                            <input id="email" placeholder="Email" type="text">
										</div>
										<div class="col-12 mb-15">
											<label for="your-review">Your Review:</label>
											<textarea name="review" id="your-review" placeholder="Write a review"></textarea>
										</div>
										<div class="col-12">
											<input value="add review" type="submit">
										</div>
								    </div>
								</form>
							</div>
						</div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>{{-- Single Product Section End --}}

{{-- Related Product Section Start --}}
<div class="product-section section mb-70">
    <div class="container">
        <div class="row">
            
            {{-- Section Title Start --}}
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="RELATED PRODUCT"><h1>RELATED PRODUCT</h1></div>
            </div>{{-- Section Title End --}}
            
            {{-- Product Tab Content Start --}}
            <div class="col-12">
                        
                {{-- Product Slider Wrap Start --}}
                <div class="product-slider-wrap product-slider-arrow-one">
                    {{-- Product Slider Start --}}
                    <div class="product-slider product-slider-4">
                        @forelse($related as $relate)
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
                                        <form action="#" method="POST">
                                            <a href= "#" class="add-to-cart">
                                                <i class="ti-shopping-cart"></i><span>ADD TO CART</span>
                                            </a>
                                        </form>
                                    </div>

                                    {{-- Content --}}
                                    <div class="content">

                                        {{-- Category & Title --}}
                                        <div class="category-title">

                                            <a href="#" class="cat">{{ $relate->category }}</a>
                                            <h5 class="title"><a href="single-product.html">{{ $relate->name }}</a></h5>

                                        </div>

                                        {{-- Price & Ratting --}}
                                        <div class="price-ratting">

                                            <h5 class="price">{{ $relate->presentPrice() }}</h5>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>

                                        </div>

                                    </div>

                                </div>{{-- Product End --}}
                            </div>
                        @empty
                            <div>There are no related products to display</div>
                        @endforelse

                    </div>{{-- Product Slider End --}}
                </div>{{-- Product Slider Wrap End --}}
                        
            </div>{{-- Product Tab Content End --}}
            
        </div>
    </div>
</div>{{-- Related Product Section End --}}
@endsection