<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Image;

class Product extends Model
{
    static public function save_new($request)
    {

        $image_name = 'no-image-default.png';
        $ex = ['png', 'jpg', 'jpeg', 'gif', 'bmp'];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if (isset($_FILES['image']['name'])) {

                $filename = pathinfo($_FILES['image']['name']);

                if (in_array(strtolower($filename['extension']), $ex)) {

                    if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {

                        $file = $request->file('image');
                        $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
                        $request->file('image')->move(public_path() . '/images', $image_name);
                        $img = Image::make(public_path() . '/images/' . $image_name);
                        // $img->resize(300, null, function ($constraint) {
                        //     $constraint->aspectRatio();
                        // });
                        $img->resize(350, 221.72);
                        $img->save();
                    }
                }
            }
        }


        $product = new self();
        $product->categorie_id = $request['category'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->purl = $request['url'];
        $product->pimage = $image_name;
        $product->price = $request['price'];
        $product->save();
        Session::flash('sm', 'Product Added Successfully');
    }

    static public function update_product($request, $id)
    {
        $image_name = '';
        $ex = ['png', 'jpg', 'jpeg', 'gif', 'bmp'];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if (isset($_FILES['image']['name'])) {

                $filename = pathinfo($_FILES['image']['name']);

                if (in_array(strtolower($filename['extension']), $ex)) {

                    if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {

                        $file = $request->file('image');
                        $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
                        $request->file('image')->move(public_path() . '/images', $image_name);
                        $img = Image::make(public_path() . '/images/' . $image_name);
                        $img->resize(300, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $img->save();
                    }
                }
            }
        }


        $product = self::find($id);
        $product->categorie_id = $request['category'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->purl = $request['url'];
        if ($image_name) {
            $product->pimage = $image_name;
        }
        $product->price = $request['price'];
        $product->save();
        Session::flash('sm', 'Product Updated Successfully');
    }

    static public function getProducts($curl, &$viewData, $request)
    {
        $products = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('c.curl', '=', $curl);

        if ($request['orderPrice'] == 'asc') {
            $products = $products->orderBy('price');
        } elseif ($request['orderPrice'] == 'desc') {
            $products = $products->orderBy('price', 'desc');
        } else {
            $products = $products->latest();
        }

        $products = $products->get();

        $products_counter = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->where('c.curl', '=', $curl)
            ->count();

        if ($products->count() == 0) {
            abort(404);
        }

        $viewData['products'] = $products;
        $viewData['products_counter'] = $products_counter;
        $viewData['page_title'] .= $products[0]->ctitle . ' Products';
    }

    static public function getItem($curl, $purl, &$viewData)
    {

        $item = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('p.purl', '=', $purl)
            ->first();

        $random_items = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->inRandomOrder()
            ->limit(8)
            ->get();

        $same_category = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->where('c.ctitle', '=', $curl)
            ->get();

        if (!$item) {
            abort(404);
        } elseif (!$same_category) {
            abort(404);
        }

        $viewData['item'] = $item;
        $viewData['random_items'] = $random_items;
        $viewData['same_cat'] = $same_category;
        $viewData['page_title'] .= $item->ptitle;
    }

    static public function addToCart($pid)
    {
        if (is_numeric($pid)) {

            if ($product = self::find($pid)) {

                $product = $product->toArray();

                if (!Cart::get($pid)) {
                    Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image' => $product['pimage'], 'purl' => $product['purl']]);
                    Session::flash('sm', $product['ptitle'] . ' was added to cart!');
                }
            }
        }
    }

    static public function updateCart($pid, $op)
    {
        if (is_numeric($pid)) {

            if (Cart::get($pid)) {

                if ($op == 'minus') {

                    Cart::update($pid, ['quantity' => -1]);
                } else if ($op == 'plus') {
                    Cart::update($pid, ['quantity' => 1]);
                }
            }
        }
    }
}
