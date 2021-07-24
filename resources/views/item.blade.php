@extends('master')

@section('main_content')


<div role="main" class="main mb-5">
    <div class="container">

        <div class="row">
            <div class="col">
                <ul class="breadcrumb mt-3">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><a href="{{ url('shop') }}">Shop</a></li>
                    <li><a href="{{ url('shop/' . $item->curl) }}">{{ $item->ctitle }}</a></li>
                    <li class="active">{{ $item->ptitle }}</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <aside class="sidebar col-md-4 col-lg-3 order-2">
                <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">

                    <div class="card">
                        <div class="card-header accordion-header" role="tab" id="categories">
                            <h5 class="mb-0">
                                <a href="#" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false"
                                    aria-controls="toggleCategories">CATEGORIES</a>
                            </h5>
                        </div>
                        <div id="toggleCategories" class="accordion-body collapse show" role="tabpanel"
                            aria-labelledby="categories">
                            <div class="card-body">
                                <ul class="list list-unstyled mb-0">
                                    @foreach($categories as $category)
                                    <li><a href="{{url('shop/' . $category['curl'] )}}">{{ $category['ctitle'] }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header accordion-header" role="tab" id="price">
                            <h5 class="mb-0">
                                <a href="#" data-toggle="collapse" data-target="#togglePrice" aria-expanded="false"
                                    aria-controls="togglePrice">FEATURED PRODUCTS</a>
                            </h5>
                        </div>
                        <div id="togglePrice" class="accordion-body collapse show" role="tabpanel"
                            aria-labelledby="price">

                            <div class="card-body">
                                @foreach($random_items as $rand_item)
                                <div class="product row align-items-center mb-4">
                                    <div class="col-5 pr-0">
                                        <div
                                            class="image-frame image-frame-border image-frame-style-1 image-frame-effect-1">
                                            <span class="image-frame-wrapper">
                                                <img src="{{ asset('images/' . $rand_item->pimage) }}" class="img-fluid"
                                                    alt="{{ $item->ptitle }}">
                                                <span
                                                    class="image-frame-action image-frame-action-style-2 image-frame-action-effect-1 image-frame-action-md">
                                                    <a
                                                        href="{{ url('shop/' . $rand_item->curl . '/' . $rand_item->purl) }}">
                                                        <span>
                                                            <i class="lnr lnr-magnifier fa-icon-2x"></i>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h3 class="font-secondary text-color-default text-2 mb-0"><a
                                                href="{{ url('shop/' . $rand_item->curl . '/' . $rand_item->purl) }}">
                                                {{ $rand_item->ptitle }}
                                            </a>
                                        </h3>
                                        <span class="price font-primary text-2">
                                            <strong class="text-color-dark">
                                                ${{ $rand_item->price }}
                                            </strong>
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div id="toggleSizes" class="accordion-body collapse show" role="tabpanel"
                            aria-labelledby="sizes">
                            <div class="card-body pt-4">
                                <div class="image-frame">
                                    <div class="image-frame-wrapper align-items-start">
                                        <img src="{{ asset('./lib/template/img/shop/product-bg-15.jpg')}}"
                                            class="img-fluid" alt="">
                                        <div
                                            class="image-frame-info image-frame-info-show flex-column align-items-center mt-5">
                                            <span
                                                class="text-color-dark font-primary font-weight-semibold text-2 line-height-1">Amazing</span>
                                            <h2 class="text-color-dark font-weight-bold text-3 mb-2">LADIES DRESSES</h2>
                                        </div>
                                        <a href="#"
                                            class="btn btn-primary btn-outline btn-rounded font-weight-bold btn-h-2 btn-v-3 d-block absolute-x-center align-self-end shop-now-bottom">SHOP
                                            NOW!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                <div class="row mb-5">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div>
                            <img src="{{ asset('images/' . $item->pimage)}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="line-height-1 font-weight-bold mb-2">{{$item->ptitle}}</h2>
                        <span class="price font-primary text-4"><strong
                                class="text-color-dark">${{ $item->price }}</strong></span>
                        <p class="mt-4">{!! $item->particle !!}</p>
                        <hr class="my-4">
                        <div class="shop-cart d-flex align-items-center">
                            @if( !Cart::get($item->id) )

                            <button data-pid="{{ $item->id }}" type="submit"
                                class="add-to-cart btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-h-2 btn-fs-2 ml-auto mr-3 add-item-to-cart">
                                <i class="fas fa-cart-plus fa-camera fa-lg mr-2"></i>
                                ADD TO CART
                            </button>
                            @else
                            <button disabled="disabled" type="submit"
                                class="add-to-cart btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-h-2 btn-fs-2 ml-auto mr-3 add-item-to-cart">Already
                                in Cart!</button>
                            @endif
                            <a href="{{ url('shop/cart') }}"
                                class="add-to-cart btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-h-2 btn-fs-2 mr-auto ml-3">
                                <img src="{{ asset('lib/template/img/icons/cart-bag-white.svg') }}"
                                    class="mr-2 img-fluid">
                                GO TO CART
                            </a>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-4 mb-4">Related Products</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($same_cat as $same_item)
                    @if($item->id != $same_item->id)
                    <div class="col-sm-4 mb-4">
                        <div class="product portfolio-item portfolio-item-style-2">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <span class="image-frame-wrapper">
                                    <a href="{{ url('shop/' . $same_item->curl . '/' . $same_item->purl) }}">
                                        <img src="{{ asset('images/' . $same_item->pimage)}}" class="img-fluid"
                                            alt="{{ $same_item->ptitle }}">
                                    </a>
                                    <span
                                        class="image-frame-action image-frame-action-style-2 image-frame-action-effect-1 image-frame-action-md text-center">
                                        <a href="{{ url('shop/' . $same_item->curl . '/' . $same_item->purl) }}">
                                            <i class="lnr lnr-magnifier fa-2x"></i>
                                            <span class="d-flex">
                                                VIEW PRODUCT
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="product-info d-flex flex-column flex-lg-row justify-content-between">
                                <div class="product-info-title">
                                    <h3 class="text-color-default text-2 line-height-1 mb-1"><a
                                            href="{{ url('shop/' . $same_item->curl . '/' . $same_item->purl) }}">{{ $same_item->ptitle }}</a>
                                    </h3>
                                    <span class="price font-primary text-4"><strong
                                            class="text-color-dark">${{ $same_item->price }}</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
