@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Categories'])
<div class="row p-1">
    <div class="col-12">
        <a href="{{ url('cms/categories/create') }}"
            class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-1 font-weight-bold to-white">
            <i class="fas fa-plus text-black fs-15"></i>
            Add New Category
        </a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12 col-lg-10">
        @foreach($categories as $category)
        <div class="row mb-5">
            <div class="col-12 d-flex">
                <div class="mr-3 my-auto">
                    <img class="img-thumbnail" src="{{ asset('images/' . $category['cimage']) }}" width="130">
                </div>
                <table class="table col-7 my-auto">
                    <thead>
                        <tr class="text-center">
                            <th>Category Title</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>
                                {{ $category['ctitle'] }}
                            </td>
                            <td>{{ date('d/m/Y H:i:s', strtotime($category['updated_at'])) }}</td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <ul class="no-dots m-0 p-0 text-center">
                        <li class="p-2">
                            <a class="" href="{{ url('cms/categories/' . $category['id']) . '/edit' }}">
                                <i class="lnr lnr-pencil text-primary"></i>
                                Edit
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="text-danger" href="{{ url('cms/categories/' . $category['id']) }}">
                                <i class="lnr lnr-trash text-danger"></i>
                                Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
