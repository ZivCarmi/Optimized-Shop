@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Edit Menu Link'])
<div class="row">
    <div class="col-md-5 border rounded p-4 ml-2">
        <form action="{{ url('cms/menus/' . $item['id'])  }}" method="POST" novalidate="novalidate" autocomplete="off">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="item_id" value="{{ $item['id'] }}">
            <div class="form-group">
                <label for="link">* Link</label>
                @php $link_value = !empty(old('link')) ? old('link') : $item['link']; @endphp
                <input class="form-control bg-light-5 rounded border-0 origin-text" type="text" name="link" id="link"
                    value="{{ $link_value }}">
                <span class="text-danger">{{ $errors->first('link') }}</span>
            </div>
            <div class="form-group">
                <label for="url">* URL</label>
                @php $url_value = !empty(old('url')) ? old('url') : $item['url']; @endphp
                <input class="form-control bg-light-5 rounded border-0 target-text" type="text" name="url" id="url"
                    value="{{ $url_value }}">
                <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
                <label for="title">* Title</label>
                @php $title_value = !empty(old('title')) ? old('title') : $item['title']; @endphp
                <input class="form-control bg-light-5 rounded border-0" type="text" name="title" id="title"
                    value="{{ $title_value }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="mt-4 text-right">
                <input class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold" name="submit" type="submit"
                    value="Update Menu">
                <a class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-2 font-weight-bold ml-2"
                    href="{{ url('cms/menus') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
