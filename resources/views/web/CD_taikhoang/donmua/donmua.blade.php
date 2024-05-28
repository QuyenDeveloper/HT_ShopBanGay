@extends('web.CD_taikhoang.taikhoang')

@section('taikhoang')
    <style>
        .menu_con .ul_c .li_c{
            float: left;
            width: 20%;
            text-align: center;
            font-size: 18px;
            color: rgba(125, 125, 126, 0.66);
        }
        .menu_con .ul_c .li_c:hover,
        .menu_con .ul_c .li_c a:hover{
            /*border-bottom:2px solid #4e52c7;*/
            color: #373d54;
        }
        .chon{
            color: #373d54 !important;
            border-bottom:2px solid #373d54;
        }
        .ND_DM{
            margin-top: 25px;
        }
    </style>

    <div class="than" style="">

        <div class="tren">
            <nav class="menu_con">
                <ul class="ul_c">
                    <li class='li_c @if($chon == 'chon1') chon @endif'>
                        <a href="/trangchu/tai_khoan/don_mua/{{Auth::user()->id}}/1">Chờ xác nhận</a>
                    </li>
                    <li class='li_c @if($chon == 'chon2') chon @endif'>
                        <a href="/trangchu/tai_khoan/don_mua/{{Auth::user()->id}}/2">Chờ lấy hàng</a>
                    </li>
                    <li class='li_c @if($chon == 'chon3') chon @endif'>
                        <a href="/trangchu/tai_khoan/don_mua/{{Auth::user()->id}}/3">Đang giao</a>
                    </li>
                    <li class='li_c @if($chon == 'chon4') chon @endif'>
                        <a href="/trangchu/tai_khoan/don_mua/{{Auth::user()->id}}/4">Đã giao</a>
                    </li>
                    <li class='li_c @if($chon == 'chon5') chon @endif'>
                        <a href="/trangchu/tai_khoan/don_mua/{{Auth::user()->id}}/5">Đã hủy</a>
                    </li>
                </ul>
            </nav>
        </div><br>

        <div class="ND_DM">
            @yield('donmua')
        </div>

    </div>
@endsection
