
@extends('web.main')


@section('content')

    <style>
        /*.fa{*/
        /*    font-size: 20px;*/
        /*}*/
        .fa-user-o, .fa-list-alt{
            color: #0c84ff;
        }
        .fa-bell-o{
            color: #f37d7d;
        }
        .super_menu{
            padding-left: 25px;
            display: none;
        }
        .super_menu1{
            padding-left: 25px;
        }
        .li {
            padding-top: 15px;
        }
        .li .a:hover{
            color: #0c84ff;
        }
        .anh_name img{
            /*width: auto;*/
            border-radius: 50%;
        }
        .anh_name .tenacc{
            margin: 7px auto;
        }
        .anh_name .tenacc .ten{
            font-size: 15px;
            word-wrap: break-word;
        }
        .anh_name .tenacc .suahoso{
            color: #8c8c8c;
        }
        .section-cont{
            /*border: 1px solid #6e6e6e;*/
            padding: 20px 20px;
            min-height: 300px;
            box-shadow: 0px -1px 5px 3px #999 inset;
            border-radius: 5px;
        }
        .section-sb .avt{
            width: 55px;
            height: 55px;
            display: inline-block;
            padding: 5px;
            margin-left: 10px;
            vertical-align:top;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>

    <!-- Main Content - start -->
    <main style="margin-bottom: 40px;">
        <section class="container">

            <ul class="b-crumbs">
                <li>
                    <a href="/trangchu">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="">
                        Tài khoản
                    </a>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Tài khoản</span></h1>
            <!-- Catalog Sidebar - start -->
            <div style=" background: #f8fafc;">
            <div class="section-sb">

                <!-- Catalog Categories - end -->

                <div>
                    <div class="row anh_name">
                        <div class="avt col-sm-4" style="background-image: url('@if($users->avt != null) {{$users->avt}} @endif  @if($users->avt == null) /web/imgs/pixlr-bg-result.png @endif')">
{{--                            <img class="col-sm-4 col-xl-4" @if($users->avt != null) src="{{$users->avt}}" @endif  @if($users->avt == null) src="/web/imgs/pixlr-bg-result.png" @endif alt="Aspernatur excepturi rem" />--}}
                        </div>
                        <div class="col-sm-8 tenacc" >
                            <span class="ten"><b>{{$users->email }}</b></span><br>
                            <span class="suahoso"><a href="/trangchu/tai_khoan/hoso/{{Auth::user()->id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa hồ sơ</a></span>
                        </div>
                    </div>
                </div>
                <!-- Filter - start -->
                <div >{{--class="section-filter"--}}
                    <nav>
                        <ul class="ul">
                            <li class="li">
                                <a class="a" href="/trangchu/tai_khoan/hoso/{{Auth::user()->id}}" id="TKCT"><i class="fa fa-user-o" aria-hidden="true"></i> Tài Khoản Của Tôi</a>
                                <div class="super_menu1" id="sup_TKCT">
                                    <ul class="ul">
                                        <li class="li">
                                           <a class="a" href="/trangchu/tai_khoan/hoso/{{Auth::user()->id}}" @if($action == 'hoso') style="color: #0c84ff;" @endif>Hồ sơ </a>
                                        </li>
                                        <li class="li">
                                           <a class="a" href="/trangchu/tai_khoan/ngan_hang/{{Auth::user()->id}}" @if($action == 'ngan_hang') style="color: #0c84ff;" @endif>Ngân hàng</a>
                                        </li>
                                        <li class="li">
                                           <a class="a" href="/trangchu/tai_khoan/daichi/{{Auth::user()->id}}" @if($action == 'diachi') style="color: #0c84ff;" @endif>Địa chỉ</a>
                                        </li>
                                        <li class="li">
                                           <a class="a" href="/trangchu/tai_khoan/doi_MK/{{Auth::user()->id}}" @if($action == 'DMK') style="color: #0c84ff;" @endif>Đổi mật khẩu</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="li">
                                <a class="a" href="/trangchu/tai_khoan/don_mua/{{Auth::user()->id}}/1" id="DM" @if($action == 'DM') style="color: #0c84ff;" @endif><i class="fa fa-list-alt" aria-hidden="true"></i> Đơn Mua</a>
{{--                                <div class="super_menu" id="sup_DM">--}}
{{--                                    <ul class="ul">--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </li>
                            <li class="li">
                                <a class="a" href="/trangchu/tai_khoan/thong_bao/{{Auth::user()->id}}" id="TB" @if($action == 'TB') style="color: #0c84ff;" @endif><i class="fa fa-bell-o" aria-hidden="true"></i> Thông Báo</a>
{{--                                <div class="super_menu" id="sup_TB">--}}
{{--                                    <ul class="ul">--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="li">--}}
{{--                                            <a class="a" href="">123</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </li>

                        </ul>
                    </nav>
                </div>
<script>

    document.getElementById('TKCT').onclick = function () {
        document.getElementById('sup_TKCT').style.display = "block";
        // document.getElementById('sup_TB').style.display = "none";
        // document.getElementById('sup_DM').style.display = "none";
    };
    document.getElementById('DM').onclick = function () {
        document.getElementById('sup_TKCT').style.display = "none";
        // document.getElementById('sup_TB').style.display = "none";
        // document.getElementById('sup_DM').style.display = "block";
    };
    document.getElementById('TB').onclick = function () {
        document.getElementById('sup_TKCT').style.display = "none";
        // document.getElementById('sup_TB').style.display = "block";
        // document.getElementById('sup_DM').style.display = "none";
    };
</script>
            </div>

{{--            </div>--}}
            <!-- Filter - end -->
{{--            </div>--}}
            <!-- Catalog Sidebar - end -->
            <!-- Catalog Items | Gallery V1 - start -->
            <div class="section-cont" >
                <div class="prod-items section-items" style="word-wrap: break-word;">
                    @yield('taikhoang')
                </div>
            </div>
            </div>
            <!-- Catalog Items | Gallery V1 - end -->

            <!-- Quick View Product - start -->
        {{--            <div class="qview-modal">--}}
        {{--                <div class="prod-wrap">--}}
        {{--                    <a href="product.html">--}}
        {{--                        <h1 class="main-ttl">--}}
        {{--                            <span>Reprehenderit adipisci</span>--}}
        {{--                        </h1>--}}
        {{--                    </a>--}}
        {{--                    <div class="prod-slider-wrap">--}}
        {{--                        <div class="prod-slider">--}}
        {{--                            <ul class="prod-slider-car">--}}
        {{--                                <li>--}}
        {{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">--}}
        {{--                                        <img src="http://placehold.it/500x525" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">--}}
        {{--                                        <img src="http://placehold.it/500x591" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">--}}
        {{--                                        <img src="http://placehold.it/500x525" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                        <div class="prod-thumbs">--}}
        {{--                            <ul class="prod-thumbs-car">--}}
        {{--                                <li>--}}
        {{--                                    <a data-slide-index="0" href="#">--}}
        {{--                                        <img src="http://placehold.it/500x525" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-slide-index="1" href="#">--}}
        {{--                                        <img src="http://placehold.it/500x591" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-slide-index="2" href="#">--}}
        {{--                                        <img src="http://placehold.it/500x525" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-slide-index="3" href="#">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-slide-index="4" href="#">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-slide-index="5" href="#">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <a data-slide-index="6" href="#">--}}
        {{--                                        <img src="http://placehold.it/500x722" alt="">--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <div class="prod-cont">--}}
        {{--                        <p class="prod-actions">--}}
        {{--                            <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>--}}
        {{--                            <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>--}}
        {{--                        </p>--}}
        {{--                        <div class="prod-skuwrap">--}}
        {{--                            <p class="prod-skuttl">Color</p>--}}
        {{--                            <ul class="prod-skucolor">--}}
        {{--                                <li class="active">--}}
        {{--                                    <img src="img/color/blue.jpg" alt="">--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <img src="img/color/red.jpg" alt="">--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <img src="img/color/green.jpg" alt="">--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <img src="img/color/yellow.jpg" alt="">--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <img src="img/color/purple.jpg" alt="">--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                            <p class="prod-skuttl">Sizes</p>--}}
        {{--                            <div class="offer-props-select">--}}
        {{--                                <p>XL</p>--}}
        {{--                                <ul>--}}
        {{--                                    <li><a href="#">XS</a></li>--}}
        {{--                                    <li><a href="#">S</a></li>--}}
        {{--                                    <li><a href="#">M</a></li>--}}
        {{--                                    <li class="active"><a href="#">XL</a></li>--}}
        {{--                                    <li><a href="#">L</a></li>--}}
        {{--                                    <li><a href="#">4XL</a></li>--}}
        {{--                                    <li><a href="#">XXL</a></li>--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="prod-info">--}}
        {{--                            <p class="prod-price">--}}
        {{--                                <b class="item_current_price">$238</b>--}}
        {{--                            </p>--}}
        {{--                            <p class="prod-qnt">--}}
        {{--                                <input type="text" value="1">--}}
        {{--                                <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>--}}
        {{--                                <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>--}}
        {{--                            </p>--}}
        {{--                            <p class="prod-addwrap">--}}
        {{--                                <a href="#" class="prod-add">Add to cart</a>--}}
        {{--                            </p>--}}
        {{--                        </div>--}}
        {{--                        <ul class="prod-i-props">--}}
        {{--                            <li>--}}
        {{--                                <b>SKU</b> 05464207--}}
        {{--                            </li>--}}
        {{--                            <li>--}}
        {{--                                <b>Manufacturer</b> Mayoral--}}
        {{--                            </li>--}}
        {{--                            <li>--}}
        {{--                                <b>Material</b> Cotton--}}
        {{--                            </li>--}}
        {{--                            <li>--}}
        {{--                                <b>Pattern Type</b> Print--}}
        {{--                            </li>--}}
        {{--                            <li>--}}
        {{--                                <b>Wash</b> Colored--}}
        {{--                            </li>--}}
        {{--                            <li>--}}
        {{--                                <b>Style</b> Cute--}}
        {{--                            </li>--}}
        {{--                            <li>--}}
        {{--                                <b>Color</b> Blue, Red--}}
        {{--                            </li>--}}
        {{--                            <li><a href="#" class="prod-showprops">All Features</a></li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <!-- Quick View Product - end -->
        </section>
    </main>
    <!-- Main Content - end -->

@endsection
