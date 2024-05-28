@extends('web.CD_taikhoang.taikhoang')

@section('taikhoang')
    <style>
        .name{
            border-bottom: 1px solid rgba(206, 203, 203, 0.42);
        }
        .name .tenchinh{
            font-size: 25px;
        }
        .name .tenphu button a{color: white}
        .name .tenphu button{
            float: right;
            background: #373d54;
            color: white;
            font-weight: bold;
            padding: 6px 10px;
            border: none;
            border-radius: 5px;
            margin: -20px 0 10px;
        }
        .name .tenphu button:hover{
            color: white;
            background: #616877;
        }
        .than{
            margin-top: 20px;
        }
        tr th{
            padding: 5px 10px;
            text-align: right;
            width: 150px;
            color: #939393;
        }
        tr td{
            padding: 10px 10px;
            width: 40%;
            /*background: chartreuse;*/
        }
        .than .DC{
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(126, 125, 125, 0.4);
        }

    </style>
    <div class="name row">
        <span class="tenchinh col-sm-6">Địa chỉ của tôi</span><br>
        <span class="tenphu  col-sm-6">
            <button>
                <a href="#" class="qview-btn">
                    <i class="fa fa-plus" aria-hidden="true"> </i> Thêm địa chỉ mới
                </a>
            </button>
        </span>
    </div>

    <div class="than" style="">
        <div style="width: 100%;">
            @foreach($DCs as $DC)
                <div class="DC">
                    <table>
                        <tr>
                            <th>
                                Họ và tên
                            </th>
                            <td>
                                {{$DC->hoten}}
                            </td>
                            <td>
                                <form method="post" action="/trangchu/tai_khoan/xoaDC">
                                    <input type="hidden" name="idDC" value="{{$DC->id}}">
                                    <input type="submit" style="float: right; color: red; border: none; background: none" value="xóa">{{--onclick="xoaDC('{{$DC->id}}')"--}}
                                @csrf
                                </form>

                            </td>
                        </tr>

                        <tr>
                            <th>
                                Số điện thoại
                            </th>
                            <td>
                                {{$DC->sdt}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Địa chỉ
                            </th>
                            <td>
                                {{$DC->daichi}}
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        </div>

    </div>

<style>
    .prod-wrap input{
        padding: 10px 10px;
        border: 1px solid rgba(129, 129, 129, 0.59);
    }
    .HT_SDT{
        /*width: 500px;*/
        margin-bottom: 15px;
    }
    .HT_SDT .hoten{
        width: 48%;
    }
    .HT_SDT .sdt{
        float: right;
        width: 48%;
    }
    .DC, .loaiDC{
        margin-bottom: 15px;
    }
    .DC .daichi{
        width: 100%;
    }
    .HT input{
        background: #373d54;
        color: white;
        font-weight: bold;
        float: right;
        border: none;
    }
    .form-check{
        margin-left: 20px;
    }
</style>

    <!-- Quick View Product - start -->
    <div class="qview-modal">
        <div class="prod-wrap">
            <form method="post" action="/trangchu/tai_khoan/them_dia_chi">
                <div style="width: 500px">
                    <a href="#">
                        <h1 class="main-ttl">
                            <span>Địa chỉ mới</span>
                        </h1>
                    </a>
                    @include('web.admin.alert')
                    <input class="idKH" name="idKH" type="hidden" value="{{Auth::user()->id}}">
                    <div class="HT_SDT ">
                        <input class="hoten" name="hoten" type="text" placeholder="Họ và tên">
                        <input class="sdt" name="sdt" type="text" placeholder="Số điện thoại">
                    </div>

                    <div class="DC">
                        <input class="daichi" name="daichi" type="text" placeholder="Địa chỉ nhận">
                    </div>

                    <div class="loaiDC">
                        <span>Loại dịa chỉ:</span>
                        <div class="form-check form-radio">
                            <input class="form-control-input" value="Nhà riêng" type="radio" id="active" name="loaiDC">
                            <label for="active" class="form-check-label"> Nhà riêng</label>
                        </div>

                        <div class="form-check form-radio">
                            <input class="form-control-input" value="Văn phòng" type="radio" id="no_active" name="loaiDC">
                            <label for="no_active" class="form-check-label"> Văn phòng</label>
                        </div>

                    </div>

                    <div class="HT">
                        <input type="submit"  value="HOÀN THÀNH">{{--onclick="DC('/trangchu/tai_khoan/them_dia_chi')"--}}
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
    <!-- Quick View Product - end -->
@endsection
