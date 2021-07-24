@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Add a new Category'])
<div class="row">
    <div class="col-md-5 border rounded p-4 ml-2">
        <form action="{{ url('cms/categories') }}" method="POST" novalidate="novalidate" autocomplete="off"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">* Category Title</label>
                <input class="form-control bg-light-5 rounded border-0 origin-text" type="text" name="title" id="title"
                    value="{{ old('title') }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
                <label for="url">* URL</label>
                <input class="form-control bg-light-5 rounded border-0 target-text" type="text" name="url" id="url"
                    value="{{ old('url') }}">
                <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
                <label for="article">* Article</label>
                <textarea class="form-control" name="article" id="article" cols="30"
                    rows="10">{{ old('article') }}</textarea>
                <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>
            <div class="form-group my-4">
                <label for="image">Category Image</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image...</label>
                    </div>
                </div>
                <span class="text-danger">{{ $errors->first('image') }}</span>
            </div>
            <div class="mt-4 text-right">
                <input class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold" name="submit" type="submit"
                    value="Save Category">
                <a class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-2 font-weight-bold ml-2"
                    href="{{ url('cms/categories') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
