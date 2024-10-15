<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $user = Auth::user();
        $menus = Menu::all();
        return view('admin.index', compact('users', 'menus'));
    }

    public function show()
    {
        $users = User::query()->latest('id')->paginate(10);
        // $user = Auth::user();
        return view('admin.views.user.index', compact('users'));
    }


    public function create()
    {
        $user = Auth::user();
        return view('admin.views.user.create', compact('user'));
    }

    //Tạo mới dữ liệu
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'min:3', 'unique:users'],
            'fullname' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5'],
        ]);
        $data = $request->except('avatar');

        //Khi chưa có hình ảnh
        $path = "";
        //Khi có hình
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars');
        }
        //Đưa đường dẫn hình vào data
        $data['avatar'] = $path;

        //Insert data
        User::query()->create($data);


        return redirect()->route('user.index')->with('message', 'Thêm dữ liệu thành công');
    }

    //Xóa dữ liệu
    public function delete($id)
    {

        $user = User::find($id);
        if (auth()->user()->id == $user->id) {
            return redirect()->back()->with('message', 'Bạn không thể xóa chính mình.');
        }
        if ($user->avatar) {
            Storage::delete($user->avatar);
        }
        $user->delete();
        return back()->with('message', 'Xóa dữ liệu thành công');
    }

    //Hiển thị form cập nhật
    public function edit($id)
    {

        $user = User::find($id);

        // dd($User);
        return view('admin.views.user.edit', compact('user'));
    }

    //Cập nhật dữ liệu
    public function update(Request $request, $id)
    {
        $user = User::query()->findOrFail($id);

        $data = $request->validate([
            'username' => ['required', 'min:3', 'unique:users,username,' . $user->id],
            'fullname' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            'password_c' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $data = $request->except('avatar');


        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars');
            $data['avatar'] = $path;

            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
        }



        if (Hash::check($request->password_c, $user->password)) {

            $data['password'] = Hash::make($request->password);
        } else {

            return redirect()->back()->withErrors(['password_c' => 'Mật khẩu cũ không đúng']);
        }


        //Cập nhật dữ liệu
        $user->update($data);

        return redirect()->back()->with('message', 'Cập nhật dữ liệu thành công');
    }
}
