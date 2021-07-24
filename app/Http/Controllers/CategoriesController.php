<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;
use App\Categorie;
use Session;

class CategoriesController extends MainController
{

    public function index()
    {
        self::$viewData['categories'] = Categorie::all()->toArray();
        return view('cms.categories_index', self::$viewData);
    }


    public function create()
    {
        return view('cms.add_category', self::$viewData);
    }


    public function store(CategorieRequest $request)
    {
        Categorie::save_new($request);
        return redirect('cms/categories');
    }

    public function show($id)
    {
        self::$viewData['item_id'] = $id;
        return view('cms.delete_category', self::$viewData);
    }


    public function edit($id)
    {
        self::$viewData['item'] = Categorie::find($id)->toArray();
        return view('cms.edit_category', self::$viewData);
    }


    public function update(CategorieRequest $request, $id)
    {
        Categorie::update_category($request, $id);
        return redirect('cms/categories');
    }


    public function destroy($id)
    {
        Categorie::destroy($id);
        Session::flash('sm', 'Category has been Deleted Successfully');
        return redirect('cms/categories');
    }
}
