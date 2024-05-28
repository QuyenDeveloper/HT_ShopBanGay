
@extends('web.admin.main')


@section('content')

{{--    @extends('web.admin.CHECK')--}}
{{--    @include('web.admin.CHECK')--}}
    <table class="table">
        <thead>
        <tr>
            <th style="width: 1px;">
                &nbsp;
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
            <th>Name</th>
            <th>parent_id</th>
            <th>description</th>
            <th style="width: 100px;">&nbsp;</th>
            </tr>

        </thead>
        <tbody>
            {!! \App\Helpers\Helper::menu($menus) !!}
        </tbody>

    </table>


@endsection
