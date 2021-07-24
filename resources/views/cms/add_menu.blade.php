@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Add a new Menu Link'])
<div class="row">
    <div class="col-md-5 border rounded p-4 ml-2">
        <form action="{{ url('cms/menus') }}" method="POST" novalidate="novalidate" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="link">* Link</label>
                <input class="form-control bg-light-5 rounded border-0 origin-text" type="text" name="link" id="link"
                    value="{{ old('link') }}">
                <span class="text-danger">{{ $errors->first('link') }}</span>
            </div>
            <div class="form-group">
                <label for="url">* URL</label>
                <input class="form-control bg-light-5 rounded border-0 text-1 target-text" type="text" name="url"
                    id="url" value="{{ old('url') }}">
                <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
                <label for="title">* Title</label>
                <input class="form-control bg-light-5 rounded border-0 text-1" type="text" name="title" id="title"
                    value="{{ old('title') }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="mt-4 text-right">
                <input class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold" name="submit" type="submit"
                    value="SAVE MENU">
                <a class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-2 font-weight-bold ml-2"
                    href="{{ url('cms/menus') }}">CANCEL</a>
            </div>
        </form>
    </div>
</div>
@endsection
