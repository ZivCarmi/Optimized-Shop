<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Categorie;
use App\Product;
use Session;

class ProductController extends MainController
{

    public function index()
    {
        self::$viewData['products'] = Product::all()->toArray();
        return view('cms.products_index', self::$viewData);
    }


    public function create()
    {
        self::$viewData['categories'] = Categorie::all()->toArray();
        return view('cms.add_product', self::$viewData);
    }


    public function store(ProductRequest $request)
    {
        Product::save_new($request);
        return redirect('cms/products');
    }

    public function show($id)
    {
        self::$viewData['item_id'] = $id;
        return view('cms.delete_product', self::$viewData);
    }


    public function edit($id)
    {
        self::$viewData['item'] = Product::find($id)->toArray();
        self::$viewData['categories'] = Categorie::all()->toArray();
        return view('cms.edit_product', self::$viewData);
    }


    public function update(ProductRequest $request, $id)
    {
        Product::update_product($request, $id);
        return redirect('cms/products');
    }


    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('sm', 'Product has been Deleted Successfully');
        return redirect('cms/products');
    }
}
