@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Delete Category'])
<div class="row">
    <div class="col-md-4 border rounded p-4 ml-2">
        <form action="{{ url('cms/categories/' . $item_id) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <h5 class="mb-4">Are you sure you want to permanently delete this category?</h5>
            <div class="mt-4 text-right">
                <input class="btn btn-danger btn-rounded btn-v-3 btn-h-3 font-weight-bold" name="submit" type="submit"
                    value="Delete">
                <a class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-2 font-weight-bold ml-2"
                    href="{{ url('cms/categories') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
