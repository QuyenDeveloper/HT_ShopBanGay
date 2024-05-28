

@extends('web.main')

@section('content')

    <!-- Main Content - start -->
    <main>
        <section class="container stylization maincont">


            <ul class="b-crumbs">
                <li>
                    <a href="trangchu">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <span>Đăng ký</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Đăng ký</span></h1>
            <div class="auth-wrap">

                <div class="auth-col">
                    <h2>Đăng ký</h2>
                    <form method="post" class="register" id="from_dangKy">
                        @include('web.admin.alert')
                        <p>
                            <label for="reg_name">Tên <span class="required">*</span></label><input name="name" type="name" id="">
                        </p>
                        <p>
                            <label for="reg_email">Email <span class="required">*</span></label><input name="email" class="email" type="email" id="reg_email">
                        </p>
                        <p>
                            <label for="reg_password">Password <span class="required">*</span></label><input name="password" class="password" type="password" id="reg_password">
                        </p>
                        <p>
                            <label for="reg_password">Nhập lại Password<span class="required">*</span></label><input name="password1" class="password1" type="password" id="">
                        </p>
                        <p class="auth-submit">
                            <button type="submit"><b style="color: white">Đăng ký</b></button>
                        </p>
                        @csrf
                    </form>
                </div>
            </div>



        </section>
    </main>
    <!-- Main Content - end -->

@endsection
