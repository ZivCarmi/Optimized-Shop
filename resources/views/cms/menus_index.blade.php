@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Menus'])
<div class="row p-1">
    <div class="col-12">
        <a href="{{ url('cms/menus/create') }}"
            class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-1 font-weight-bold to-white">
            <i class="fas fa-plus text-black fs-15"></i>
            Add Menu Link
        </a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12 col-lg-8">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Menu Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $menu_item)
                <tr>
                    <td class="">{{ $menu_item['link'] }}</td>
                    <td class="col-md-10 col-lg-8  d-flex text-center">
                        <a class="col-6 p-0" href="{{ url('cms/menus/' . $menu_item['id']) . '/edit' }}">
                            <i class="lnr lnr-pencil text-primary"></i>
                            Edit
                        </a>
                        <a class="col-6 p-0 text-danger" href="{{ url('cms/menus/' . $menu_item['id']) }}">
                            <i class="lnr lnr-trash text-danger"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
