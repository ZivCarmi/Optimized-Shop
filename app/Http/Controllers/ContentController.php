<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Content;
use Session;

class ContentController extends MainController
{

    public function index()
    {
        self::$viewData['contents'] = Content::all()->toArray();
        return view('cms.content_index', self::$viewData);
    }


    public function create()
    {
        return view('cms.add_content', self::$viewData);
    }


    public function store(ContentRequest $request)
    {
        Content::save_new($request);
        return redirect('cms/contents');
    }


    public function show($id)
    {
        self::$viewData['item_id'] = $id;
        return view('cms.delete_content', self::$viewData);
    }


    public function edit($id)
    {
        self::$viewData['item'] = Content::find($id)->toArray();
        return view('cms.edit_content', self::$viewData);
    }


    public function update(ContentRequest $request, $id)
    {
        Content::update_content($request, $id);
        return redirect('cms/contents');
    }


    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('sm', 'Content has been Deleted Successfully');
        return redirect('cms/contents');
    }
}
