<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use DB;

class Order extends Model
{
    static public function getOrder()
    {
        return DB::table('users as u')
            ->join('orders as o', 'u.id', '=', 'o.user_id')
            ->select('o.*', 'u.name')
            ->get()
            ->toArray();
    }

    static public function save_new()
    {
        $cart = Cart::getContent()->toJson();
        $cart = json_decode($cart, true);
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($cart);
        $order->total = Cart::getTotal();
        $order->save();
        Session::flash('sm', 'Your order has been saved successfully!');
        Cart::clear();
    }
}
