@extends('master')

@section('main_content')

<div role="main" class="main mb-5">
    <section class="page-header">
        @if(!empty($menu_content))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li class="active">{{ $menu_content[0]->link }}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ $menu_content[0]->link }}</h1>
                </div>
            </div>
        </div>
        @endif
    </section>
    <div class="container">
        <div class="row">
            @if($contents)
            @foreach($contents as $content)
            <div class="col-12 mb-5">
                <h3>{{ $content->ctitle }}</h3>
                <p>{!! $content->article !!}</p>
            </div>
            @endforeach
            @endif
        </div>
    </div>



</div>

@endsection
