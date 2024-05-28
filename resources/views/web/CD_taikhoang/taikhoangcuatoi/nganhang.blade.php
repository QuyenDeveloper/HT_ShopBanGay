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
    <div>
        <div class="name row">
            <span class="tenchinh col-sm-6">Thẻ Tín Dụng/Ghi Nợ</span><br>
            <span class="tenphu  col-sm-6">
            <button>
                <a href="#" class="{{--qview-btn--}}">
                    <i class="fa fa-plus" aria-hidden="true"> </i> Thêm thẻ mới
                </a>
            </button>
        </span>
        </div>
        <div class="than" style="">
            <div style="width: 100%; min-height: 200px;">

            </div>
        </div>
    </div>
    <div>
        <div class="name row">
            <span class="tenchinh col-sm-6">Tài Khoản Ngân Hàng Của Tôi</span><br>
            <span class="tenphu  col-sm-6">
            <button>
                <a href="#" class="qview-btn">
                    <i class="fa fa-plus" aria-hidden="true"> </i> Thêm tài khoản ngân hàng
                </a>
            </button>
        </span>
        </div>
        <div class="than" style="">
            <div style="width: 100%; min-height: 200px;">

            </div>
        </div>
    </div>


    <style>
        .prod-wrap input{
            padding: 10px 10px;
            border: 1px solid rgba(129, 129, 129, 0.59);
        }
        .t{
            /*width: 500px;*/
            margin-bottom: 15px;
        }
        .t .ten{
            width: 100%;
        }
        .cm{padding-bottom: 15px;}
        .cm .cmnd{
            width: 100%;

        }
        .HT input{
            background: #373d54;
            color: white;
            font-weight: bold;
            float: right;
            border: none;
        }
    </style>

    <!-- Quick View Product - start -->
    <div class="qview-modal">
        <div class="prod-wrap">
            <form method="post" action="/trangchu/tai_khoan/them_dia_chi">
                <div style="width: 500px">
                    <a href="#">
                        <h1 class="main-ttl">
                            <span>Thông Tin Người Dùng</span>
                        </h1>
                    </a>
                    @include('web.admin.alert')
                    <input class="idKH" name="idKH" type="hidden" value="{{Auth::user()->id}}">
                    <div class="t ">
                        <input class="ten" name="ten" type="text" placeholder="Tên">
                    </div>

                    <div class="cm">
                        <input class="cmnd" name="cmnd" type="text" placeholder="Số CMND/CCCD">
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
