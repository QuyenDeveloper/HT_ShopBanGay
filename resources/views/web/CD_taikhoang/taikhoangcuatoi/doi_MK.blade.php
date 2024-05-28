@extends('web.CD_taikhoang.taikhoang')

@section('taikhoang')
    <style>
        .name{
            border-bottom: 1px solid rgba(206, 203, 203, 0.42);
        }
        .name .tenchinh{
            font-size: 25px;
        }
        .name .tenphu{
            color:  #939393;
        }
        .than{
            margin-top: 20px;
        }
        .than .trai, .than .phai{
            /*float: left;*/
            /*overflow: auto;*/
        }
        tr th{
            padding: 5px 10px;
            text-align: right;
            width: 30%;
            color: #939393;
        }
        tr td{
            padding: 10px 10px;
            width: 500px;
            /*background: chartreuse;*/
        }
        tr td input.MKC,
        tr td input.MKM,
        tr td input.xn_MKM{
            padding: 5px 10px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #777777;
        }
        tr td input.xn{
            padding: 5px 10px;
            color: white;
            font-weight: bold;
            background: #373d54;
            border: none;
            border-radius: 5px;
        }
        tr td input.xn:hover{
            background: #4f5465;
        }
    </style>
    <div class="name">
        <span class="tenchinh">Đổi Mật Khẩu</span><br>
        <span class="tenphu">Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</span>
    </div>

    <div class="than row" style="">
        <form method="post" action="/trangchu/tai_khoan/doiMK/{{Auth::user()->id}}">
            @include('web.admin.alert')
                <table>
                    <tr>
                        <th>
                            Mật Khẩu Hiện Tại
                        </th>
                        <td>
                            <input type="text" name="MKC" class="MKC">
                        </td>
                        <td>
                            <a href="/trangchu/quenMK" >Quên mật khẩu?</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Mật Khẩu Mới
                        </th>
                        <td>
                            <input type="text" name="MKM" class="MKM">
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Xác Nhận Mật Khẩu
                        </th>
                        <td>
                            <input type="text" name="xn_MKM" class="xn_MKM">
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th>

                        </th>
                        <td>
                            <input type="submit" class="xn" value="Xác nhận">
                        </td>
                        <td>

                        </td>
                    </tr>
                </table>
            @csrf
        </form>
    </div>
@endsection
