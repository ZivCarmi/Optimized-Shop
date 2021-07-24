@php
$menu = App\Menu::all()->toArray();
@endphp
@extends('master')

@section('main_content')

<div role="main" class="main">
    <section class="section bg-light-5">
        <img src="img/others/lamp-holder.png"
            class="img-fluid lamp-style-2 position-absolute transform-center-x appear-animation animated fadeIn appear-animation-visible"
            data-appear-animation="fadeIn" alt="" style="animation-delay: 100ms;">
        <div class="container">
            <div class="row justify-content-center text-center py-5 mt-5 mb-3">
                <div class="col-md-8 col-lg-6 pt-4 mt-5">
                    <h1 class="font-weight-bold text-6 mb-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        style="animation-delay: 200ms;"><strong
                            class="d-block font-weight-bold text-20">404!</strong>PAGE NOT FOUND</h1>
                    <p class="mb-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                        style="animation-delay: 400ms;">The page you were looking for could not be found.<br>Click on
                        the
                        button below to return to Home Page! </p>
                    <a href="{{ url('') }}"
                        class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        style="animation-delay: 800ms;"><i class="fas fa-angle-left mr-3 text-3"></i> BACK TO
                        HOMEPAGE</a>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
