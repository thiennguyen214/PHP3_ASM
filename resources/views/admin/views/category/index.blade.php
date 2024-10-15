@extends('admin.layouts.master')
@section('active1', 'active')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="{{ route('pro.index') }}">Danh sách sản phẩm</a></li>
                <li class="breadcrumb-item "><a href="#"><b>Danh sách danh mục</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">

                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th width="130">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="row element-button">

                                    <div class="col-sm-2">
                                        <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i
                                                class="fas fa-folder-plus"></i> Thêm danh mục</a>
                                    </div>

                                </div>
                                @foreach ($categories as $cate)
                                    <tr>
                                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                        <td>{{ $cate->id }}</td>
                                        <td>{{ $cate->name }}</td>
                                        <td>
                                            <a href="{{ route('cate.delete', $cate->id) }}"
                                                class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                onclick="confirmDelete(event, this)"><i class="fas fa-trash-alt"></i>
                                            </a>
                                            <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                                id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                <a href="{{ route('cate.edit', $cate->id) }}">
                                                    <i class="fas fa-edit">
                                                    </i>
                                                </a>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{-- {{ $categories->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <form class="modal-body" method="POST" action="{{ route('cate.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                                <h5>Thêm mới danh mục </h5>
                            </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nhập tên danh mục mới</label>
                            <input class="form-control" type="text" required name="name">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Danh mục sản phẩm hiện đang có</label>
                            <ul style="padding-left: 20px;">
                                @foreach ($categories as $cate)
                                    <li>{{ $cate->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <BR>
                    <button class="btn btn-save" type="submit">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <BR>
                </form>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(event, element) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

            swal({
                title: "Cảnh báo",
                text: "Bạn có chắc chắn muốn xóa không?",
                buttons: ["Hủy bỏ", "Đồng ý"],
            }).then((willDelete) => {
                if (willDelete) {
                    // Nếu người dùng đồng ý, chạy link href
                    window.location.href = element.href;
                    swal("Đã xóa thành công.!", {});
                }
            });
        }
    </script>
@endsection
