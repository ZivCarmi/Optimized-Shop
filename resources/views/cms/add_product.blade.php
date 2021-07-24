@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Add a new Product'])
<div class="row mb-4">
    <div class="col-md-5 border rounded p-4 ml-2">
        <form action="{{ url('cms/products') }}" method="POST" novalidate="novalidate" autocomplete="off"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="categorie-id">To Category</label>
                <select class="form-control bg-light-5 rounded border-0" name="category" id="categorie-id">
                    <option class="bg-light" value="">--- Choose Category ---</option>
                    @foreach($categories as $category)
                    <option class="bg-light" @if(old('category')==$category['id']) selected="selected" @endif
                        value="{{ $category['id'] }}">
                        {{ $category['ctitle'] }}</option>
                    @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('category') }}</span>
            </div>
            <div class="form-group">
                <label for="title">* Product Title</label>
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
                <label for="price">* Price</label>
                <input class="form-control bg-light-5 rounded border-0" type="text" name="price" id="price"
                    value="{{ old('price') }}">
                <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>
            <div class="form-group">
                <label for="article">* Article</label>
                <textarea class="form-control" name="article" id="article" cols="30"
                    rows="10">{{ old('article') }}</textarea>
                <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>
            <div class="form-group my-4">
                <label for="image">Product Image</label>
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
                    value="Save Product">
                <a class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-2 font-weight-bold ml-2"
                    href="{{ url('cms/products') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
