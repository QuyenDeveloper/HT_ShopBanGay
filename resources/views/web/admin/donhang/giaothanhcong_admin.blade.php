
@extends('web.admin.main')


@section('content')

    @include('web.admin.CHECK')

    <style>
        .dh{
            margin-bottom: 30px;
        }
        .CXN{
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
        th{
            text-align: right;
            padding: 10px 10px;
        }
    </style>

    <div>
        <?php
        $TSD = 0;
        foreach ($danggiaos as $danggiao){
            $TSD++;
        }
        ?>
        <div style="text-align: right; padding-right: 30px;">
            Tổng số đơn: <span style="color: red; font-size: 30px;">{{$TSD}}</span>
        </div>

        @foreach($danggiaos as $danggiao)
                @if($danggiao->xndanhan == 'chưa')
            <div class="dh">
                <div style="background: rgba(224,220,220,0.24); border-radius: 5px;">
                    <div class="CXN" >
                        @foreach($ngdungs as $ngdung)
                            @if($danggiao->idKH == $ngdung->id)
                                <span>Tên tài khoản:</span><span> {{$ngdung->name}} </span><br><br>
                            @endif
                        @endforeach
                        <span>THÔNG TIN ĐƠN HÀNG:</span>
                        @foreach($diachis as $diachi)
                            @if($danggiao->idDchi == $diachi->id)
                                <table>
                                    <tr>
                                        <th><span>Mã đơn:</span></th> <td><span style="color: red;">{{$danggiao->idDMua}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Tên người nhận:</span></th> <td><span style="color: red;">{{$diachi->hoten}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Số điện thoại người nhận:</span></th><td><span style="color: red;">{{$diachi->sdt}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Địa chỉ nơi nhận:</span></th><td><span style="color: red;">{{$diachi->daichi}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Lời nhắn:</span></th><td><span style="color: red;">{{$danggiao->loinhan}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Loại địa chỉ:</span></th><td><span style="color: red;">{{$diachi->loaiDC}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Thời gian lên đơn:</span></th><td><span style="color: red;">{{$danggiao->created_at}}</span></td>
                                    </tr>
                                </table>
                            @endif
                        @endforeach
                    </div>
                    <?php $tongtien =0.0; ?>
                    @foreach($donmuas as $donmua)
                        @if($danggiao->idDMua === $donmua->idDMua)
                            @foreach($sps as $sp)
                                @if($donmua->ID_SP == $sp->id)
                                    <div class="DS_SP  row">
                                        <img class="anhSP col-sm-1" src="{{$sp->anh1}}">
                                        <div class="ndSP col-sm-11">
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
                <?php $Ttien = number_format($tongtien, 0, ' ', '.'); ?>
                <div style="background: #f6f4ee; border-radius: 5px;">
                    <div class="tonggia">

                        Tổng số tiền khách hàng trả: <span>{{$Ttien}} đ</span>
                    </div>
                    <div class="nut">
                        <a href="#"><button>Liên hệ </button></a>
                        <a href="/trangchu/admin/donhang/xl_giaothanhcong/{{$danggiao->idDMua}}"><button>Xác nhận giao thành công</button></a>
                    </div>

                </div>
            </div>
                @endif
        @endforeach

        @foreach($danggiaos as $danggiao)
            @if($danggiao->xndanhan == 'rồi')
            <div class="dh">
                <div style="background: rgba(224,220,220,0.24); border-radius: 5px;">
                    <div class="CXN" >
                        @foreach($ngdungs as $ngdung)
                            @if($danggiao->idKH == $ngdung->id)
                                <span>Tên tài khoản:</span><span> {{$ngdung->name}} </span><br><br>
                            @endif
                        @endforeach
                        <span>THÔNG TIN ĐƠN HÀNG:</span>
                        @foreach($diachis as $diachi)
                            @if($danggiao->idDchi == $diachi->id)
                                <table>
                                    <tr>
                                        <th><span>Mã đơn:</span></th> <td><span style="color: red;">{{$danggiao->idDMua}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Tên người nhận:</span></th> <td><span style="color: red;">{{$diachi->hoten}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Số điện thoại người nhận:</span></th><td><span style="color: red;">{{$diachi->sdt}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Địa chỉ nơi nhận:</span></th><td><span style="color: red;">{{$diachi->daichi}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Lời nhắn:</span></th><td><span style="color: red;">{{$danggiao->loinhan}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Loại địa chỉ:</span></th><td><span style="color: red;">{{$diachi->loaiDC}}</span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Thời gian lên đơn:</span></th><td><span style="color: red;">{{$danggiao->created_at}}</span></td>
                                    </tr>
                                </table>
                            @endif
                        @endforeach
                    </div>
                    <?php $tongtien =0.0; ?>
                    @foreach($donmuas as $donmua)
                        @if($danggiao->idDMua === $donmua->idDMua)
                            @foreach($sps as $sp)
                                @if($donmua->ID_SP == $sp->id)
                                    <div class="DS_SP  row">
                                        <img class="anhSP col-sm-1" src="{{$sp->anh1}}">
                                        <div class="ndSP col-sm-11">
                                            <span class="tenSP">{{$sp->name}}</span><br>
                                            <?php
                                            $tg = (float) $sp->money_sale;
                                            $giag = number_format($tg, 0, ' ', '.');

                                            $t = (float) $sp->money;
                                            $gia = number_format($t, 0, ' ', '.');
                                            ?>
                                            <span class="gia">@if($sp->money_sale != null) {{$giag}} đ<?php $tongtien+=$sp->money_sale ?> @endif  @if($sp->money_sale == null) {{$gia}} đ<?php $tongtien+=$sp->money ?>  @endif  </span><br>
                                            <span class="loai">Size: {{$donmua->sizeSP_kh}}</span><br>
                                            <span class="SL">x{{$donmua->SLSP_KH}}</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <?php $Ttien = number_format($tongtien, 0, ' ', '.'); ?>
                <div style="background: #f6f4ee; border-radius: 5px;">
                    <div class="tonggia">

                        Tổng số tiền khách hàng trả: <span>{{$Ttien}} đ</span>
                    </div>
                    <div class="nut">
                        <a href="#"><button>Liên hệ </button></a>
                        <a ><button style="cursor: not-allowed;
            color: white;
            background: #c7c4c4;
            border: 1px solid #c7c4c4;">Xác nhận giao thành công</button></a>
                    </div>

                </div>
            </div>
                @endif
        @endforeach


    </div>
@endsection
