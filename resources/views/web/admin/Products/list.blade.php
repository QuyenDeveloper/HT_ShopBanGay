
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
                &nbsp;
            </th>
            <th>
                &nbsp;
            </th>
            <th>
                &nbsp;
            </th>
            <th style="width: 100px;">&nbsp;</th>
        </tr>
        <tr>
            <th style="width: 1px;">ID</th>
            <th>ảnh SP</th>
            <th>Tên Sản Phẩm</th>
            <th>Doanh mục</th>
            <th>thể loại</th>
            <th>Giá Gốc</th>
            <th>Giá khuyến mãi</th>
            <th>Nhãn hiệu</th>
{{--            <th>Loại</th>--}}
            <th>Size</th>
            <th>Active</th>
            <th>Updae</th>
            <th style="width: 100px;">&nbsp;</th>
        </tr>

        </thead>
        <tbody>

        @foreach($products as $key => $product)

            <tr>
                <td>{{$product->id}}</td>
                <td>
                    <?php $retusn = true; ?>
                        @if($retusn && $product->anh1 != null)
                            <a href="{{$product->anh1}}" target="_blank"><img style="width: 50px;" src="{{$product->anh1}}" }></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh2 != null)
                            <a href="{{$product->anh2}}" target="_blank"><img style="width: 50px;" src="{{$product->anh2}}" }></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh3 != null)
                            <a href="{{$product->anh3}}" target="_blank"><img style="width: 50px;" src="{{$product->anh3}}" }></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh4 != null)

                            <a href="{{$product->anh4}}" target="_blank"> <img style="width: 50px;" src="{{$product->anh4}}" }></a>

                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh5 != null)
                            <a href="{{$product->anh5}}" target="_blank"><img style="width: 50px;" src="{{$product->anh5}}" }></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh6 != null)
                            <a href="{{$product->anh6}}" target="_blank"><img style="width: 50px;" src="{{$product->anh6}}" }></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh7 != null)
                            <a href="{{$product->anh7}}" target="_blank"><img style="width: 50px;" src="{{$product->anh7}}" }></a></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh8 != null)
                            <a href="{{$product->anh8}}" target="_blank"><img style="width: 50px;" src="{{$product->anh8}}" }></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh9 != null)
                            <a href="{{$product->anh9}}" target="_blank"><img style="width: 50px;" src="{{$product->anh9}}" }></a>
                            <?php $retusn = false; ?>
                        @endif
                        @if($retusn && $product->anh10 != null)
                            <a href="{{$product->anh10}}" target="_blank"><img style="width: 50px;" src="{{$product->anh10}}" }></a>
                        @endif
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->menu_name1}}</td>
                <td>{{$product->theloai}}</td>
                <td>{{$product->money}} VND</td>
                <td>{{$product->money_sale}} VND</td>
                <td>{{$product->nhanhieu}}</td>
{{--                <td>--}}
{{--                    <?php $cout = 0 ?>--}}
{{--                    @if( $product->color1 != null)--}}
{{--                            <?php $cout++ ?>--}}
{{--                        <a href="{{$product->color1}}" target="_blank"><img style="width: 50px;" src="{{$product->color1}}" }></a>--}}
{{--                    @endif--}}
{{--                    @if( $product->color2 != null)--}}
{{--                            <?php $cout++ ?>--}}
{{--                        <a href="{{$product->color2}}" target="_blank"><img style="width: 50px;" src="{{$product->color2}}" }></a>--}}
{{--                    @endif--}}
{{--                    @if( $product->color3 != null)--}}
{{--                            <?php $cout++ ?>--}}
{{--                        <a href="{{$product->color3}}" target="_blank"><img style="width: 50px;" src="{{$product->color3}}" }></a>--}}
{{--                    @endif--}}
{{--                    @if( $product->color4 != null)--}}
{{--                            <?php $cout++ ?>--}}
{{--                        <a href="{{$product->color4}}" target="_blank"> <img style="width: 50px;" src="{{$product->color4}}" }></a>--}}
{{--                    @endif--}}
{{--                    @if( $product->color5 != null)--}}
{{--                            <?php $cout++ ?>--}}
{{--                        <a href="{{$product->color5}}" target="_blank"><img style="width: 50px;" src="{{$product->color5}}" }></a>--}}
{{--                    @endif--}}
{{--                    @if( $product->color6 != null)--}}
{{--                            <?php $cout++ ?>--}}
{{--                        <a href="{{$product->color6}}" target="_blank"><img style="width: 50px;" src="{{$product->color6}}" }></a>--}}
{{--                    @endif--}}
{{--                    {{$cout}} loại--}}
{{--                </td>--}}
                <td>
                    @if($product->size1 != null)
                        {{$product->size1 . " | "}}
                    @endif
                    @if($product->size2 != null)
                        {{$product->size2 . " | " }}
                    @endif
                    @if($product->size3 != null)
                        {{$product->size3 . " | "}}
                    @endif
                    @if($product->size4 != null)
                        {{$product->size4 . " | "}}
                    @endif
                    @if($product->size5 != null)
                        {{$product->size5 . " | "}}
                    @endif
                    @if($product->size6 != null)
                        {{$product->size6}}
                    @endif
                </td>
                <td>{{
                    $product->active == 0 ? 'NO' : 'YES'
                    }}
                </td>
                <td>{{$product->updated_at}}</td>

                <td>
                    <a class="btn btn-primary btn-sm" href="/trangchu/admin/products/edit/{{ $product->id}} ">
                        <i class="fas fa-user-edit"></i>
                    </a>

                    <a class="btn btn-danger btn-sm" href="#"
                       onclick="removeRow('{{ $product->id }}' , '/trangchu/admin/products/destroy' )" >
                        <i class="fas fa-trash-alt"></i>
                    </a>


                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

{{--        {!! $products->links() !!}--}}
    <center>
        <ul class="pagi">
{{--            {{ $products->links() }}--}}
            <?php
            $sumTrang = $products->lastPage();
            for ($i = 1; $i <= $sumTrang; $i++){
            ?>
            <li><a href="/trangchu/admin/products/list?page={{$i}}">{{$i}}</a></li>
            <?php } ?>
            {{--                    <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
        </ul>

    </center>
{{--    <center>{{ $products->onEachSide(5)->links() }}</center>--}}
@endsection
