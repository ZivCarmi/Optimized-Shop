@extends('master')

@section('main_content')


<div role="main" class="main">
    <section class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li class="active">Pages</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">Sign in to Optimized or <a
                            class="text-decoration-underline text-primary" href="{{ url('user/signup') .$rn }}">SIGN
                            UP</a>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                    <div class="bg-primary rounded p-5">
                        <span class="top-sub-title text-color-light-2">ALREADY A MEMBER?</span>
                        <h2 class="text-color-light font-weight-bold text-4 mb-4">Sign In</h2>

                        @if(!empty($login_error))
                        <div class="alert alert-danger">
                            <span class="text-danger">{{ $login_error }}</span>
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="" id="frmSignIn" method="POST" autocomplete="off" novalidate="novalidate">
                            @csrf()
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label class="text-color-light-2" for="email">* EMAIL ADDRESS</label>
                                    <input value="{{ old('email') }}" type="email"
                                        class="form-control bg-light rounded border-0 text-1" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-light-2" for="password">* PASSWORD</label>
                                    <input type="password" class="form-control bg-light rounded border-0 text-1"
                                        name="password" id="password">
                                </div>
                            </div>
                            <!-- <div class="form-row mb-3">
                                <div class="form-group col">
                                    <div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
                                        <input class="form-check-input" type="checkbox" id="frmSignInRemember">
                                        <label class="form-check-label text-color-light-2" for="frmSignInRemember">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col text-right">
                                    <a href="#" class="forgot-pw text-color-light-2 d-block">Forgot password?</a>
                                </div>
                            </div> -->
                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <input type="submit"
                                        class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold" value="SIGN
                                        IN" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="seperator mx-4"></div>

                <div class="col-lg-5 my-auto appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                    style="animation-delay: 200ms;">
                    <div class="col rounded p-5 text-center bg-gray">
                        <span class="top-sub-title text-color-primary mb-5">Still not a member?</span>
                        <h2 class="font-weight-bold text-4 mb-4">Sign up now and start shopping!</h2>
                        <a class="text-decoration-underline lead text-primary"
                            href="{{ url('user/signup') . $rn }}">SIGN UP
                            HERE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
