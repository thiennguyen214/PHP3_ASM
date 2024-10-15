@extends('admin.layouts.master')
@section('active1', 'active')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">

                                <a class="btn btn-add btn-sm" href="{{ route('pro.create') }}" title="Thêm"><i
                                        class="fas fa-plus"></i>
                                    Tạo mới sản phẩm</a>
                            </div>
                            <div class="col-sm-2">

                                <a class="btn btn-add btn-sm" href="{{ route('cate.index') }}" title="Thêm"><i
                                        class="fas fa-plus"></i>
                                    Danh sách danh mục</a>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th width="20">ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Mô tả</th>
                                    <th>Giá tiền</th>
                                    <th>Danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)
                                    <tr>
                                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                        <td>{{ $menu->id }}</td>
                                        <td>{{ $menu->name }}</td>
                                        <td><img src="{{ asset('storage/' . $menu->img) }}" alt="{{ $menu->id }}"
                                                width="100px;"></td>
                                        <td>{{ $menu->quantity }}</td>
                                        <td>{{ $menu->subtitle }}</td>
                                        <td>{{ $menu->price }} $</td>
                                        <td>{{ $menu->category->name }}</td>
                                        <td>
                                            <a href="{{ route('pro.delete', $menu->id) }}"
                                                class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                onclick="confirmDelete(event, this)"><i class="fas fa-trash-alt"></i>
                                            </a>
                                            <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                                id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                <a href="{{ route('pro.edit', $menu->id) }}">
                                                    <i class="fas fa-edit">
                                                    </i>
                                                </a>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{ $menus->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
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
