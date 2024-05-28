@extends('web.admin.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="/trangchu/admin/thongbaoadmin">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fa fa-bell" aria-hidden="true"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Thông báo chưa đọc</span>
                                <?php
                                $thcd = 0;
                                    foreach ($tbcds as $tbcd){
                                        if($tbcd->daxem=='chưa') $thcd++;
                                    }

                                ?>
                                <span class="info-box-number" style="color: red;">{{$thcd}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="#">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-heart" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Yêu thích</span>
                            <?php
                            $yt = 0;
                            foreach ($yeuthichs as $yeuthich){
                                $yt++;
                            }

                            ?>
                            <span class="info-box-number">{{$yt}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <a href="#">
                    <div class="info-box mb-3">

                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Sản phẩm đã bán</span>
                            <?php
                            $dn = 0;
                            foreach ($dabans as $daban){
                                $dn++;
                            }

                            ?>
                            <span class="info-box-number">{{$dn}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="/trangchu/admin/QLtaikhoan">
                    <div class="info-box mb-3">

                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Tài khản khách hàng</span>
                            <?php
                            $tk = 0;
                            foreach ($taikhoans as $taikhoan){
                                $tk++;
                            }

                            ?>
                            <span class="info-box-number">{{$tk}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Báo cáo tóm tắt hằng tháng</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
{{--                                    <div class="dropdown-menu dropdown-menu-right" role="menu">--}}
{{--                                        <a href="#" class="dropdown-item">Action</a>--}}
{{--                                        <a href="#" class="dropdown-item">Another action</a>--}}
{{--                                        <a href="#" class="dropdown-item">Something else here</a>--}}
{{--                                        <a class="dropdown-divider"></a>--}}
{{--                                        <a href="#" class="dropdown-item">Separated link</a>--}}
{{--                                    </div>--}}
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Bán hàng: ../.../.... - ../.../....</strong>
                                    </p>

                                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" height="225" style="height: 180px; display: block; width: 554px;" width="692" class="chartjs-render-monitor"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Mục tiêu tháng</strong>
                                    </p>

                                    <div class="progress-group">
                                        Sản phẩm vào giỏ hàng
                                        <span class="float-right"><b>10</b>/200</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" style="width: 20%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->

                                    <div class="progress-group">
                                        Hoàn tất đơn hàng
                                        <span class="float-right"><b>310</b>/400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 75%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Số lượng đăng nhập</span>
                                        <span class="float-right"><b>480</b>/800</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 60%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
{{--                                    <div class="progress-group">--}}
{{--                                        Send Inquiries--}}
{{--                                        <span class="float-right"><b>250</b>/500</span>--}}
{{--                                        <div class="progress progress-sm">--}}
{{--                                            <div class="progress-bar bg-warning" style="width: 50%"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">$35,210.43</h5>
                                        <span class="description-text">TỔNG DOANH THU</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header">$10,390.90</h5>
                                        <span class="description-text">TỔNG CHI PHÍ</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">$24,813.53</h5>
                                        <span class="description-text">TỔNG LỢI NHUẬN</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">MỤC TIÊU HOÀN THÀNH</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- USERS LIST -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thành viên mới nhất</h3>

                                    <div class="card-tools">
                                        <span class="badge badge-danger">... thành viên mới</span>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <ul class="users-list clearfix">

                                            <li>
                                                <img src="dist/img/user1-128x128.jpg" alt="User Image">
                                                <a class="users-list-name" href="#">Tên</a>
                                                <span class="users-list-date">Ngày đk</span>
                                            </li>

                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    <a href="/trangchu/admin/QLtaikhoan">xem tất cả thành viên</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!--/.card -->

                        </div>
                        <div class="col-md-6">
                        <!-- /.col -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Đơn đặt hàng mới nhất </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>ID đặt hàng</th>
                                            <th>Tên hàng</th>
                                            <th>trạng thái</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="badge badge-danger">Delivered</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{--                            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>--}}
                                <a href="/trangchu/admin/donhang/xacnhan" class="btn btn-sm btn-secondary float-right">Xem đơn hàng</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-12">
                <!-- PRODUCT LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sản phẩm được thêm gần đây </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                    <img src="http://placehold.it/150x150" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-title">Samsung TV
                                        <span class="badge badge-danger float-right">$1800</span></a>
                                    <span class="product-description">Samsung 32" 1080p 60Hz LED Smart HDTV.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="/trangchu/admin/products/list" class="uppercase">Xem tất cả các sản phẩm</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
@endsection
