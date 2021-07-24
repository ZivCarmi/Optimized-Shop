@extends('master')

@section('main_content')

<div role="main" class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <section class="section bg-primary">
                    <div class="row justify-content-end m-0">
                        <div class="col-half-section pr-md-5">
                            <div class="icon-box icon-box-style-4 align-items-center mb-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                                data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                                <div class="icon-box-icon bg-dark-4">
                                    <i class="lnr lnr-apartment text-color-light"></i>
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h2 class="font-weight-bold text-color-light text-4 mb-0">Address</h2>
                                    </div>
                                    <p class="text-color-light text-2 opacity-8 mb-0">Bilu 21, Ra'anana, Israel
                                    </p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-style-4 align-items-center mb-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                                style="animation-delay: 200ms;">
                                <div class="icon-box-icon bg-dark-4">
                                    <i class="lnr lnr-envelope text-color-light"></i>
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h2 class="font-weight-bold text-color-light text-4 mb-0">Support E-mail Address
                                        </h2>
                                    </div>
                                    <a href="mailto:example@domain.com"
                                        class="link-color-light-2 text-2 opacity-8">carmi.ziv@gmail.com</a>
                                </div>
                            </div>
                            <div class="icon-box icon-box-style-4 align-items-center appear-animation animated fadeInUpShorter appear-animation-visible"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"
                                style="animation-delay: 400ms;">
                                <div class="icon-box-icon bg-dark-4">
                                    <i class="lnr lnr-phone-handset text-color-light"></i>
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h2 class="font-weight-bold link-color-light-2 text-4 mb-0">Sales Phone Number
                                        </h2>
                                    </div>
                                    <span class="d-block text-color-light">
                                        <a href="tel:+1234567890" class="link-color-light-2 text-2 opacity-8">(972)
                                            52-5599778</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section bg-primary-4">
                    <div class="row justify-content-end m-0">
                        @if(empty($success_msg))
                        <div class="col-half-section pr-md-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            style="animation-delay: 600ms;">
                            <div class="row">
                                <div class="col">
                                    <span class="top-sub-title text-color-light opacity-6">QUICK CONTACT</span>
                                    <h2 class="text-color-light font-weight-bold mb-4">Send us a message</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <form class="contact-form form-style-3 form-errors-light" action="" method="POST"
                                        novalidate="novalidate" autocomplete="off">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <input type="text" value="{{ old('name') }}" class="form-control mb-1"
                                                    name="name" id="name" placeholder="Name">
                                                @if($errors->first('name'))
                                                <span
                                                    class="text-danger contact-alert alert-danger">{{ $errors->first('name') }}
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="email" value="{{ old('email') }}" class="form-control mb-1"
                                                    name="email" id="email" placeholder="E-mail">
                                                @if($errors->first('email'))
                                                <span
                                                    class="text-danger contact-alert alert-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <input type="text" value="{{ old('subject') }}"
                                                    class="form-control mb-1" name="subject" id="subject"
                                                    placeholder="Subject">
                                                @if($errors->first('subject'))
                                                <span
                                                    class="text-danger contact-alert alert-danger">{{ $errors->first('subject') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <textarea rows="5" class="form-control mb-1" name="message" id="message"
                                                    placeholder="Message">{{ old('message') }}</textarea>
                                                @if($errors->first('message'))
                                                <span
                                                    class="text-danger contact-alert alert-danger">{{ $errors->first('message') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col">
                                                <input type="submit" value="SEND MESSAGE"
                                                    class="btn btn-dark btn-rounded btn-4 font-weight-semibold text-0"
                                                    data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if(!empty($success_msg))
                        <div class="col-half-section pr-md-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                            style="animation-delay: 600ms;">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 mb-5 mb-lg-0">
                                    <div class="icon-box icon-box-style-4">
                                        <div class="icon-box-icon bg-secondary">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="icon-box-info">
                                            <h2 class="text-color-light font-weight-bold mb-4">Message has been Sent
                                                Successfully!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </section>
            </div>
            <div class="col-md-6 px-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3376.918239124648!2d34.86828818444957!3d32.17947942151782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d380bdba8c459%3A0xf24d7b3864d24e7e!2z15HXmdecIteVIDIxLCDXqNei16DXoNeU!5e0!3m2!1siw!2sil!4v1578315515525!5m2!1siw!2sil"
                    class="w-100 h-100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
