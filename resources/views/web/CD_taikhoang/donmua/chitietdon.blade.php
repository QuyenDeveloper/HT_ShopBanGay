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
                <a href="/trangchu" class="row" style="width: 500px;">
                    <img src="/web/img/logo.png" class="col-sm-6" style="border-right:2px solid #178dc7; padding-right: 15px; " alt="AllStore - MultiConcept eCommerce Template"> <span class="col-sm-6" style="color: #178dc7  ; font-size: 28px; margin-top: 5px;">Chi tiết đơn</span>
                </a>
            </div>
            <div class="shop-menu">
                <ul>
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

    <!-- Topmenu - end -->

</header>
<!-- Header - end -->


<!-- Main Content - start -->
<style>
    .pr-0{
        padding-right: 0;
    }
    p-0{
        padding: 0;
    }
    .pd{
        padding: 20px 40px 20px 40px;
    }
    .pd-120{
        padding: 20px 70px 20px 40px;
    }
    .borderall, header{
        background-color: #f8fafc;
        border: 1px solid #e0e4f6;
    }
    .bordertop{
        background-color: #f8fafc;
        border-top: 1px solid #e0e4f6;
    }
    .m-0{
        margin: 0;
    }
    .mt-20{
        margin: 20px 0 0 0;
    }
    .mb-20{
        margin-bottom: 20px;
    }
    .thaydoi{
        color: blue;
    }
    .prod-head{
        text-align: center;
    }
    .loinhanInput{
        border: 1px solid #e0e4f6;
        width: 200px;
        height: 30px;
        margin-left: 4px;
    }
    .cl-red {
        color: red;
    }
    .fw-bold{
        font-weight: bold;
    }
    .dcnh #diachi{
        padding-left: 50px;
    }
    .giaTong{
        font-size: 20px;
    }
    .fl-r{
        float: right;
    }
    .btn{
        height: 35px;
        color: white;
        font-weight: bold;
        background-color: #ff423c;
    }
    .btn:hover{
        background-color: #ff7f7f;
    }
    .pttt {
        padding-top: 5px;
    }
    .dc{
        width: 100%;height: auto;
        margin-top: 15px;
        padding: 10px 0px;
    }
</style>



<script src="https://kit.fontawesome.com/101977444a.js" crossorigin="anonymous"></script>




