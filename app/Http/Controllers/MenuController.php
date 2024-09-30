<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        

        $menus = DB::table('menus')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->join('sizes', 'size_id', '=', 'sizes.id')
            ->select('menus.*', 'categories.name as namec', 'sizes.name as names')
            ->orderBy('menus.id')
            ->get();
        
        $categories = DB::table('categories')->get();

        return view('client.views.menu', compact('menus', 'categories'));
    }
}
