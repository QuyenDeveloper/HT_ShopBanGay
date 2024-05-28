

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
                    <form method="post" class="login">
                        @include('web.admin.alert')
                        <p>
                            <label for="username">E-mail <span class="required">*</span></label><input name="email" type="text" id="username" value="{{old('email')}}">
                        </p>

                        <p class="auth-submit">
                            <button type="submit" ><b style="color: white">Gửi liên kết password</b></button>
                        </p>
                        @csrf
                    </form>
                </div>
            </div>



        </section>
    </main>
    <!-- Main Content - end -->

@endsection
