<!DOCTYPE html>
<html lang="en">
<head>

    @include('web.head')

</head>
<body id="chinh">
<!-- Header - start -->
<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +64 385664736
                </li>
                <li>
                    <i class="fa fa-envelope"></i> admin@localhost.com
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="/trangchu">
                    <img src="/web/img/logo.png" alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

                    <li>
                        <a href="/trangchu/yeuthich">
                            <i class="fa fa-heart"></i>
                            <?php
                            if (\Illuminate\Support\Facades\Auth::user() != null){
                                $Yts = \App\Models\Yeuthich::where('ID_KH', '=',\Illuminate\Support\Facades\Auth::user()->id)->get();
                                $syt = 0;
                                foreach ($Yts as $Yt){
                                    $syt++;
                                }
                            }

                            ?>
                            <span class="shop-menu-ttl">Yêu thích</span>@if(\Illuminate\Support\Facades\Auth::user() != null)<span style="color: red;">({{$syt}})</span>@endif

                        </a>
                    </li>

                    <li>
                        <a href="@if(Auth::user() != null) /trangchu/tai_khoan/thong_bao/{{Auth::user()->id}}@endif  @if(Auth::user() == null) /trangchu/login @endif">
                            <i class="fa fa-bell" aria-hidden="true"></i>

                            <?php
                            if (\Illuminate\Support\Facades\Auth::user() != null){
                                $tbs = \App\Models\thongbao::where('idKH', '=', \Illuminate\Support\Facades\Auth::user()->id)->get();
                                $t=0;
                                foreach ($tbs as $tb){
                                    if($tb->daxem=='chưa') $t++;
                                }
                            }
                            ?>

                            <span class="shop-menu-ttl">Thông báo</span>@if(\Illuminate\Support\Facades\Auth::user() != null)<span style="color: red;">({{$t}})</span>@endif
                        </a>
                    </li>



                    <li>
                        <div class="h-cart">
                            <a href="/trangchu/giohang">
                                <i class="fa fa-shopping-cart"></i>
                                <?php
                                if (\Illuminate\Support\Facades\Auth::user() != null){
                                    $ghs = \App\Models\GioHang::where('ID_KH', '=',\Illuminate\Support\Facades\Auth::user()->id)->get();
                                    $g = 0;
                                    foreach ($ghs as $gh){
                                        $g++;
                                    }
                                }

                                ?>
                                <span class="shop-menu-ttl">Giỏ hàng</span>@if(\Illuminate\Support\Facades\Auth::user() != null)<span style="color: red;">({{$g}})</span>@endif

                            </a>
                        </div>
                    </li>
                    <li class="topauth">
                        <a>
                            @if(Auth::user() == null)
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            @endif
                            @if(Auth::user() != null)
                                    @if(Auth::user()->avt == null)
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    @endif
                                    @if(Auth::user()->avt != null)
                                        <div style="background-image: url('{{Auth::user()->avt}}');
                                                     width: 40px; height: 40px;
                                                     display: inline-block;
                                                     vertical-align:top;
                                                     border-radius: 50%;
                                                     background-repeat: no-repeat;
                                                     background-position: center center;
                                                     background-size: cover;
                                                     margin-top: -14px;">
                                        </div>
                                    @endif
                            @endif
                            <span class="shop-menu-ttl"> @if(Auth::user() == null)Tài khoản @endif @if(Auth::user() != null){{Auth::user()->name}} @endif </span>
                            {{--                            <span class="shop-menu-ttl">Đăng ký</span>--}}
                            {{--                            <span class="shop-menu-ttl">Đăng nhập</span>--}}
                        </a>
                        <ul class='sub-menu'>
                            @if(Auth::user() == null)
                                <li><a href="/trangchu/login"><i class="fa fa-sign-in" aria-hidden="true"></i><span class="shop-menu-ttl"> Đăng nhập </span></a></li>
                                <li><a href="/trangchu/Register"><i class="fa fa-handshake-o" aria-hidden="true"></i><span class="shop-menu-ttl"> Đăng ký </span></a></li>
                            @endif
                            @if(Auth::user() != null)
                                <li><a href="/trangchu/tai_khoan/hoso/{{Auth::user()->id}}"><i class="fa fa-cogs" aria-hidden="true"></i><span class="shop-menu-ttl"> Cài đặt tài khoản </span></a></li>
                                <li><a href="/trangchu/tai_khoan/don_mua/{{Auth::user()->id}}/1"><i class="fa fa-file-text-o" aria-hidden="true"></i><span class="shop-menu-ttl"> Đơn mua </span></a></li>
                                @if(Auth::user()->id == 1)
                                    <li><a href="/trangchu/admin/users/login" target="_blank"><i class="fa fa-lock" aria-hidden="true"></i><span class="shop-menu-ttl"> Admin </span></a></li>
                                @endif
                                <li><a href="/trangchu/logout"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="shop-menu-ttl"> Đăng xuất </span></a></li>
                            @endif


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn"><span>Tất cả</span> doanh mục</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="/trangchu/sanpham/thuvien/Nam">
                                Nam
                            </a>
{{--                            <i class="fa fa-angle-right"></i>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="catalog-list.html">--}}
{{--                                        Knitwear--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </li>

                        <li>
                            <a href="/trangchu/sanpham/thuvien/Nu">
                                Nữ
                            </a>
{{--                            <i class="fa fa-angle-right"></i>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="catalog-list.html">--}}
{{--                                        Jackets & Blazers--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

                        </li>
                        <li>
                            <a href="/trangchu/sanpham/thuvien/Tre_em">
                                Trẻ em
                            </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul class="treem">
                                        <li>
                                            <a href="/trangchu/sanpham/thuvien/6_12_nam">
                                                Thanh thiếu niên(6-12)_trẻ Nam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/trangchu/sanpham/thuvien/6_12_nu">
                                                Thanh thiếu niên(6-12)_trẻ Nữ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/trangchu/sanpham/thuvien/3_6_nam">
                                                Trẻ em(3-6)_trẻ Nam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/trangchu/sanpham/thuvien/3_6_nu">
                                                Trẻ em(3-6)_trẻ Nữ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/trangchu/sanpham/thuvien/1_3_nam">
                                                Trẻ nhỏ & trẻ mới biết đi(1-3)_tre Nam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/trangchu/sanpham/thuvien/1_3_nu">
                                                Trẻ nhỏ & trẻ mới biết đi(1-3)_tre Nữ
                                            </a>
                                        </li>
                                    </ul>
                        </li>
                    </ul>
{{--                    </li>--}}

{{--                    </ul>--}}
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="/trangchu" >
                            Trang chủ
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/trangchu/sanpham/thuvien" class="trang">
                            SẢN PHẨM <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/trangchu/sanpham/thuvien/Nam">
                                    Nam
                                </a>
                            </li>
                            <li>
                                <a href="/trangchu/sanpham/thuvien/Nu">
                                    Nữ
                                </a>
                            </li>
                            <li>
                                <a href="/trangchu/sanpham/thuvien/Tre_em">
                                    Trẻ em
                                </a>

                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/trangchu/phukien">
                            PHỤ KIỆN {{--<i class="fa fa-angle-down"></i>--}}
                        </a>
{{--                        <ul class="sub-menu">--}}
{{--                            <li>--}}
{{--                                <a href="product.html">--}}
{{--                                    Product - Style 1 (Slider)--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="product-2.html">--}}
{{--                                    Product - Style 2 (Scroll)--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </li>
                    <li>
                        <a href="/trangchu/cacYeuTo">
                            CÁC YẾU TỐ
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/trangchu/blog">
                            Blog {{-- <i class="fa fa-angle-down"></i>--}}
                        </a>
{{--                        <ul class="sub-menu">--}}
{{--                            <li>--}}
{{--                                <a href="blog.html">--}}
{{--                                    Blog - Style 1--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="blog-2.html">--}}
{{--                                    Blog - Style 2--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="post.html">--}}
{{--                                    Single Post--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </li>
                    <li class="menu-item-has-children">
                        <a  class="trang">
                            TRANG <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/trangchu/lienlac">
                                    LIÊN LẠC
                                </a>
                            </li>
                            <li>
                                <a href="/trangchu/giohang">
                                    GIỎ HÀNG
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="auth.html">--}}
{{--                                    Đăng ký / Đăng nhập--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="compare.html">--}}
{{--                                    SO SÁNH--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="/trangchu/yeuthich">
                                    YÊU THÍCH
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" method="POST" action="/trangchu/timsanpham">
                        <input type="text" name="timKiemSP" placeholder="Tìm Kiếm Sản Phẩm...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        @csrf
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->


<!-- Main Content - start -->
    @yield('content')
<!-- Main Content - end -->


<!-- Footer - start -->
    @include('web.footer')

</body>
</html>
