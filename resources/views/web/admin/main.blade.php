
<!DOCTYPE html>
<html lang="en">
<head>
  @include('web.admin.head')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/trangchu/admin/thongbaoadmin">
                    <?php
                        $tbs = \App\Models\thongbao::where('idKH', '=', 1)->get();
                        $t=0;
                    foreach ($tbs as $tb){
                        if($tb->daxem=='chưa') $t++;
                    }

                    ?>
                    <i class="fa fa-bell" aria-hidden="true"></i>
                     Thông báo<span style="color: red;">{{$t}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!-- /.navbar -->




    @include('web.admin.sidebar')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary mt-3">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>

                    @include('web.admin.alert')
                <div class=" mt-1">

                    @yield('content')

                </div>

                </div>
                <!-- /.card -->
                </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>





    </div>
<!-- ./wrapper -->
 @include('web.admin.footer')
</body>
</html>
