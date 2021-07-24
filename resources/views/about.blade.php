@extends('master')

@section('main_content')
<div role="main" class="main">
    <section
        class="page-header parallax overlay overlay-color-dark overlay-show overlay-op-8 appear-animation animated fadeIn appear-animation-visible"
        data-appear-animation="fadeIn" data-plugin-parallax=""
        data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'offset': 60}"
        data-image-src="lib/template/img/parallax/parallax-8.jpg"
        style="position: relative; overflow: hidden; animation-delay: 100ms;">
        <div class="parallax-background"
            style=" background-size: cover; background-position: 50% center; position: absolute; top: 0px; left: 0px; width: 100%; height: 120%; transform: translate3d(0px, -1.71429px, 0px);">
        </div>
        <div class="container py-5 my-4">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold text-color-light">About Optimized</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-6 col-md-4 col-lg-5 col-xl-6 mr-sm-auto pb-5 mb-5 pb-md-0 mb-md-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                    style="animation-delay: 400ms;">
                    <div class="bg-primary position-relative mx-auto" data-plugin-float-element=""
                        data-plugin-options="{'startPos': 'none', 'speed': 10, 'transition': true, 'style': 'max-width: 250px;'}"
                        style="max-width: 250px; transition: transform 500ms ease 0s; transform: translate3d(0px, 9.15102%, 0px);">
                        <div class="rect-size"></div>
                        <img src="{{ asset('images/about-us1.jpg') }}" class="position-absolute" alt=""
                            data-plugin-float-element=""
                            data-plugin-options="{'startPos': 'none', 'speed': 9, 'horizontal': true, 'transition': true, 'style': 'top: 60px; right: -40%; width: 120%;'}"
                            style="top: 60px; right: -40%; width: 120%; transition: transform 500ms ease 0s; transform: translate3d(8.9086%, 8.9086%, 0px);">
                        <img src="{{ asset('images/about-us2.jpg') }}" class="position-absolute" alt=""
                            data-plugin-float-element=""
                            data-plugin-options="{'startPos': 'none', 'speed': 8.5, 'transition': true, 'style': 'bottom: -40px; left: -40%; width: 160%;'}"
                            style="bottom: -40px; left: -40%; width: 160%; transition: transform 500ms ease 0s; transform: translate3d(0px, 10.8549%, 0px);">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"
                        style="animation-delay: 100ms;">
                        <span class="top-sub-title text-color-primary">About Optimized Co.</span>

                        <h2 class="font-weight-bold text-6 mb-3">Who we are?</h2>
                    </div>
                    <p class="text-color-light-3 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                        style="animation-delay: 500ms;">Optimized Company founded in 2019 and already leading in
                        differents fields like computers, smartphones, headsets and headphones, peripheral equipment and
                        many more. </p>

                    <p class="text-color-light-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        style="animation-delay: 800ms;">We are doing shipping globally and our only branch located in
                        Israel but we strive to expand it out to Europe and USA in the near future.<br> Don't hesitate
                        to send us a message about anything we are replying to every contact!
                    </p>

                    <a href="{{ url('contact') }}"
                        class="btn btn-outline btn-rounded btn-primary btn-v-3 btn-h-4 font-weight-bold text-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                        style="animation-delay: 1000ms;">CONTACT US</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-dark-5 mt-4">
        <div class="container">
            <div class="row text-center py-5 appear-animation animated" data-appear-animation="fadeInRightShorter">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="px-4">
                        <span class="font-weight-bold text-color-primary font-primary text-18">1</span>
                        <h2
                            class="font-weight-extra-bold position-relative text-color-light text-4 bg-dark-5 mt-negative-2 mb-4">
                            QUALITY</h2>
                        <p class="text-color-light-3">Optimized offers you the most highly standarts products that
                            exists in the markets.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="px-4">
                        <span class="font-weight-bold text-color-primary font-primary text-18">2</span>
                        <h2
                            class="font-weight-extra-bold position-relative text-color-light text-4 bg-dark-5 mt-negative-2 mb-4">
                            RELIABILITY</h2>
                        <p class="text-color-light-3">We can assure we'll have the best deals and great prices of
                            our products.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="px-4">
                        <span class="font-weight-bold text-color-primary font-primary text-18">3</span>
                        <h2
                            class="font-weight-extra-bold position-relative text-color-light text-4 bg-dark-5 mt-negative-2 mb-4">
                            CUSTOMER SERVICE</h2>
                        <p class="text-color-light-3">No one is left behind! We will give the most of us and guide
                            you
                            to buy your optimal products.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="section section-content-pull-top pull-top-level-2">
        <div class="container">
            <div class="row appear-animation animated" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <div class="image-frame image-frame-style-3 mb-4 pb-3">
                        <img src="{{ asset('images/about-us3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <h2 class="text-4 font-weight-bold mb-3">Optimize Your work!</h2>
                    <p>We know the needs of your office!<br> We've got every product you will ever need.</p>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <div class="image-frame image-frame-style-3 mb-4 pb-3">
                        <img src="{{ asset('images/about-us4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <h2 class="text-4 font-weight-bold mb-3">Optimize Your Gaming!</h2>
                    <p>We know quality in gaming is important!<br> We've got the best products to boost your gaming
                        to max!</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="image-frame image-frame-style-3 mb-4 pb-3">
                        <img src="{{ asset('images/about-us5.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <h2 class="text-4 font-weight-bold mb-3">Optimize Your SmartPhone!</h2>
                    <p>Every one of us has a little friend, the phone.<br> Browse between many of our SmartPhones!</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
