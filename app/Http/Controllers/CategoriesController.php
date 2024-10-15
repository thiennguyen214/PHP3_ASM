<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        return view('admin.views.category.index', compact('categories'));
    }

    //Tạo mới dữ liệu
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        //Insert data
        Categories::create($data);


        return redirect()->route('cate.index')->with('message', 'Thêm dữ liệu thành công');
    }

    //Xóa dữ liệu
    public function delete($id)
    {
        $menu = Categories::find($id);
        $menu->delete();
        return back()->with('message', 'Xóa dữ liệu thành công');
    }

    //Hiển thị form cập nhật
    public function edit($id)
    {
        $cate = Categories::find($id);

        // dd($menu);
        return view('admin.views.category.edit', compact('cate'));
    }

    //Cập nhật dữ liệu
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255'
        ]);
        $cate = Categories::findOrFail($id);
        $cate->update($data);

        return redirect()->back()->with('message', 'Cập nhật dữ liệu thành công');
    }
}
