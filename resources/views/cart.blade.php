@extends('master')

@section('main_content')

<div role="main" class="main">
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
                    <h1 class="font-weight-bold">Cart</h1>

                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row mb-5">
                @if($cart)
                <div class="col">
                    <form class="shop-cart" method="post" action="#">

                        <div class="table-responsive">
                            <table class="shop-cart-table w-100">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"><strong>Product</strong></th>
                                        <th class="product-price"><strong>Shipping Price</strong></th>
                                        <th class="product-quantity"><strong class="ml-5">Quantity</strong></th>
                                        <th class="product-subtotal"><strong>Unit Price</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart as $item)

                                    <tr class="cart-item">
                                        <td class="product-remove">
                                            <a href="{{ url('shop/remove-item/' . $item['id']) }}">
                                                <i class="fas fa-times" aria-label="Remove"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <img src="{{ asset('images/' . $item['attributes']['image']) }}"
                                                class="img-fluid" width="67" alt="">
                                        </td>
                                        <td class="product-name">
                                            <a href="">{{$item['name']}}</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-price">Free Delivery</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity mx-auto">
                                                <input data-op="minus" data-pid="{{ $item['id'] }}" type="button"
                                                    value="-" class="update-cart-btn minus">
                                                <input type="number" step="1" min="1" name="quantity"
                                                    value="{{ $item['quantity'] }}" title="Qty" class="qty" size="2">
                                                <input data-op="plus" data-pid="{{ $item['id'] }}" type="button"
                                                    value="+" class="update-cart-btn plus">
                                            </div>
                                        </td>
                                        <td class="product-price">
                                            <span class="unit-price">${{$item['price']}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-4 mb-3">Cart Totals</h2>
                    <div class="table-responsive">
                        <table class="cart-totals w-100">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="cart-total-label">Shipping</span>
                                    </td>
                                    <td>
                                        <span class="cart-total-value">Free Delivery</span>
                                    </td>
                                </tr>
                                <tr class="border-bottom-0">
                                    <td>
                                        <span class="cart-total-label">Total</span>
                                    </td>
                                    <td>
                                        <span
                                            class="cart-total-value text-color-primary text-4">${{ Cart::getTotal() }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-md-5 px-0 mb-3 mb-md-0">
                </div>
                <div class="col-md-7 text-right px-0 mt-3 mt-xl-0">
                    <a href="{{ url('shop/clear-cart') }}"
                        class="btn btn-dark btn-outline btn-rounded font-weight-bold btn-h-2 btn-v-3">CLEAR CART</a>
                    <a href="{{ url('shop/checkout')}}"
                        class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3">PROCEED
                        TO CHECKOUT</a>
                </div>
                @else
                <div class="col-12 justify-content-center text-center no-items">
                    <i class="fas fa-exclamation-circle fa-9x mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation-delay="200" style="animation-delay: 200ms;"></i>
                    <h3 class="my-auto appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">There are no items in cart, start adding some</h3>
                    <a class="btn btn-dark btn-outline btn-rounded font-weight-bold btn-h-2 btn-v-3 mx-2 mt-4  appear-animation animated fadeInUpShorter appear-animation-visible" 
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;"
                        href="{{ url('shop') }}">
                        Hop to shop
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>
</div>

@endsection
