<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        //Hiển thị 8 bài viết mới nhất

        $menus = DB::table('menus')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('sizes', 'size_id', '=', 'sizes.id')
            ->select('menus.*', 'categories.name as namec', 'sizes.name as names')
            ->orderBy('menus.id')
            ->get();
        //Lay danh muc
        $categories = DB::table('categories')->get();

        return view('client.home', compact('menus', 'categories'));
    }
    public function detail($id)
    {
        //Hiển thị 8 bài viết mới nhất

        $menu = DB::table('menus')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('sizes', 'size_id', '=', 'sizes.id')
            ->select('menus.*', 'categories.name as namec', 'sizes.name as names')
            ->orderBy('menus.id')
            ->having('id', $id)
            ->first();

        $menus = DB::table('menus')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('sizes', 'size_id', '=', 'sizes.id')
            ->select('menus.*', 'categories.name as namec', 'sizes.name as names')
            ->orderBy('menus.id')
            ->get();
        //Lay danh muc
        $categories = DB::table('categories')->get();

        return view('client.views.dsfsf', compact('menus', 'menu', 'categories'));
    }

    public function shop()
    {
        //Hiển thị 8 bài viết mới nhất

        $menus = DB::table('menus')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('sizes', 'size_id', '=', 'sizes.id')
            ->select('menus.*', 'categories.name as namec', 'sizes.name as names')
            ->orderBy('menus.id')
            ->get();
        //Lay danh muc
        $categories = DB::table('categories')->get();

        return view('client.views.shop', compact('menus', 'categories'));
    }
}
