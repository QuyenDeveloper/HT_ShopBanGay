

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
                    <span>Đăng nhập</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Đăng nhập</span></h1>
            <div class="auth-wrap">
                <div class="auth-col">
                    <h2>Đăng nhập</h2>
                    <form method="post" class="login">
                        @include('web.admin.alert')
                        <p>
                            <label for="username">E-mail <span class="required">*</span></label><input name="email" type="text" id="username">
                        </p>
                        <p>
                            <label for="password">Password <span class="required">*</span></label><input name="password" type="password" id="password">
                        </p>
                        <p class="auth-submit">
                            <button type="submit" ><b style="color: white">Đăng nhập</b></button>
                            <input type="checkbox" name="rememberme" id="rememberme" value="forever">
                            <label for="rememberme">Nhớ đăng nhập</label>
                        </p>
                        <p class="auth-lost_password">
                            <a href="/trangchu/quenMK">Quên Mật khẩu?</a> <br>
                            <a href="/trangchu/Register">Tôi chưa có tài khoản!</a> <br>
                            <a href="/trangchu/admin/users/login"  target="_blank" >Admin</a>
                        </p>
                        @csrf
                    </form>
                </div>
{{--                <div class="auth-col">--}}
{{--                    <h2>Đăng ký</h2>--}}
{{--                    <form method="post" class="register" id="from_dangKy">--}}
{{--                        <p>--}}
{{--                            <label for="reg_name">Tên <span class="required">*</span></label><input name="name" type="name" id="">--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <label for="reg_email">Email <span class="required">*</span></label><input name="email" class="email" type="email" id="reg_email">--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <label for="reg_password">Password <span class="required">*</span></label><input name="password" class="password" type="password" id="reg_password">--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <label for="reg_password">Nhập lại Password<span class="required">*</span></label><input name="password1" class="password1" type="password" id="">--}}
{{--                        </p>--}}
{{--                        <p class="auth-submit">--}}
{{--                            <button onclick="DangKy()" type="button" style="background: #14144b;" ><b style="color: white">Đăng ký</b></button>--}}
{{--                        </p>--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>



        </section>
    </main>
    <!-- Main Content - end -->

@endsection
