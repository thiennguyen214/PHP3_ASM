@extends('admin.layouts.master')
@section('active2', 'active')
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

                                <a class="btn btn-add btn-sm" href="{{ route('user.create') }}" title="Thêm"><i
                                        class="fas fa-plus"></i>
                                    Tạo mới user</a>
                            </div>

                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th width="20">ID</th>
                                    <th>Họ và tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Vai trò</th>
                                    <th>Ảnh</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->fullname }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td><img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->id }}"
                                                width="100px;"></td>

                                        <td>
                                            @if ($user->id != $user_au->id)
                                                <a href="{{ route('user.delete', $user->id) }}"
                                                    class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                    onclick="confirmDelete(event, this)"><i class="fas fa-trash-alt"></i>
                                                </a>
                                            @endif

                                            <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                                id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                <a href="{{ route('user.edit', $user->id) }}">
                                                    <i class="fas fa-edit">
                                                    </i>
                                                </a>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        {{ $users->links() }}
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
                    swal(
                        @if (session('message'))
                            {{ session('message') }}
                        @endif , {});
                }
            });
        }
    </script>
@endsection
