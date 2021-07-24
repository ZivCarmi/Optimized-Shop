<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Menu;
use App\Product;
use DB;

class MainController extends Controller
{
  static public $viewData = [
    'page_title' => 'Optimized | ',
  ];

  public function __construct()
  {
    // $products = DB::table('products as p')
    //   ->join('categories as c', 'c.id', '=', 'p.categorie_id')
    //   ->select('p.*', 'c.curl')
    //   ->inRandomOrder()
    //   ->limit(8)
    //   ->get();

    self::$viewData['all_categories'] = Categorie::all()->toArray();
    self::$viewData['menu'] = Menu::all()->toArray();
  }
}
