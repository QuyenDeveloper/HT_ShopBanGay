@extends('web.CD_taikhoang.donmua.donmua')

@section('donmua')
    <style>
        .dh{
            margin-bottom: 30px;
        }
        .CXN{
            text-transform: uppercase;
            width: 100%;
            text-align: right;
            font-size: 20px;
            color: red;
            padding: 10px;
            border-bottom: 1px solid rgba(128, 126, 126, 0.53);
        }
        .DS_SP .ndSP .gia{
            float: right;
        }
        .DS_SP{
            padding: 20px;
        }
        .ndSP{
            margin-top: 10px;
        }
        .ndSP .loai{
            color: #8c8b8b;
        }
        .ndSP .gia{
            color: red;
        }
        .ndSP .SL{
            font-size: 13px;
        }
        .tonggia{
            text-align: right;
            padding: 10px;
            /*font-size: 19px;*/

        }
        .tonggia span{
            font-size: 23px;
            color: red;

        }
        .nut{
            text-align: right;
            padding: 5px 10px 20px 0;
        }
        .nut button{
            margin-left: 10px;
            padding: 5px 20px;
            border:1px solid black;
            background: white;
        }
        .nut button:hover{
            color: white;
            background: #373d54;
        }
        .nut  a.cho button{
            cursor: not-allowed;
            color: white;
            background: #c7c4c4;
            border: 1px solid #c7c4c4;
        }
    </style>

    <div>
        @foreach($danggiaos as $danggiao)
            <div class="dh">
                <div style="background: rgba(224,220,220,0.24); border-radius: 5px;">
                    <div class="CXN" >
                        Đơn hàng đang được giao
                    </div>
                    <?php $tongtien =0; ?>
                    @foreach($donmuas as $donmua)
                        @if($danggiao->idDMua === $donmua->idDMua)
                            @foreach($sps as $sp)
                                @if($donmua->ID_SP == $sp->id)
                                    <div class="DS_SP  row">
                                        <img class="anhSP col-sm-2" src="{{$sp->anh1}}">
                                        <div class="ndSP col-sm-10">
                                            <span class="tenSP">{{$sp->name}}</span><br>
                                            <?php
                                            $tg = (float) $sp->money_sale*$donmua->SLSP_KH;
                                            $giag = number_format($tg, 0, ' ', '.');

                                            $t = (float) $sp->money*$donmua->SLSP_KH;
                                            $gia = number_format($t, 0, ' ', '.');
                                            ?>

                                            <span class="gia">@if($sp->money_sale != null) {{$giag}} đ<?php $tongtien+=($sp->money_sale*$donmua->SLSP_KH) ?> @endif  @if($sp->money_sale == null) {{$gia}} đ<?php $tongtien+=($sp->money*$donmua->SLSP_KH) ?>  @endif  </span><br>
                                            <span class="loai">Size: {{$donmua->sizeSP_kh}}</span><br>
                                            <span class="SL">x{{$donmua->SLSP_KH}}</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div style="background: #f6f4ee; border-radius: 5px;">
                    <?php $Ttien = number_format($tongtien, 0, ' ', '.'); ?>
                    <div class="tonggia">
                        Số tiền phải trả: <span>{{$Ttien}} đ</span>
                    </div>
                    <div class="nut">
                        <a href="/trangchu/tai_khoan/ND_donhang/{{$danggiao->idDMua}}"><button>Xem chi tiết đơn </button></a>
                        <a href="#"><button>Liên hệ </button></a>
                        <a @if($danggiao->xndanhan == 'chưa')class="cho"@endif @if($danggiao->xndanhan == 'rồi')href="/trangchu/admin/donhang/xl_danhan/{{$danggiao->idDMua}}"@endif><button >Đã nhận được hàng</button></a>
                    </div>

                </div>
            </div>
        @endforeach


    </div>

@endsection
