@extends('admin.layouts.master')
@section('active1', 'active')
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
                <li class="breadcrumb-item"><a href="{{ route('pro.index') }}">Danh sách sản phẩm</a></li>
                <li class="breadcrumb-item"><a href="#">Cập nhật sản phẩm</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Cập nhật sản phẩm</h3>
                    <div class="tile-body">
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form class="row" action="{{ route('pro.update', $menu->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="name" value="{{ $menu->name }}">
                            </div>
                            <div class="form-group  col-md-3">
                                <label class="control-label">Số lượng kho</label>
                                <input class="form-control" type="number" name="quantity" value="{{ $menu->quantity }}">
                            </div>
                            <div class="form-group  col-md-3">
                                <label class="control-label">Số lượng đã bán</label>
                                <input class="form-control" type="number" name="quantity_sold"
                                    value="{{ $menu->quantity_sold }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Giá bán</label>
                                <input class="form-control" type="text" name="price" value="{{ $menu->price }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleSelect1" class="control-label">Danh mục</label>
                                <select class="form-control" id="exampleSelect1" name="category_id">
                                    @foreach ($categories as $cate)
                                        <option value="{{ $cate->id }}"
                                            {{ $cate->id == $menu->category_id ? 'selected' : '' }}>{{ $cate->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Tiêu đề phụ</label>
                                <input class="form-control" type="text" name="subtitle" value="{{ $menu->subtitle }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Ảnh sản phẩm</label>
                                <div id="myfileupload">
                                    <input type="file" id="uploadfile" name="img" style="display: none;"
                                        onchange="previewImage(this);" />
                                </div>
                                <div id="thumbbox">
                                    <img height="300" width="300" alt="Thumb image" id="thumbimage"
                                        src="{{ asset('storage/' . $menu->img) }}" />
                                    <a class="removeimg" href="javascript:"></a>
                                </div>
                                <div id="boxchoice">
                                    <label for="uploadfile" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                                    <p style="clear:both"></p>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="descrip" id="mota">{{ $menu->descrip }}</textarea>

                            </div>
                            <button class="btn btn-save" type="submit">Lưu lại</button>
                            <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
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
