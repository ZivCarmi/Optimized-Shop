<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Menu extends Model
{
    static public function getMenu($url)
    {
        $menu_content = DB::table('menus as m')
            ->join('contents as c', 'c.menu_id', '=', 'm.id')
            ->where('m.url', '=', $url)
            ->select('m.link')
            ->get()
            ->toArray();

        return $menu_content;
    }

    static public function save_new($request)
    {
        $menu = new self();
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'Menu saved Successfully!');
    }

    static public function update_menu($request, $id)
    {
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'Menu updated Successfully');
    }
}
