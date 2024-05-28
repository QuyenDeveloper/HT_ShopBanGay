

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
                    <span>Quên mật khẩu</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Quên mật khẩu</span></h1>
            <div class="auth-wrap">
                <div class="auth-col">
                    <h2>Nhập địa chỉ email </h2>
                    <form method="post" action="" class="login">
                        @include('web.admin.alert')
{{--                        <p>--}}
{{--                            <label for="reg_email">Email <span class="required">*</span></label><input name="email" class="email" type="email" id="reg_email" value="{{ $email ?? old('email') }}">--}}
{{--                        </p>--}}
                        <p>
                            <label for="reg_password">Password <span class="required">*</span></label><input name="password" class="password" type="password" id="reg_password">
                        </p>
                        <p>
                            <label for="reg_password">Nhập lại Password<span class="required">*</span></label><input name="password1" class="password1" type="password" id="">
                        </p>

                        <p class="auth-submit">
                            <button type="submit" ><b style="color: white">Xác nhận password</b></button>
                        </p>
                        @csrf
                    </form>
                </div>
            </div>



        </section>
    </main>
    <!-- Main Content - end -->

@endsection
