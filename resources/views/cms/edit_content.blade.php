@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Edit Content'])
<div class="row">
    <div class="col-md-5 border rounded p-4 ml-2">
        <form action="{{ url('cms/contents/' . $item['id'])  }}" method="POST" novalidate="novalidate"
            autocomplete="off">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="menu-id">* Menu Link</label>
                <select name="menu_id" id="menu-id" class="form-control bg-light-5 rounded border-0">
                    @foreach($menu as $menu_item)
                    <option @if ( $item['menu_id']==$menu_item['id'] ) selected="selected" @endif
                        value="{{ $menu_item['id'] }}" class="bg-light">{{ $menu_item['link'] }}</option>
                    @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('menu_id') }}</span>
            </div>
            <div class="form-group">
                <label for="title">* Title</label>
                <input class="form-control bg-light-5 rounded border-0" type="text" name="title" id="title"
                    value="{{ $item['ctitle'] }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
                <label for="article">* Article</label>
                <textarea class="form-control" name="article" id="article" cols="30"
                    rows="10">{{ $item['article'] }}</textarea>
                <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>
            <div class="mt-4 text-right">
                <input class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold" name="submit" type="submit"
                    value="Update Content">
                <a class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-2 font-weight-bold ml-2"
                    href="{{ url('cms/contents') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
