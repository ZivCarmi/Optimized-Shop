<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CmsController extends MainController
{
    public function dashboard()
    {
        return view('cms.dashboard');
    }

    public function orders()
    {
        self::$viewData['orders'] = Order::getOrder();
        return view('cms.orders', self::$viewData);
    }
}
