@extends('layout.app')

@section('title', 'Shop')

@section('content')
{{-- Page Banner Section Start --}}
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        {{-- Page Banner --}}
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>SHOP Grid VIEW</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SHOP Grid VIEW</a></li>
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

{{-- Product Section Start --}}
<div class="product-section section mt-90 mb-90">
    <div class="container">
        <div class="row">
           
            <div class="col-12">
                
                <div class="row mb-50">
                    <div class="col">
                       
                        {{-- Shop Top Bar Start --}}
                        <div class="shop-top-bar">

                            {{-- Product View Mode --}}
                            <div class="product-view-mode">
                                <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                            </div>

                            {{-- Product Showing --}}
                            <div class="product-showing">
                                <p>Showing</p>
                                <select name="showing" class="nice-select">
                                    <option value="1">8</option>
                                    <option value="2">12</option>
                                    <option value="3">16</option>
                                    <option value="4">20</option>
                                    <option value="5">24</option>
                                </select>
                            </div>

                            {{-- Product Sort --}}
                            <div class="product-short">
                                <p>Sort by</p>
                                <select name="sortby" class="nice-select">
                                    <option value="trending">Trending items</option>
                                    <option value="sales">Best sellers</option>
                                    <option value="rating">Best rated</option>
                                    <option value="date">Newest items</option>
                                    <option value="price-asc">Price: low to high</option>
                                    <option value="price-desc">Price: high to low</option>
                                </select>
                            </div>

                            {{-- Product Pages --}}
                            <div class="product-pages">
                                <p>Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</p>
                            </div>

                        </div>{{-- Shop Top Bar End --}}
                        
                    </div>
                </div>
                
                {{-- Shop Product Wrap Start --}}
                {{-- Shop Product Wrap Start --}}
                <div class="shop-product-wrap grid row">
                    @forelse($products as $product)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                       
                            {{-- Product Start --}}
                            <div class="ee-product">

                                {{-- Image --}}
                                <div class="image">

                                    <a href="{{ route('shop.show', $product->id) }}" class="img"><img src="{{ asset('images/product/product-1.png') }}" alt="{{ $product->name }}"></a>

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

                                        <a href="#" class="cat">{{ $product->category }}</a>
                                        <h5 class="title" style="font-size: 15px;"><a href="{{ route('shop.show', $product->id) }}">{{ $product->name }}</a></h5>

                                    </div>

                                    {{-- Price & Ratting --}}
                                    <div class="price-ratting">

                                        <h5 class="price">{{ $product->presentPrice() }}</h5>
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
                            
                            {{-- Product List Start --}}
                            <div class="ee-product-list">

                                {{-- Image --}}
                                <div class="image">

                                    <a href="{{ route('shop.show', $product->id) }}" class="img"><img src="{{ asset('images/product/product-1.png') }}" alt="Product Image"></a>

                                </div>

                                {{-- Content --}}
                                <div class="content">

                                    {{-- Category & Title --}}
                                    <div class="head-content">

                                        <div class="category-title">
                                            <a href="#" class="cat">{{ $product->category }}</a>
                                            <h5 class="title" style="font-size: 15px;"><a href="{{ route('shop.show', $product->id) }}">{{ $product->name }}</a></h5>
                                        </div>
                                        
                                        <h5 class="price">{{ $product->presentPrice() }}</h5>

                                    </div>
                                    
                                    <div class="left-content">
                                    
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        
                                        <div class="desc">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                        
                                        <div class="actions">

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="right-content">
                                        <div class="specification">
                                            <h5>Additional Details</h5>
                                            <ul>
                                                <li>{{ $product->add_details }}</li>
                                            </ul>
                                        </div>
                                        <span class="availability">Availability: <span>In Stock</span></span>
                                    </div>

                                </div>

                            </div>{{-- Product List End --}}
                        
                        </div>
                    @empty
                        <div>There are no products to display</div>
                    @endforelse
                    
                </div>{{-- Shop Product Wrap End --}}
                
                {{-- Pagination --}}
                <div class="row mt-30">
                    <div class="col">
                        {{ $products->links() }}
                          {{--  <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i>Back</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li> - - - - - </li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">20</a></li>
                            <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                        </ul>    --}}
                        
                    </div>
                </div> 
                
            </div>
            
        </div>
    </div>
</div>{{-- Feature Product Section End --}}
@endsection