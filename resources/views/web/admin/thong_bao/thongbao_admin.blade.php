
@extends('web.admin.main')


@section('content')

    @include('web.admin.CHECK')

    <style>
        .than{
            margin-top: 20px;
        }
        .XCTDHcx{
            border: 1px solid black;
            color: black;
            float: right;
            background: white;
        }
        .XCTDHcx:hover{
            color: white;
            background: black;
        }
        .oneTB{
            padding: 15px 8px;
            border-radius: 8px;
            /*border-bottom: 1px solid rgba(161, 154, 154, 0.4);*/
        }
        /*.oneTB:hover{*/
        /*    background: rgba(192, 190, 190, 0.15);*/
        /*}*/
        .oneTBcx{
            padding: 15px 8px;
            border-radius: 8px;
            background: rgba(192, 190, 190, 0.15);
            /*border-bottom: 1px solid rgba(161, 154, 154, 0.4);*/
        }
        .TD{
            font-size: 18px;
        }
        .ND{
            padding: 5px 20px;
            color: #7c7a7a;
        }
        .TG{
            font-size: 14px;
            padding: 5px 20px;
            color: #7c7a7a;
        }
        .XCTDH{
            float: right;
            background: white;
            border: 1px solid rgba(180, 178, 178, 0.55);
            color: rgba(70, 68, 68, 0.55);
        }
    </style>

    <div class="than" style="">
        @foreach($thongbaos as $thongbao)
            @if($thongbao->daxem == 'chưa')
                <div class="oneTBcx">
                    <span class="TDcx">{{$thongbao->tieude}}</span> <a href="/trangchu/admin/thongbaoadmin/xacthucdaxem/{{$thongbao->id}}"><button class="XCTDHcx" type="button" href="#">Đánh dấu đã xem</button></a>
                    <p class="ND" >{{$thongbao->noidung}}</p>
                    <p class="TG">{{$thongbao->created_at}}</p>
                </div>
            @endif
        @endforeach
        @foreach($thongbaos as $thongbao)
            @if($thongbao->daxem == 'rồi')
                <div class="oneTB">
                    <span class="TDcx">{{$thongbao->tieude}}</span> <a href="/trangchu/admin/thongbaoadmin/xacthucdaxem/{{$thongbao->id}}"><button class="XCTDH" type="button" href="#">Đánh dấu đã xem</button></a>
                    <p class="ND" >{{$thongbao->noidung}}</p>
                    <p class="TG">{{$thongbao->created_at}}</p>
                </div>
            @endif
        @endforeach
    </div>
@endsection
