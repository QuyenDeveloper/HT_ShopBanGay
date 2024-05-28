
@extends('web.admin.main')


@section('content')

{{--    @include('web.admin.CHECK')--}}
    <table class="table">
        <thead>
        <tr>
            <th style="width: 1px;">&nbsp;</th>
            <th>
                <div class="row">
                    <input type="text" class="form-control col-md-8" placeholder="Search"> <a href="#" class="col-md-1"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></a>
                </div>
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

            <th style="width: 100px;">&nbsp;</th>
        </tr>
             <tr>
            <th style="width: 1px;">ID</th>
            <th>Name</th>
            <th>Logo</th>
            <th>Updae</th>
            <th style="width: 100px;">&nbsp;</th>
            </tr>

        </thead>
        <tbody>
        @foreach($nhanhieus as $nhanhieu)
            <tr>
                <td>{{$nhanhieu->id}}</td>
                <td>{{$nhanhieu->name}}</td>
                <td><a href="{{$nhanhieu->logo}} "target="_blank"><img style="height: 50px;" src="{{$nhanhieu->logo}}"></a> </td>
                <td>{{$nhanhieu->updated_at}}</td>

                <td>
                    <a class="btn btn-primary btn-sm" href="/trangchu/admin/nhanhieu/edit/{{ $nhanhieu->id}} ">
                        <i class="fas fa-user-edit"></i>
                    </a>

                    <a class="btn btn-danger btn-sm" href="#"
                       onclick="removeRow({{ $nhanhieu->id }}, '/trangchu/admin/nhanhieu/destroy')" >
                        <i class="fas fa-trash-alt"></i>
                    </a>


                </td>

            </tr>
        @endforeach
        </tbody>

    </table>


@endsection
