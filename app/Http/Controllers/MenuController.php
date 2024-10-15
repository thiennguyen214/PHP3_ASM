<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function menu()
    {


        $menus = DB::table('menus')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('menus.*', 'categories.name as namec')
            ->orderBy('menus.id')
            ->get();

        $categories = DB::table('categories')->get();

        return view('client.views.menu', compact('menus', 'categories'));
    }

    public function index()
    {
        $menus = Menu::query()->latest('id')->paginate(10);
        $categories = Categories::all();

        return view('admin.views.product.index', compact('categories', 'menus'));
    }
    public function create()
    {
        $categories = Categories::all();

        return view('admin.views.product.create', compact('categories'));
    }

    //Tạo mới dữ liệu
    public function store(Request $request)
    {
        $data = $request->except('img');

        //Khi chưa có hình ảnh
        $path = "";
        //Khi có hình
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('imgs');
        }
        //Đưa đường dẫn hình vào data
        $data['img'] = $path;

        //Insert data
        Menu::query()->create($data);


        return redirect()->route('pro.index')->with('message', 'Thêm dữ liệu thành công');
    }

    //Xóa dữ liệu
    public function delete($id)
    {
        $menu = Menu::find($id);
        Storage::delete($menu->img);
        $menu->delete();
        return back()->with('message', 'Xóa dữ liệu thành công');
    }

    //Hiển thị form cập nhật
    public function edit($id)
    {
        $categories = Categories::all();
        $menu = Menu::find($id);

        // dd($menu);
        return view('admin.views.product.edit', compact('menu', 'categories'));
    }

    //Cập nhật dữ liệu
    public function update(Request $request, $id)
    {
        $data = $request->except('img');
        $menu = Menu::query()->findOrFail($id);

        //Nếu cập nhật ảnh
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('imgs');
            $data['img'] = $path;
            //Xóa ảnh cũ
            Storage::delete($menu->img);
        }

        //Cập nhật dữ liệu
        $menu->update($data);

        return redirect()->back()->with('message', 'Cập nhật dữ liệu thành công');
    }
}
