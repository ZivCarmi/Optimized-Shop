<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use Cart;
use Session;
use App\Order;

class ShopController extends MainController
{
    public function categories()
    {
        self::$viewData['page_title'] .= 'Shop Categories';
        self::$viewData['categories'] = Categorie::all()->toArray();
        return view('categories', self::$viewData);
    }

    public function products($curl, Request $request)
    {
        Product::getProducts($curl, self::$viewData, $request);
        return view('products', self::$viewData);
    }

    public function item($curl, $purl)
    {
        Product::getItem($curl, $purl, self::$viewData);
        self::$viewData['categories'] = Categorie::select('ctitle', 'curl')->get()->toArray();
        return view('item', self::$viewData);
    }

    public function addToCart(Request $request)
    {
        Product::addToCart($request['pid']);
    }

    public function cart()
    {
        self::$viewData['page_title'] .= 'Cart';
        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true);
        sort($cart);
        self::$viewData['cart'] = $cart;
        return view('cart', self::$viewData);
    }

    public function clearCart()
    {
        Cart::clear();
        return redirect('shop/cart');
    }

    public function removeItem($pid)
    {
        $item_details = Cart::getContent($pid)->toJson();
        $item_array_name = json_decode($item_details, true);
        foreach ($item_array_name as $single_item) {
            Cart::remove($pid);
            Session::flash('sm', $single_item['name'] . ' removed from cart');
        }
        return redirect('shop/cart');
    }

    public function updateCart(Request $request)
    {
        Product::updateCart($request['pid'], $request['op']);
    }

    public function checkout()
    {
        if (Cart::isEmpty()) {
            return redirect('shop/cart');
        }

        if (!Session::has('user_id')) {
            return redirect('user/login?rn=shop/cart');
        }

        Order::save_new();
        return redirect('shop');
    }
}
