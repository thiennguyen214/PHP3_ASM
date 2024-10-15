<div class="app-sidebar__user">
    <img class="app-sidebar__user-avatar" src="{{ asset('storage/' . $user_au->avatar) }}" width="50px"
        alt="User Image" />
    <div>
        <p class="app-sidebar__user-name"><b>{{ $user_au->fullname }}</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
    </div>
</div>
<hr />
<ul class="app-menu">
    <li>
        <a class="app-menu__item haha" href="{{ route('admin') }}"><i class="app-menu__icon bx bx-cart-alt"></i>
            <span class="app-menu__label">POS Bán Hàng</span></a>
    </li>
    <li>
        <a class="app-menu__item @yield('active1')" href="{{ route('pro.index') }}"><i
                class="app-menu__icon bx bx-purchase-tag-alt"></i><span class="app-menu__label">Quản lý sản
                phẩm</span></a>
    </li>
    <li>
        <a class="app-menu__item @yield('active2')" href="{{ route('user.index') }}"><i
                class="app-menu__icon bx bx-user-voice"></i><span class="app-menu__label">Quản lý khách hàng</span></a>
    </li>
    <li>
        <a class="app-menu__item" href="table-data-oder.html"><i class="app-menu__icon bx bx-task"></i><span
                class="app-menu__label">Quản lý đơn hàng</span></a>
    </li>

    <li>
        <a class="app-menu__item" href="quan-ly-bao-cao.html"><i class="app-menu__icon bx bx-pie-chart-alt-2"></i><span
                class="app-menu__label">Báo cáo doanh
                thu</span></a>
    </li>
</ul>
