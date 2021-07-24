@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Dashboard'])
<div class="row">
    <div class="col-12">
        <h1 class="display-3 mb-3">Welcome aboard, Admin!</h1>
        <h2 class="display-5">Here you can control on all of your site!
            <br>
            You are able to Create, Edit and Delete Menus / Content / Categories / Products and also track your orders.
        </h2>
        <!-- <h2>Ideas</h2>
        <p>Last orders made</p>
        <p>Last orders made</p>
        <p>Last products added to site</p>
        <p>Last users registered</p>
        <p>Charts</p> -->
    </div>
</div>
@endsection
