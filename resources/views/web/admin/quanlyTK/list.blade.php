
@extends('web.admin.main')


@section('content')

    {{--    @include('web.admin.CHECK')--}}
    <table class="table">
        <thead>
        <tr>
            <th style="width: 1px;">&nbsp;</th>
            <th>
                &nbsp;
            </th>
            </th>
            <th>
                <div class="row">
                    <input type="text" class="form-control col-md-8" placeholder="Search"> <a href="#" class="col-md-1"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></a>
                </div>
            </th>
            <th>
                <div class="row">
                    <input type="text" class="form-control col-md-8" placeholder="Search"> <a href="#" class="col-md-1"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></a>
                </div>
            </th>
            <th>
                <div class="row">
                    <input type="text" class="form-control col-md-8" placeholder="Search"> <a href="#" class="col-md-1"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></a>
                </div>
            </th>
            <th>
                <div class="row">
                    <input type="text" class="form-control col-md-8" placeholder="Search"> <a href="#" class="col-md-1"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></a>
                </div>
            </th>

            <th style="width: 100px;">&nbsp;</th>
        </tr>
        <tr>
            <th style="width: 1px;">ID</th>
            <th>avt</th>
            <th>Name</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Giới tính</th>
            <th style="width: 150px;">Ngày đăng ký</th>
            <th style="width: 100px;">&nbsp;</th>
        </tr>

        </thead>
        <tbody>
        @foreach($tKs as $tK)
            <tr>
                <td>{{$tK->id}}</td>
                <td><a href="{{$tK->avt}} "target="_blank"><img style="height: 50px;" src="{{$tK->avt}}"></a> </td>
                <td>{{$tK->name}}</td>
                <td>{{$tK->email }}</td>
                <td>{{$tK->sdt}}</td>
                <td>{{$tK->giotinh}}</td>
                <td>{{$tK->created_at}}</td>

                <td>
                    <a class="btn btn-danger btn-sm" href="/trangchu/admin/nhanhieu/edit/{{ $tK->id}} ">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>

            </tr>
        @endforeach
        </tbody>

    </table>


@endsection
