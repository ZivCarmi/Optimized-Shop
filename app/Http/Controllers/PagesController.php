<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ContactRequest;
use App\User;
use App\Content;
use App\Menu;
use App\Categorie;
use DB;
use App\Message;

class PagesController extends MainController
{
    public function home()
    {
        $products = DB::table('products as p')
            ->join('categories as c', 'c.id', '=', 'p.categorie_id')
            ->select('p.*', 'c.curl')
            ->inRandomOrder()
            ->limit(8)
            ->get();

        self::$viewData['items'] = $products;
        self::$viewData['categories'] = Categorie::select('curl', 'cimage', 'ctitle')->inRandomOrder()->limit(4)->get()->toArray();
        self::$viewData['page_title'] .= 'Home Page';
        return view('home', self::$viewData);
    }

    public function about()
    {
        self::$viewData['page_title'] .= 'About';
        return view('about', self::$viewData);
    }

    public function contact()
    {
        self::$viewData['page_title'] .= 'Contact';
        return view('contact', self::$viewData);
    }

    public function postContact(ContactRequest $request)
    {
        Message::save_new($request);
        self::$viewData['success_msg'] = true;
        return view('contact', self::$viewData);
    }

    public function content($url)
    {
        self::$viewData['contents'] = Content::getContent($url);
        self::$viewData['menu_content'] = Menu::getMenu($url);
        self::$viewData['page_title'] .= !empty(self::$viewData['contents'][0]->title) ? self::$viewData['contents'][0]->title : 'Site Content';
        return view('content', self::$viewData);
    }
}
