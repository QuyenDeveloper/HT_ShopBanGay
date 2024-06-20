@extends('web.admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

    <div class="card card-primary">

        <!-- form start -->
        <form action="" method="post">
            <div class="card-body">

            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="menu">Tên Sản Phẩm</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nhập Tên Sản Phẩm...">
                </div>

                <div class=" col-sm-3">
                    <label for=""> Doanh Mục</label>
                        <select class="form-control"  name="menu_name1" >
                            <option value="-1">Chọn</option>
                            @foreach ($menus as $menu)
                                <option value="{{$menu -> name}}">{{$menu -> name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class=" col-sm-3">
                        <label  >Thể Loại</label>
                        <select class="form-control"  name="theloai" >
                            <option value="-1">Chọn</option>
                            @foreach ($theloais as $theloai)
                                <option value="{{$theloai -> name}}">{{$theloai -> name}}</option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="menu">Giá Gốc</label>
                    <input type="text" value="{{old('money')}}" class="form-control" name="money" id="sanphan">
                </div>

                <div class="form-group col-sm-6">
                    <label  >Giá Giảm</label>
                    <input type="text" value="0" class="form-control" name="money_sale" id="sanphan">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-8">
                    <label  >Thương hiệu</label>
                    <select class="form-control"  name="nhanhieu" >
                        <option value="-1">Chọn</option>
                        @foreach ($nhanhieus as $nhanhieu)
                            <option value="{{$nhanhieu -> name}}">{{$nhanhieu -> name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label>Số lượng</label>
                    <input type="number" value="0" class="form-control" name="soluong" id="soluong">
                </div>
            </div>



                <div class="form-group row">
                    <label  class="col-sm-12">Size(tối đa 6 Size)</label>
                    <input type="text" value="{{old('size1')}}" class="form-control col-sm-2" name="size1" id="size1">
                    <input type="text" value="{{old('size2')}}" class="form-control col-sm-2" name="size2" id="size2">
                    <input type="text" value="{{old('size3')}}" class="form-control col-sm-2" name="size3" id="size3">
                    <input type="text" value="{{old('size4')}}" class="form-control col-sm-2" name="size4" id="size4">
                    <input type="text" value="{{old('size5')}}" class="form-control col-sm-2" name="size5" id="size5">
                    <input type="text" value="{{old('size6')}}" class="form-control col-sm-2" name="size6" id="size6">
                </div>


                <div class="form-group">
                    <label  >Đặt trưng</label>
                    <textarea name="dattrung"  class="form-control">0{{old('description')}}</textarea>
                </div>

                <div class="form-group">
                    <label  >Mô Tả Chi Tiết</label>
                    <textarea name="content" id="content" class="form-control" style="height: 300px">{{old('content')}}</textarea>
                </div>

                <div class="form-group ">
                    <label class="" >Ảnh Sản Phẩm(tối đa 10 ảnh)</label>

                    <div class="row">
                        <div class="form-check" id="image_show1"></div>
                        <input type="hidden" name="anh1" id="anh1">
                        <input type="file" class="form-check col-sm-auto" id="upload1" accept="image/*">
                        <a href="#"
                           onclick="xoaAnh1()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show2">
                        </div>
                        <input type="hidden" name="anh2" id="anh2">
                        <input type="file" class="form-check col-sm-auto" id="upload2">
                        <a href="#"
                           onclick="xoaAnh2()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show3">
                        </div>
                        <input type="hidden" name="anh3" id="anh3">
                        <input type="file" class="form-check col-sm-auto" id="upload3">
                        <a href="#"
                           onclick="xoaAnh3()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show4">
                        </div>
                        <input type="hidden" name="anh4" id="anh4">
                        <input type="file" class="form-check col-sm-auto" id="upload4">
                        <a href="#"
                           onclick="xoaAnh4()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show5">
                        </div>
                        <input type="hidden" name="anh5" id="anh5">
                        <input type="file" class="form-check col-sm-auto" id="upload5">
                        <a href="#"
                           onclick="xoaAnh5()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show6">
                        </div>
                        <input type="hidden" name="anh6" id="anh6">
                        <input type="file" class="form-check col-sm-auto" id="upload6">
                        <a href="#"
                           onclick="xoaAnh6()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show7">
                        </div>
                        <input type="hidden" name="anh7" id="anh7">
                        <input type="file" class="form-check col-sm-auto" id="upload7">
                        <a href="#"
                           onclick="xoaAnh7()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show8">
                        </div>
                        <input type="hidden" name="anh8" id="anh8">
                        <input type="file" class="form-check col-sm-auto" id="upload8">
                        <a href="#"
                           onclick="xoaAnh8()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show9">
                        </div>
                        <input type="hidden" name="anh9" id="anh9">
                        <input type="file" class="form-check col-sm-auto" id="upload9">
                        <a href="#"
                           onclick="xoaAnh9()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>

                    <div class="row">
                        <div class="form-check" id="image_show10">
                        </div>
                        <input type="hidden" name="anh10" id="anh10">
                        <input type="file" class="form-check col-sm-auto" id="upload10">
                        <a href="#"
                           onclick="xoaAnh10()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                </div>



                <div class="form-group">
                    <label for=""> Kích Hoạt</label>
                    <div class="form-check form-radio">
                        <input class="form-control-input" value="1" type="radio" id="active" name="active" checked="">
                        <label for="active" class="form-check-label">Có</label>
                    </div>
                    <div class="form-check form-radio">
                        <input class="form-control-input" value="0" type="radio" id="no_active" name="active" >
                        <label for="no_active" class="form-check-label">Không</label>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
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
