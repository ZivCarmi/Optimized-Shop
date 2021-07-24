@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Contents'])
<div class="row p-1">
    <div class="col-12">
        <a href="{{ url('cms/contents/create') }}"
            class="btn btn-dark btn-outline btn-rounded btn-v-3 btn-h-1 font-weight-bold to-white">
            <i class="fas fa-plus text-black fs-15"></i>
            Add New Content
        </a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12 col-lg-8">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Content Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td>{{ $content['ctitle'] }}</td>
                    <td class="col-md-10 col-lg-8 d-flex text-center">
                        <a class="col-6 p-0" href="{{ url('cms/contents/' . $content['id']) . '/edit' }}">
                            <i class="lnr lnr-pencil text-primary"></i>
                            Edit
                        </a>
                        <a class="col-6 p-0 text-danger" href="{{ url('cms/contents/' . $content['id']) }}">
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
