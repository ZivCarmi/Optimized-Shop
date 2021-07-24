@extends('master')

@section('main_content')


<div role="main" class="main mb-5">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="{{ url('shop') }}">Shop</a></li>
                        <li class="active">{{ $products[0]->ctitle }}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ $products[0]->ctitle }} Category</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-3 mb-4">
                <div class="custom-select-1">
                    <select onchange="location=this.value;" class="form-control border">
                        <option @if(!isset($_GET)) ? selected="selected" : '' @endif
                            value="{{ url('shop/') . '/' . $products[0]->curl }}" selected="selected">
                            Sort by newness</option>
                        <option @if(isset($_GET['orderPrice']) && $_GET['orderPrice']=='asc' ) ? selected="selected"
                            : '' @endif value="{{ url('shop/' . $products[0]->curl) . '?orderPrice=asc' }}">
                            Sort by price: low to high
                        </option>
                        <option @if(isset($_GET['orderPrice']) && $_GET['orderPrice']=='desc' ) ? selected="selected"
                            : '' @endif value="{{ url('shop/' . $products[0]->curl) . '?orderPrice=desc' }}">
                            Sort by price: high to low
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-md-8 col-lg-12 order-1 mb-5 mb-md-0">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="product portfolio-item portfolio-item-style-2">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <span
                                    class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="{{ url('shop/' . $product->curl . '/' . $product->purl) }}">
                                        <img src="{{ asset('images/' . $product->pimage) }}" class="img-fluid">
                                    </a>
                                    <span class="image-frame-action">
                                        @if( !Cart::get($product->id) )
                                        <button data-pid="{{ $product->id }}"
                                            class="mr-2 btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2 add-item-to-cart">
                                            <i class="fas fa-cart-plus fa-camera fa-lg mr-2"></i>
                                            ADD TO CART</button>
                                        @else
                                        <button disabled="disabled"
                                            class="mr-2 btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2 add-item-to-cart">ALREADY
                                            IN CART!</button>
                                        @endif
                                        <a href="{{ url('shop/' . $product->curl . '/' . $product->purl) }}"
                                            class="ml-2 btn btn-dark btn-rounded font-weight-semibold btn-v-3 btn-fs-2">VIEW
                                            PRODUCT</a>
                                    </span>
                                </span>
                            </div>
                            <div class="product-info d-flex flex-column flex-lg-row justify-content-between">
                                <div class="product-info-title">
                                    <h3 class="text-color-default text-2 line-height-1 mb-1"><a
                                            href="{{ url('shop/' . $product->curl . '/' . $product->purl) }}">{{ $product->ptitle }}</a>
                                    </h3>
                                    <span class="price font-primary text-4"><strong
                                            class="text-color-dark">${{ $product->price }}</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr class="mt-5 mb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mb-3 mb-sm-0">
                        <span>Showing 1-{{ $products_counter }} of {{ $products_counter }} results</span>
                    </div>
                    <div class="col-auto">
                        <nav aria-label="Page navigation example">
                            <!-- Pagination -->
                            <!-- <ul class="pagination mb-0">
                                <li class="page-item">
                                    <a class="page-link prev" href="#" aria-label="Previous">
                                        <span><i class="fas fa-angle-left" aria-label="Previous"></i></span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link next" href="#" aria-label="Next">
                                        <span><i class="fas fa-angle-right" aria-label="Next"></i></span>
                                    </a>
                                </li>
                            </ul> -->
                            <!-- End Pagination -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
