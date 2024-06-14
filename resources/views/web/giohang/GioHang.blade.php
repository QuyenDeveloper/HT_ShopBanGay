
@extends('web.main')


@section('content')

    <!-- Main Content - start -->
    <main>
        <section class="container stylization maincont">


            <ul class="b-crumbs">
                <li>
                    <a href="/trangchu">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <span>Giỏ hàng</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Giỏ hàng<?php
                    $SLSPGH = 0;
                    foreach($sanphams as $sanpham){
                        if ($sanpham->ID_KH == Auth::user()->id) $SLSPGH++;
                    }
                    ?>
                                        <b style="color: red;">({{$SLSPGH}})</b></span></h1>
            <!-- Cart Items - start -->
{{--            <form method="POST" >--}}{{--action="/trangchu/dathang"--}}

                <div class="cart-items-wrap">
                    <table class="cart-items">
                        <thead>

                        <tr>

{{--                            <td style="width: 100px;">--}}
{{--                                <input type="button" id="btn1" style="background: none; color: blue; border: none;" value="Chọn"/>--}}
{{--                                <input type="button" id="btn2" style="background: none; color: blue; border: none; display: none" value="Bỏ chọn"/>--}}
{{--                            </td>--}}
                            <td class="cart-del">&nbsp;&nbsp;</td>
                            <td class="cart-image">Ảnh SP</td>
                            <td class="cart-ttl">Tên SP</td>
                            <td class="cart-price">Giá bán</td>
                            <td class="cart-quantity">Số lượng</td>
                            <td class="cart-summ">Tổng giá</td>
                            <td class="cart-del">&nbsp;</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $giaTC=0; ?>
                        @foreach($sanphams as $sanpham)
                        @if($sanpham->ID_KH == Auth::user()->id)

                        <tr>
                            <td>
                                <input type="hidden" id="idSP_GH-{{$sanpham->id}}" name="idSP_GH-{{$sanpham->id}}" value="{{$sanpham->id}}">
                            </td>
                            <td class="cart-image">
                                <a href="/trangchu/sanpham/NDsanphan/{{$sanpham->ID_SP}}">
                                    @foreach($khoSPs as $khoSP)
                                        @if($khoSP->id == $sanpham->ID_SP)
                                            <img src="{{$khoSP->anh1}}" alt="Similique delectus totam">
                                        @endif
                                    @endforeach
                                </a>
                            </td>
                            <td class="cart-ttl">
                                @foreach($khoSPs as $khoSP)
                                    @if($khoSP->id == $sanpham->ID_SP)
                                        <a href="/trangchu/sanpham/NDsanphan/{{$sanpham->ID_SP}}">{{$khoSP->name}}</a>
                                    @endif
                                @endforeach
                                    <?php
                                    if($sanpham->sizeSP_kh == 0){
                                        $Size = 'FreeSize';
                                    }else{
                                        $Size = $sanpham->sizeSP_kh;
                                    }

                                    ?>
                                <p>Size: {{$Size}}</p>
                            </td>
                            <td class="cart-price">
                                @foreach($khoSPs as $khoSP)
                                    @if($khoSP->id == $sanpham->ID_SP)
                                        <?php $return = true ?>
                                        @if($return && $khoSP->money_sale > 0)
                                            <p>{{number_format($khoSP->money_sale)}} đ <br> <strike style="color: red;">{{$khoSP->money}} đ</strike></p>
                                            <?php $return = false ?>
                                        @endif
                                        @if($return)
                                            <p>{{number_format($khoSP->money)}} đ</p>
                                        @endif
                                    @endif
                                @endforeach

                            </td>
                            <td class="cart-quantity row">
                                <b class="cart-qnt col-sm-auto">
{{--                                    <from method="post">--}}
{{--                                    <input type="hidden" id="idKH_GH" name="idKH_GH" value="{{Auth::user()->id}}">--}}
{{--                                    <input type="hidden" id="idSP_GH" name="idSP_GH" value="{{$sanpham->ID_SP}}">--}}
{{--                                    <input type="hidden" id="sizeSP_KHcan" name="sizeSP_KHcan" value="{{$sanpham->sizeSP_kh}}">--}}
                                    <input name="SLSP_KH-{{$sanpham->id}}" id="SLSP_KH-{{$sanpham->id}}"  type="text" value="{{$sanpham->SLSP_KH}}" style="width: 60px;" >{{--readonly--}}


{{--                                     </from>--}}
                                </b>
                                <a href="#" onclick="updateSL('{{$sanpham->id}}', 'SLSP_KH-{{$sanpham->id}}')" class="col-sm-1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                            </td>
                            <td class="cart-summ">
                                @foreach($khoSPs as $khoSP)
                                    @if($khoSP->id == $sanpham->ID_SP)
                                        <?php
                                            if ($khoSP->money_sale > 0 ){
                                                $gia = $khoSP->money_sale * $sanpham->SLSP_KH;
                                            }else{
                                                $gia = $khoSP->money * $sanpham->SLSP_KH;
                                            }

                                        ?>
                                        <b>{{number_format($gia)}} đ</b>
                                        <?php $giaTC = $giaTC + $gia ?>
                                    @endif
                                @endforeach
{{--                                <b>$220</b>--}}
{{--                                <p class="cart-forone">unit price <b>$220</b></p>--}}
                            </td>
                            <td class="cart-del">
                                <a href="#" onclick="xoaSPGH('{{$sanpham->id}}')" class="cart-remove"></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach

                        </tbody>
                    </table>
{{--                    <script language="javascript">--}}
{{--                        document.getElementById('btn1').onclick = function () {--}}
{{--                            document.getElementById('ID_SP_GH').checked = false;--}}
{{--                            document.getElementById('btn2').style.display = "none";--}}
{{--                            document.getElementById('btn1').style.display = "block";--}}
{{--                        };--}}
{{--                        document.getElementById('btn2').onclick = function () {--}}
{{--                            document.getElementById('ID_SP_GH').checked = false;--}}
{{--                            document.getElementById('btn2').style.display = "none";--}}
{{--                            document.getElementById('btn1').style.display = "block";--}}
{{--                        };--}}
{{--                    </script>--}}
                </div>
                <ul class="cart-total">
                    <li class="cart-summ">TỔNG CỘNG: <b>{{number_format($giaTC)}} đ</b></li>
                </ul>
                <div class="cart-submit">
{{--                    <div class="cart-coupon">--}}
{{--                        <input name="ma_GGia" placeholder="your coupon" type="text">--}}
{{--                        <a class="cart-coupon-btn" href="#"><img src="/web/img/ok.png" alt="your coupon"></a>--}}
{{--                    </div>--}}
{{--                    <input type="button" class="cart-submit-btn" style="background: black" value="Đặt hàng">--}}
                    <a @if($giaTC != 0)href="/trangchu/dathang" @else style="cursor: not-allowed;" @endif class="cart-submit-btn">Đặt hàng</a>
{{--                    <a href="#" class="cart-clear">Clear cart</a>--}}

                </div>
{{--                @csrf--}}
{{--            </form>--}}

            <!-- Cart Items - end -->

        </section>
    </main>
    <!-- Main Content - end -->

@endsection
