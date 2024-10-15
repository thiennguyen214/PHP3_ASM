@extends('admin.layouts.master')
@section('active2', 'active')
@section('css')

@endsection
@section('content')
    <style>
        .Choicefile {
            display: block;
            background: #14142B;
            border: 1px solid #fff;
            color: #fff;
            width: 150px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            padding: 5px 0px;
            border-radius: 5px;
            font-weight: 500;
            align-items: center;
            justify-content: center;
        }

        .Choicefile:hover {
            text-decoration: none;
            color: white;
        }

        #uploadfile,
        .removeimg {
            display: none;
        }

        #thumbbox {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .removeimg {
            height: 25px;
            position: absolute;
            background-repeat: no-repeat;
            top: 5px;
            left: 5px;
            background-size: 25px;
            width: 25px;
            /* border: 3px solid red; */
            border-radius: 50%;

        }

        .removeimg::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            content: '';
            border: 1px solid red;
            background: red;
            text-align: center;
            display: block;
            margin-top: 11px;
            transform: rotate(45deg);
        }

        .removeimg::after {
            /* color: #FFF; */
            /* background-color: #DC403B; */
            content: '';
            background: red;
            border: 1px solid red;
            text-align: center;
            display: block;
            transform: rotate(-45deg);
            margin-top: -2px;
        }
    </style>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Danh sách người dùng</a></li>
                <li class="breadcrumb-item"><b>Thêm mới người dùng</b></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Tạo mới USER</h3>
                    <div class="tile-body">

                        <form class="row" action="{{ route('user.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-3">
                                <label class="control-label">Họ và tên</label>
                                <input class="form-control" type="text" name="fullname">
                                @error('fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">UserName</label>
                                <input class="form-control" type="text" name="username">
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group  col-md-3">
                                <label class="control-label">Email</label>
                                <input class="form-control" type="email" name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label">Vai trò</label>
                                <select class="form-control" id="exampleSelect1" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="user" selected>User</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Mật khẩu</label>
                                <input class="form-control" type="password" name="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label class="control-label">Ảnh sản phẩm</label>
                                <div id="myfileupload">
                                    <input type="file" id="uploadfile" name="avatar" style="display: none;"
                                        onchange="previewImage(this);" />
                                </div>
                                <div id="thumbbox">
                                    <img height="300" width="300" alt="Thumb image" id="thumbimage"
                                        style="display: none" />
                                    <a class="removeimg" href="javascript:"></a>
                                </div>
                                <div id="boxchoice">
                                    <label for="uploadfile" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                                    <p style="clear:both"></p>
                                </div>
                            </div>
                            <button class="btn btn-save" type="submit">Lưu lại</button>
                            <a class="btn btn-cancel" href="{{ route('user.index') }}">Hủy bỏ</a>
                        </form>
                    </div>

                </div>
    </main>

    <script>
        function previewImage(input) {
            var thumbImage;
            var thumbBox;

            if (input.name === "ImageUploadLogo") {
                thumbImage = document.getElementById('thumbimageLogo');
                thumbBox = document.getElementById('thumbboxLogo');
            } else {
                thumbImage = document.getElementById('thumbimage');
                thumbBox = document.getElementById('thumbbox');
            }

            // Xóa bỏ tất cả các phần tử con trong thumbBox trước khi thêm mới
            while (thumbBox.firstChild) {
                thumbBox.removeChild(thumbBox.firstChild);
            }

            if (input.files && input.files.length > 0) {
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        // Tạo một thẻ img mới cho mỗi ảnh được chọn
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.height = 300; // Thiết lập kích thước cho ảnh
                        img.width = 300;

                        // Thêm ảnh vào thumbBox
                        thumbBox.appendChild(img);
                    };

                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
    </script>
@endsection