<!-- Main Content - start -->
<main>
    <script src="https://kit.fontawesome.com/101977444a.js" crossorigin="anonymous"></script>

    <section class="container">

        <form method="post"  action="/trangchu/XL_dathang">
            <!--Địa chỉ nhận hành-->
            <input type="hidden" name="idKH" value="{{Auth::user()->id}}">
            <div class="pd borderall dcnh">
                <span class="cl-red" style="font-size: 20px;"><i class="fa fa-map-marker-alt" style="padding-right: 10px;"></i>Địa Chỉ Nhận Hàng</span><br>

                <select class="dc" name="diachi" id="diachi" data-placeholder="Manufacturer country Decoration" >
                    <option style="color: red;" value="-1" >Chọn địa chỉ</option>
                    @foreach($diachis as $diachi)
                        <option value="{{$diachi->id}}" @if($sanphams->idDchi == $diachi->id) selected @endif>
                            {{$diachi->hoten . '(' . $diachi->sdt. ')' .' - '. $diachi->daichi . ' - Địa chỉ: '.$diachi->loaiDC}}
                        </option>
                    @endforeach
                </select>

                @if (session()->has('diachi'))
                    <div style="color: red;">
                        {{ session()->get('diachi') }}
                    </div>
                @endif
            </div>
            <!--Hết địa chỉ nhận hành-->

            <!--Liệt kê sản phẩm mua-->
            <div class="borderall pd mt-20">

                <div class="cart-items-wrap">
                    <table class="cart-items" >
                        <thead>
                        <tr>
                            <td class="cart-image" colspan="3">Sản phẩm</td>
                            <td class="cart-price">Giá bán</td>
                            <td class="cart-quantity">Số lượng</td>
                            <td class="cart-summ">Tổng giá</td>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $giaTC=0; ?>
                        @foreach($donmuas as $donmua)
                            @if($sanphams->idDMua == $donmua->idDMua)
                                <tr>
                                    {{--                                        <input type="hidden" id="idSP_GH-{{$sanpham->id}}" name="idSP_GH-{{$sanpham->id}}" value="{{$sanpham->id}}">--}}
                                    <td class="cart-image">
                                        <a href="/trangchu/sanpham/NDsanphan/{{$donmua->ID_SP}}">
                                            @foreach($khoSPs as $khoSP)
                                                @if($khoSP->id == $donmua->ID_SP)
                                                    <img src="{{$khoSP->anh1}}" alt="Similique delectus totam">
                                                @endif
                                            @endforeach
                                        </a>
                                    </td>
                                    <td class="cart-ttl">
                                        @foreach($khoSPs as $khoSP)
                                            @if($khoSP->id == $donmua->ID_SP)
                                                <a href="/trangchu/sanpham/NDsanphan/{{$donmua->ID_SP}}">{{$khoSP->name}}</a>
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        <?php
                                        if($donmua->sizeSP_kh == 0){
                                            $Size = 'FreeSize';
                                        }else{
                                            $Size = $donmua->sizeSP_kh;
                                        }

                                        ?>
                                        <p style="color: #a2a2a2">Size: {{$Size}}</p>
                                    </td>

                                    <td class="cart-price">
                                        @foreach($khoSPs as $khoSP)
                                            @if($khoSP->id == $donmua->ID_SP)
                                                <?php $return = true ?>
                                                @if($return && $khoSP->money_sale > 0)
                                                    <p>{{$khoSP->money_sale}} đ</p>
                                                    <?php $return = false ?>
                                                @endif
                                                @if($return)
                                                    <p>{{$khoSP->money}} đ</p>
                                                @endif
                                            @endif
                                        @endforeach

                                    </td>

                                    <td class="cart-quantity row">
                                        <b class="cart-qnt col-sm-auto">
                                            <input {{--name="SLSP_KH-{{$sanpham->id}}" id="SLSP_KH-{{$sanpham->id}}"--}}  type="text" value="{{$donmua->SLSP_KH}}" style="width: 60px;" readonly>{{--readonly--}}
                                        </b>
                                    </td>

                                    <td class="cart-summ">
                                        @foreach($khoSPs as $khoSP)
                                            @if($khoSP->id == $donmua->ID_SP)
                                                <?php
                                                if ($khoSP->money_sale > 0 ){
                                                    $gia = $khoSP->money_sale * $donmua->SLSP_KH;
                                                }else{
                                                    $gia = $khoSP->money * $donmua->SLSP_KH;
                                                }

                                                ?>
                                                <b>{{$gia}} đ</b>
                                                <?php $giaTC = $giaTC + $gia ?>
                                            @endif
                                        @endforeach
                                        {{--                                <b>$220</b>--}}
                                        {{--                                <p class="cart-forone">unit price <b>$220</b></p>--}}
                                    </td>

                                </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
            <!-- hết Liệt kê sản phẩm mua-->

            <!--Tông kết tổng tiền-->
            <div class="row borderall m-0">

                <div class="col-md-4 pd">
                    <label for="loinhan">Lời nhắn: </label>
                    <input class="loinhanInput" type="text" name="loinhan" id="loinhan" placeholder="Lưu ý cho Người bán ..." value="{{$sanphams->loinhan }}" readonly>
                </div>

                {{--                <div class="col-md-8 row pd-120" style="border-left: 1px solid #e0e4f6;">--}}
                {{--                    <span class="col-md-4" style="color: #17d9af;font-weight: bold;">Đơn vị vận chuyển :</span><span class="col-md-1">Nhanh</span>--}}
                {{--                    <a class="col-md-5 text-center thaydoi" href="#">Thay đổi</a>--}}
                {{--                    <span style="float: right;">200000d</span>--}}
                {{--                    <div class="col-md-4"></div>--}}
                {{--                    <br>--}}
                {{--                    <span class="col-md-8" id="anhHuong">Nhận hàng vào 10 Th11 - 13 Th11 <br>(Do ảnh hưởng của Covid-19, thời gian giao hàng có thể dài hơn dự kiến từ 1-3 ngày)</span>--}}
                {{--                </div>--}}
            </div>
            <!--hết Tông kết tổng tiền-->

            <!--Tổng kết tổng tiền sau khi dùng phiếu giảm giá-->
            {{--            <div class="borderall pd-120 mt-20">--}}
            {{--                <i class="fas fa-ticket-alt cl-red"></i><span class="ml-10">AllStore Voucher</span>--}}
            {{--                <span class="fw-bold">12312312321(ma voucher)</span>--}}
            {{--                <a class="thaydoi fl-r" href="#">Chọn Voucher</a>--}}
            {{--            </div>--}}

            <div class="borderall mt-20 mb-20">
                <div class="pd-120">
                    <span class="fw-bold">Phương thức thanh toán</span>
                    <span class="fl-r">Thanh toán khi nhận hàng <a class="thaydoi" href="#">Thay đổi</a></span>
                </div>
                <div class="row bordertop pd m-0 pr-0">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 row m-0 pttt">
                        <label class="col-md-8 fw-bold" for="tongHang" style="text-align: right;">Tổng tiền hàng: </label>
                        <span class="col-md-4 prod-head" id="tongHang" style="text-align: right;">{{$giaTC}} đ</span>

                        {{--                        <label class="col-md-8 fw-bold" for="phiVCFinal" style="text-align: right;">Phí vận chuyển: </label>--}}
                        {{--                        <span class="col-md-4 prod-head" id="phiVCFinal"  style="text-align: right;">aaaa4(tien)</span>--}}

                        <label class="col-md-8 fw-bold" for="giaTongFinal" style="text-align: right;">Tổng thanh toán: </label>
                        <h3 class="col-md-4 prod-head giaTong cl-red" id="giaTongFinal"  style="text-align: right;">
                            <span>{{$giaTC}} đ</span>
                        </h3>

                    </div>
                </div>

                <!--Tổng kết tổng tiền sau khi dùng phiếu giảm giá-->
                <!--Submit-->
                <div class="row bordertop pd-120 m-0">
                    <span>Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo <a class="thaydoi" href="#">Điều khoản AllStore</a></span><br>
                    @if($vt == 'xn' || $vt == 'cld' || $vt == 'dg' || $vt == 'dn')
                    <a href="#" ><input type="button" class="col-md-2 fl-r btn" style="margin-right: 10px;" id="datHangBtn" value="Liên hệ"></a>
                    @endif
                    @if($vt == 'xn' || $vt == 'cld')
                    <a href="/trangchu/tai_khoan/huy_don/{{$sanphams->idDMua}}" ><input type="button" class="col-md-2 fl-r btn" style="margin-right: 10px;" id="datHangBtn" value="Hủy đơn"></a>
                    @endif
                    @if($vt == 'dg')
                    <a @if($sanphams->xndanhan == 'rồi')  href="#" @endif >
                        <input type="button" class="col-md-2 fl-r btn" style="margin-right: 10px;
                        @if($sanphams->xndanhan == 'chưa') cursor: not-allowed; color: white; background: #c7c4c4; border: 1px solid #c7c4c4; @endif
                            " id="datHangBtn" value="Đã nhận hàng">
                    </a>
                    @endif
                    @if($vt == 'dn')
                    <a href="#" ><input type="button" class="col-md-2 fl-r btn" style="margin-right: 10px;" id="datHangBtn" value="Mua lại"></a>
                    @endif
                </div>
            </div>
            @csrf
        </form>
    </section>
</main>
<!-- Main Content - end -->
<!-- Main Content - end -->


<!-- Footer - start -->
@include('web.footer')

</body>
</html>


{{--@section('content')--}}


{{--@endsection--}}
