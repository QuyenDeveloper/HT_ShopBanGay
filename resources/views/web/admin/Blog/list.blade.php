
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
            <th>ảnh</th>
            <th>Tên BLOG</th>
            <th>Loại doanh mục</th>
            <th>Thời gian</th>
            <th style="width: 100px;">&nbsp;</th>
        </tr>

        </thead>
        <tbody>

        @foreach($blogs as $key => $blog)

            <tr>
                <td>{{$blog->id}}</td>
                <td>
                    <?php $retusn = true; ?>
                    @if($retusn && $blog->anh1 != null)
                        <a href="{{$blog->anh1}}" target="_blank"><img style="width: 50px;" src="{{$blog->anh1}}" }></a>
                        <?php $retusn = false; ?>
                    @endif
                    @if($retusn && $blog->anh2 != null)
                        <a href="{{$blog->anh2}}" target="_blank"><img style="width: 50px;" src="{{$blog->anh2}}" }></a>
                        <?php $retusn = false; ?>
                    @endif
                    @if($retusn && $blog->anh3 != null)
                        <a href="{{$blog->anh3}}" target="_blank"><img style="width: 50px;" src="{{$blog->anh3}}" }></a>
                        <?php $retusn = false; ?>
                    @endif
                    @if($retusn && $blog->anh4 != null)

                        <a href="{{$blog->anh4}}" target="_blank"> <img style="width: 50px;" src="{{$blog->anh4}}" }></a>

                        <?php $retusn = false; ?>
                    @endif
                    @if($retusn && $blog->anh5 != null)
                        <a href="{{$blog->anh5}}" target="_blank"><img style="width: 50px;" src="{{$blog->anh5}}" }></a>
                    @endif
                </td>
                <td>{{$blog->name}}</td>
                <td>{{$blog->loai}}</td>
                <td>{{$blog->tgian}}</td>

                <td>
                    <a class="btn btn-primary btn-sm" href="/trangchu/admin/blog/edit/{{ $blog->id}} ">
                        <i class="fas fa-user-edit"></i>
                    </a>

                    <a class="btn btn-danger btn-sm" href="#"
                       onclick="removeRow('{{ $blog->id }}' , '/trangchu/admin/blog/destroy' )" >
                        <i class="fas fa-trash-alt"></i>
                    </a>


                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    <center>
        <ul class="pagi">
            <?php
            $sumTrang = $blogs->lastPage();
            for ($i = 1; $i <= $sumTrang; $i++){
            ?>
            <li><a href="/trangchu/admin/blog/list?page={{$i}}">{{$i}}</a></li>
            <?php } ?>
        </ul>

    </center>
@endsection
