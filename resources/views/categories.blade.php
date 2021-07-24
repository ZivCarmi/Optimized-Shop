@extends('master')

@section('main_content')

<div role="main" class="main mb-5">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">Shop Categories</h1>
                    <p class="lead">Browse between products in our shop</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <ul class="nav sort-source mb-3" data-sort-id="portfolio" data-option-key="filter"
            data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
        </ul>

        <div class="sort-destination-loader sort-destination-loader-loaded" data-plugin-remove-min-height="">
            <ul class="portfolio-list portfolio-list-style-2 sort-destination" data-sort-id="portfolio" data-filter="*"
                style="position: relative; height: 2105.5px;">

                @foreach($categories as $category)
                <li class="col-sm-6 col-md-4 p-0 mb-3 isotope-item brands"
                    style="position: absolute; left: 0px; top: 0px;">
                    <div class="portfolio-item text-center" style="perspective: 1000px;">
                        <a href="{{ url('shop/' . $category['curl']) }}">
                            <span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3"
                                style="perspective: 1000px; transform: none;">
                                <span class="image-frame-wrapper">
                                    <img src="{{ asset('images/' . $category['cimage']) }}" class="img-fluid" alt="">
                                    <span class="image-frame-inner-border"
                                        style="perspective: 1000px; transform: translateX(-4.3332px);"></span>
                                    <span class="image-frame-action image-frame-action-effect-1 image-frame-action-sm"
                                        style="perspective: 1000px; transform: rotateY(-1.73328deg) rotateX(0.541875deg) translateY(0.541875px) translateX(-1.73328px);">
                                    </span>
                                </span>
                            </span>
                        </a>
                        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
                            <a href="{{ url('shop/' . $category['curl']) }}"
                                class="link-color-dark">{{ $category['ctitle'] }}</a>
                        </h2>
                        <span class="text-uppercase text-0">{!! $category['carticle'] !!}</span>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

    </div>

</div>

@endsection
