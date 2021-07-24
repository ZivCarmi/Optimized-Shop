@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Edit Product'])
<div class="row mb-4">
    <div class="col-md-5 border rounded p-4 ml-2">
        <form action="{{ url('cms/products/' . $item['id'])  }}" method="POST" novalidate="novalidate"
            autocomplete="off" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="item_id" value="{{ $item['id'] }}">
            <div class="form-group">
                <label for="categorie-id">Category</label>
                <select class="form-control bg-light-5 rounded border-0" name="category" id="categorie-id">
                    @foreach($categories as $category)
                    <option @if($item['categorie_id']==$category['id']) selected="selected" @endif
                        value="{{ $category['id'] }}">
                        {{ $category['ctitle'] }}</option>
                    @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('category') }}</span>
            </div>
            <div class="form-group">
                <label for="title">* Product Title</label>
                <input class="form-control bg-light-5 rounded border-0 origin-text" type="text" name="title" id="title"
                    value="{{ $item['ptitle'] }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
                <label for="url">* URL</label>
                <input class="form-control bg-light-5 rounded border-0 target-text" type="text" name="url" id="url"
                    value="{{ $item['purl'] }}">
                <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
                <label for="price">* Price</label>
                <input class="form-control bg-light-5 rounded border-0" type="text" name="price" id="price"
                    value="{{ $item['price'] }}">
                <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>
            <div class="form-group">
                <label for="article">* Article</label>
                <textarea class="form-control" name="article" id="article" cols="30"
                    rows="10">{{ $item['particle'] }}</textarea>
                <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>
            <div class="row">
                <div class="col-8 my-auto">
                    <div class="form-group my-4">
                        <label for="image">Change Product Image</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Choose image...</label>
                            </div>
                        </div>
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <p class="lead">Current Image</p>
                    <div class="form-group">
                        <img class="img-fluid img-thumbnail" src="{{ asset('images/' . $item['pimage'])  }}">
                    </div>
                </div>
            </div>
            <div class="mt-4 text-right">
                <input class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold" name="submit" type="submit"
                    value="Update Product">
                <a class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-2 font-weight-bold ml-2"
                    href="{{ url('cms/products') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
