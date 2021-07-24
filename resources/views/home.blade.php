@extends('master')
@section('main_content')

<div role="main" class="main">

    <section class="section py-3">
        <div class="container">
            <div class="row w-100">
                <div class="col-4 col-lg-3 p-1 appear-animation animated fadeInLeftShorter appear-animation-visible"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200"
                    style="animation-delay: 200ms;">
                    <div class="image-frame">
                        <div class="image-frame-wrapper align-items-end">
                            <img src="{{ asset('images/home_image_1.jpg') }}" width="380%" class="left-103">
                            <div class="image-frame-info image-frame-info-show flex-column px-4 mx-2">
                                <h2 class="text-color-light text-center text-5 line-height-2 mb-4"><strong>GAMING
                                        MOUSES</strong> UP TO <strong>20% OFF</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-lg-6 p-1 z-index-1">
                    <div class="image-frame">
                        <div class="image-frame-wrapper">
                            <img src="{{ asset('images/iphone_home_image.jpg') }}"
                                class="img-fluid appear-animation animated scaleOut appear-animation-visible" alt=""
                                data-appear-animation="scaleOut" data-appear-animation-duration="8s"
                                style="animation-duration: 8s; animation-delay: 100ms;">
                            <div
                                class="image-frame-info image-frame-info-show flex-column align-items-start px-4 pt-md-4 mt-md-3 mx-2">
                                <h2 class="text-color-light font-weight-bold text-8 line-height-2 mb-2">IPHONES
                                    <br>COLLECTION</h2>
                                <span class="text-color-light font-primary text-3 mb-4">WITH A GREAT
                                    <strong>PRICE</strong></span>
                                <a href="{{ url('shop/apple-iphones') }}"
                                    class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3 appear-animation animated scaleOut appear-animation-visible"
                                    data-appear-animation="scaleOut" data-appear-animation-duration="8s"
                                    style="animation-duration: 8s; animation-delay: 100ms;">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-5 col-lg-12 p-1 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">
                            <div class="image-frame">
                                <div class="image-frame-wrapper align-items-start">
                                    <img src="{{ asset('images/home_image_3.jpg') }}" width="112%" class="left-6"
                                        alt="">
                                    <div
                                        class="image-frame-info image-frame-info-show flex-column align-items-center pt-4 left-21">
                                        <h2 class="text-color-light text-center text-4 mb-4">VARIETY OF<br>
                                            <strong>LAPTOPS</strong></h2>
                                    </div>
                                    <span
                                        class="text-color-light bg-primary font-primary font-weight-bold rounded-circle off-tag-bottom-left line-height-1 text-4 p-4">10%<br>OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-5 col-lg-12 p-1 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">
                            <div class="image-frame">
                                <div class="image-frame-wrapper">
                                    <img src="{{ asset('images/home_image_4.jpg') }}" class="" width="112%" alt="">
                                    <div class="image-frame-info image-frame-info-show flex-column align-items-center">
                                        <span
                                            class="text-color-light font-primary font-weight-bold text-3">GAMING</span>
                                        <h2 class="text-color-light font-weight-bold text-5 line-height-1 mb-2">HEADSETS
                                        </h2>
                                        <a href="{{url('shop/headsets')}}"
                                            class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3">SHOP
                                            NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-5 pb-3">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <div class="overflow-hidden">
                        <span class="d-block top-sub-title text-color-primary appear-animation animated"
                            data-appear-animation="maskUp">RECOMENDED</span>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold mb-0 appear-animation animated" data-appear-animation="maskUp"
                            data-appear-animation-delay="200">Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row appear-animation animated" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="400">

                @foreach($items as $item)

                <div class="col-md-3">
                    <div class="product mb-4">
                        <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                            <span
                                class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                <a href="{{ url('shop/' . $item->curl . '/' . $item->purl) }}">
                                    <img src="{{ asset('images/' . $item->pimage) }}" class="img-fluid" alt="">
                                </a>
                                <span class="image-frame-action">
                                    @if( !Cart::get($item->id) )
                                    <button data-pid="{{ $item->id }}"
                                        class="mr-2 btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-1 add-item-to-cart">
                                        <i class="fas fa-cart-plus fa-camera fa-lg mr-2"></i>
                                        ADD TO CART
                                    </button>
                                    @else
                                    <button disabled="disabled"
                                        class="mr-2 btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-1 add-item-to-cart">ALREADY
                                        IN CART!</button>
                                    @endif
                                    <a href="{{ url('shop/' . $item->curl . '/' . $item->purl) }}"
                                        class="ml-2 btn btn-dark btn-rounded font-weight-semibold btn-v-3 btn-fs-1">VIEW
                                        PRODUCT</a>
                                </span>
                            </span>
                        </div>
                        <div class="product-info d-flex flex-column flex-lg-row justify-content-between">
                            <div class="product-info-title">
                                <h3 class="text-color-default text-2 line-height-1 mb-1"><a
                                        href="{{ url('shop/' . $item->curl . '/' . $item->purl) }}">{{ $item->ptitle }}</a>
                                </h3>
                                <span class="price font-primary text-4"><strong class="text-color-dark">
                                        ${{ $item->price }}
                                    </strong></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section pt-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <div class="overflow-hidden">
                        <span class="d-block top-sub-title text-color-primary appear-animation animated"
                            data-appear-animation="maskUp">CATEGORIES</span>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold mb-0 appear-animation animated" data-appear-animation="maskUp"
                            data-appear-animation-delay="200">Browser Our Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if(!empty($categories))
                @foreach($categories as $category)
                <div class="col-8 col-md-5 col-lg-3 mb-4 mb-lg-0 appear-animation animated"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <a href="{{ url('shop/' . $category['curl']) }}">
                        <div
                            class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-2 image-frame-style-5">
                            <div class="image-frame-wrapper">
                                <img src="{{ asset('images/' . $category['cimage']) }}" class="img-fluid">
                                <div class="image-frame-info image-frame-info-show">
                                    <div class="image-frame-info-box-style-1">
                                        <h3 class="font-weight-bold text-color-default text-uppercase text-1 m-0 p-0">
                                            {{ $category['ctitle'] }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <a href="{{ url('shop') }}">GO TO CATEGORIES</a>
                @endif
            </div>
        </div>
    </section>



</div>
</div>

@endsection
