<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/trangchu/admin" class="brand-link">
    <img src="/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin All_Sore</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="/trangchu/admin" class="d-block">Quản lý</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/trangchu/admin/QLtaikhoan" class="nav-link">
                <i class="fa fa-id-card" aria-hidden="true"></i>
                <p>
                    Quản lý tài khoản
{{--                    <i class="right fas fa-angle-left"></i>--}}
                </p>
            </a>
        </li><li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa fa-bars" aria-hidden="true"> </i>
            <p>
                Danh Mục
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/trangchu/admin/menus/add" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm Danh Mục</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/trangchu/admin/menus/list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh Sách Danh Mục</p>
                </a>
            </li>

            </ul>
        </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-home" aria-hidden="true"> </i>
                    <p>
                        Sản Phẩm
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/trangchu/admin/products/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm Sản Phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trangchu/admin/products/list" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh Sách Sản Phẩm</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <p>
                        Thương hiệu
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/trangchu/admin/nhanhieu/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm thương hiệu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trangchu/admin/nhanhieu/list" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách thương hiệu</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <p>
                        Blog
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/trangchu/admin/blog/add" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm blog</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trangchu/admin/blog/list" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh Sách blog</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <p>
                        Đơn hàng
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/trangchu/admin/donhang/xacnhan" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Xác nhận đơn hàng</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trangchu/admin/donhang/layhang" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>xác nhận chuyển hàng cho shiper thành công</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trangchu/admin/donhang/danggiao" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Xác nhận giao thành công</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trangchu/admin/donhang/dagiao" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Đơn hàng đã giao</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trangchu/admin/donhang/donhuy" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Đơn đã bị hủy</p>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->

</aside>
