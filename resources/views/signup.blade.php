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
                    <h1 class="font-weight-bold">Sign up for a new Account</h1>

                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">

                <div class="mx-auto col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                    style="animation-delay: 200ms;">
                    <div class="border rounded h-100 p-5 bg-blackish">
                        <span class="top-sub-title text-primary">DON'T HAVE AN ACCOUNT?</span>
                        <h2 class="font-weight-bold text-4 mb-4">Register Now!</h2>

                        <form action="" method="POST" autocomplete="off" novalidate="novalidate">
                            @csrf()
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label for="frmRegisterEmail">* FULL NAME</label>
                                    <input type="text" value="{{ old('name') }}"
                                        class="form-control bg-light-5 rounded border-0 text-1" name="name" id="name">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label for="frmRegisterEmail">* EMAIL ADDRESS</label>
                                    <input type="email" value="{{ old('email') }}"
                                        class="form-control bg-light-5 rounded border-0 text-1" name="email" id="email">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6 mb-0">
                                    <label for="password">* PASSWORD</label>
                                    <input type="password" class="form-control bg-light-5 rounded border-0 text-1"
                                        name="password" id="password">
                                </div>
                                <div class="form-group col-lg-6 mb-0">
                                    <label for="password-confirmation">RE-ENTER PASSWORD</label>
                                    <input type="password" class="form-control bg-light-5 rounded border-0 text-1"
                                        name="password_confirmation" id="password-confirmation">
                                </div>
                            </div>
                            <div class="mb-2"><span class="text-danger">{{ $errors->first('password') }}</span></div>
                            <div class="form-row mb-5">
                                <div class="form-group col mb-2">
                                    <label for="country">* COUNTRY</label>
                                    <select class="form-control border" name="country" id="country">
                                        <option value="">--- Choose Country ---</option>
                                        @foreach($countries as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <button type="submit"
                                        class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold">REGISTER
                                        NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
