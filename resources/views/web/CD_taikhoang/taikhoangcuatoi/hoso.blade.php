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
            width: 60px;
            color: #939393;
        }
        tr td{
            padding: 10px 10px;
            width: 200px;
            /*background: chartreuse;*/
        }
        tr td input.name{
            padding: 5px 10px;
            width: 100% ;
            border-radius: 5px;
            border: 1px solid #777777;
        }
        tr td span.GT{
            margin: 0 10px;
        }
        tr td .luu{
            background: red;
            border: none;
            padding: 10px 15px;
            color: white;
            border-radius: 5px;
        }
        tr td .luu:hover{
            background: #f36d6d;
        }
        .than .phai .anh{
            width: 130px;
            margin: 10px 45px;
        }
    </style>
    <div class="name">
        <span class="tenchinh">Hồ sơ của tôi</span><br>
        <span class="tenphu">Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
    </div>

    <div class="than row" style="">
        <form method="post" action="/trangchu/tai_khoan/capnhathoso/{{Auth::user()->id}}">
            <div class="trai col-sm-8" >
                <div style="width: 100%;">
                    <table style="width: 100%;">
                        <tr>
                            <th>
                                Tên
                            </th>
                            <td>
                                <input class="name" type="text" name="name" value="{{$users->name}}" >
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                <input name="email" style="width: 200px; border: none;" value="{{$users->email }}" readonly>
                                <span style="color: #0c84ff; border-bottom: 1px solid #0c84ff"><a href="#"> Thay đổi</a></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Số Điện Thoại
                            </th>
                            <td>
                                <input name="sdt" style="width: 200px; border: none;" value="@if($users->sdt != null) {{$users->sdt }} @endif" readonly>
                                <span style="color: #0c84ff; border-bottom: 1px solid #0c84ff"><a href="#"> Thay đổi</a></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Giới tính
                            </th>
                            <td>
                                <span class="GT"><input name="giotinh" type="radio" value="Nam" @if($users->giotinh == 'Nam') checked @endif > Nam</span>
                                <span class="GT"><input name="giotinh" type="radio" value="Nữ" @if($users->giotinh == 'Nữ') checked @endif> Nữ</span>
                                <span  class="GT"><input name="giotinh" type="radio" value="Khác" @if($users->giotinh == 'Khác') checked @endif> Khác</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Ngày sinh
                            </th>
                            <td>
                                <input type="date" name="ngSinh" value="{{$users->ngaysinh}}">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="phai col-sm-4" style="border-left: 1px solid rgba(157,156,156,0.3); min-height: 100px;">
                <div style="width: 100%; ">
                    <div class="anh" id="anh">
                        <img class="ADDAVT" @if($users->avt != null) src="{{$users->avt}}" @endif  @if($users->avt == null) src="/web/imgs/pixlr-bg-result.png" @endif alt="Aspernatur excepturi rem" />
                    </div>

                    <input type="file" id="avt">
                    <input type="hidden" name="avt" id="linkavt" value="{{$users->avt}}">
                </div>
            </div>

            <div class="cuoi col-sm-12">
                <table>
                    <tr>
                        <th>

                        </th>
                        <td>
                            <input class="luu" type="submit" value="Lưu">
                        </td>
                    </tr>
                </table>
            </div>
            @csrf
        </form>
    </div>
@endsection
