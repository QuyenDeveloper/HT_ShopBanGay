@extends('web.admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>


@endsection

@section('content')

    <div class="card card-primary">

        <!-- form start -->
        <form action="" method="post">
            <div class="card-body">

                {{--                @include('admin.alert')--}}
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name" value="{{$products->name}}" class="form-control" placeholder="Nhập Tên Sản Phẩm...">
                    </div>

                    <div class=" col-sm-3">
                        {{--                    <label  >Doanh Mục</label>--}}
                        {{--                    <select class="form-control"  name="menu_name" >--}}
                        {{--                        <option value="-1">Null</option>--}}
                        {{--                        @foreach ($menus as $menu)--}}
                        {{--                            <option value="{{$menu -> id}}">{{$menu -> name}}</option>--}}
                        {{--                        @endforeach--}}
                        {{--                    </select>--}}
                        <label for=""> Doanh Mục:  </label>
                        <select class="form-control"  name="menu_name1" >
                            @foreach ($menus as $menu)
                                <option value="{{$menu -> name}}" {{($products->menu_name1 == $menu -> name)? 'selected' :''}}>{{$menu -> name}}</option>
                            @endforeach
                        </select>
                        {{--                    <div class="form-check form-radio">--}}
                        {{--                        <input class="form-control-input" value="0" type="radio" id="no_active" name="active" >--}}
                        {{--                        <label for="no_active" class="form-check-label">Không</label>--}}
                        {{--                    </div>--}}
                    </div>
                    <div class=" col-sm-3">
                        <label  >Thể Loại</label>
                        <select class="form-control"  name="theloai" >
                            <option value="-1">Null</option>
                            @foreach ($theloais as $theloai)
                                <option value="{{$theloai -> name}}" {{($products->theloai == $theloai -> name)? 'selected' :''}}>{{$theloai -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="menu">Giá Gốc</label>
                        <input type="number" value="{{$products->money}}" class="form-control" name="money" id="sanphan">
                    </div>

                    <div class="form-group col-sm-6">
                        <label  >Giá Giảm</label>
                        <input type="number" value="{{$products->money_sale}}" class="form-control" name="money_sale" id="sanphan">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-8">
                        <label  >Thương hiệu</label>
                        <select class="form-control"  name="nhanhieu" >
                            <option value="-1">Null</option>
                            @foreach ($nhanhieus as $nhanhieu)
                                <option value="{{$nhanhieu -> name}}" {{($products->nhanhieu == $nhanhieu -> name)? 'selected' :''}}>{{$nhanhieu -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Số lượng</label>
                        <input type="number" value="{{$products->soluong}}" class="form-control" name="soluong" id="soluong">
                    </div>
                </div>


                <div class="form-group row">
                    <label  class="col-sm-12">Size(tối đa 6 Size)</label>
                    <input type="number" value="{{$products->size1}}" class="form-control col-sm-2" name="size1" id="size1">
                    {{--                    <select class="form-control col-sm-2"  name="size1" >--}}
                    {{--                        <option value="-1">Null</option>--}}
                    {{--                        @foreach ($sizes as $size)--}}
                    {{--                             <option value="{{$size -> size}}">{{$size -> size}}</option>--}}
                    {{--                        @endforeach--}}
                    {{--                    </select>--}}
                    <input type="number" value="{{$products->size2}}" class="form-control col-sm-2" name="size2" id="size2">
                    {{--                    <select class="form-control col-sm-2"  name="size2" >--}}
                    {{--                        <option value="-1">Null</option>--}}
                    {{--                        @foreach ($sizes as $size)--}}
                    {{--                            <option value="{{$size -> size}}">{{$size -> size}}</option>--}}
                    {{--                        @endforeach--}}
                    {{--                    </select>--}}
                    <input type="number" value="{{$products->size3}}" class="form-control col-sm-2" name="size3" id="size3">
                    {{--                    <select class="form-control col-sm-2"  name="size3" >--}}
                    {{--                        <option value="-1">Null</option>--}}
                    {{--                        @foreach ($sizes as $size)--}}
                    {{--                            <option value="{{$size -> size}}">{{$size -> size}}</option>--}}
                    {{--                        @endforeach--}}
                    {{--                    </select>--}}
                    <input type="number" value="{{$products->size4}}" class="form-control col-sm-2" name="size4" id="size4">
                    {{--                    <select class="form-control col-sm-2"  name="size4" >--}}
                    {{--                        <option value="-1">Null</option>--}}
                    {{--                        @foreach ($sizes as $size)--}}
                    {{--                            <option value="{{$size -> size}}">{{$size -> size}}</option>--}}
                    {{--                        @endforeach--}}
                    {{--                    </select>--}}
                    <input type="number" value="{{$products->size5}}" class="form-control col-sm-2" name="size5" id="size5">
                    {{--                    <select class="form-control col-sm-2"  name="size5" >--}}
                    {{--                        <option value="-1">Null</option>--}}
                    {{--                        @foreach ($sizes as $size)--}}
                    {{--                            <option value="{{$size -> size}}">{{$size -> size}}</option>--}}
                    {{--                        @endforeach--}}
                    {{--                    </select>--}}
                    <input type="number" value="{{$products->size6}}" class="form-control col-sm-2" name="size6" id="size6">
                    {{--                    <select class="form-control col-sm-2"  name="size6" >--}}
                    {{--                        <option value="-1">Null</option>--}}
                    {{--                        @foreach ($sizes as $size)--}}
                    {{--                            <option value="{{$size -> size}}">{{$size -> size}}</option>--}}
                    {{--                        @endforeach--}}
                    {{--                    </select>--}}
                </div>


                <div class="form-group">
                    <label  >Đặt trưng</label>
                    <textarea name="dattrung"  class="form-control">
                        {{$products->dattrung}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label  >Mô Tả Chi Tiết</label>
                    <textarea name="content" id="content" class="form-control" style="height: 300px">
                        {{$products->content}}
                    </textarea>
                </div>

                <div class="form-group ">
                    <label class="" >Ảnh Sản Phẩm(tối đa 10 ảnh)</label>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload1">
                        <a href="#"
                           onclick="xoaAnh1()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show1">
                        <a href="{{$products->anh1}}" target="_blank">
                            <img src="{{$products->anh1}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh1" id="anh1" value="{{$products->anh1}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload2">
                        <a href="#"
                           onclick="xoaAnh2()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show2">
                        <a href="{{$products->anh2}}" target="_blank">
                            <img src="{{$products->anh2}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh2" id="anh2" value="{{$products->anh2}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload3">
                        <a href="#"
                           onclick="xoaAnh3()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show3">
                        <a href="{{$products->anh3}}" target="_blank">
                            <img src="{{$products->anh3}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh3" id="anh3" value="{{$products->anh3}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload4">
                        <a href="#"
                           onclick="xoaAnh4()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show4">
                        <a href="{{$products->anh4}}" target="_blank">
                            <img src="{{$products->anh4}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh4" id="anh4" value="{{$products->anh4}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload5">
                        <a href="#"
                           onclick="xoaAnh5()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show5">
                        <a href="{{$products->anh5}}" target="_blank">
                            <img src="{{$products->anh5}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh5" id="anh5" value="{{$products->anh5}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload6">
                        <a href="#"
                           onclick="xoaAnh6()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show6">
                        <a href="{{$products->anh6}}" target="_blank">
                            <img src="{{$products->anh6}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh6" id="anh6" value="{{$products->anh6}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload7">
                        <a href="#"
                           onclick="xoaAnh7()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show7">
                        <a href="{{$products->anh7}}" target="_blank">
                            <img src="{{$products->anh7}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh7" id="anh7" value="{{$products->anh7}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload8">
                        <a href="#"
                           onclick="xoaAnh8()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show8">
                        <a href="{{$products->anh8}}" target="_blank">
                            <img src="{{$products->anh8}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh8" id="anh8" value="{{$products->anh8}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload9">
                        <a href="#"
                           onclick="xoaAnh9()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show9">
                        <a href="{{$products->anh9}}" target="_blank">
                            <img src="{{$products->anh9}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh9" id="anh9" value="{{$products->anh9}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload10">
                        <a href="#"
                           onclick="xoaAnh10()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show10">
                        <a href="{{$products->anh10}}" target="_blank">
                            <img src="{{$products->anh10}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh10" id="anh10" value="{{$products->anh10}}">
                </div>



                <div class="form-group">
                    <label for=""> Kích Hoạt</label>
                    <div class="form-check form-radio">
                        <input class="form-control-input" value="1" type="radio" id="active" name="active" {{($products->active == 1)? 'checked=""' :''}}>
                        <label for="active" class="form-check-label">Có</label>
                    </div>
                    <div class="form-check form-radio">
                        <input class="form-control-input" value="0" type="radio" id="no_active" name="active" {{($products->active == 0)? 'checked=""' :''}}>
                        <label for="no_active" class="form-check-label">Không</label>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
            </div>
            @csrf
        </form>
    </div>


@endsection

@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        // CKEDITOR.replace( 'content' );
    </script>
@endsection
