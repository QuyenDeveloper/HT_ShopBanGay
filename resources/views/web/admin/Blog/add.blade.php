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
                <div class="form-group ">
                    <label for="menu">Tên Blog</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nhập Tên blog...">
                </div>

                <div class="form-group ">
                    <label  >Thương hiệu</label>
                    <select class="form-control"  name="loai" >
                        <option value="-1">Null</option>
                        @foreach ($nhanhieus as $nhanhieu)
                            <option value="{{$nhanhieu -> name}}">{{$nhanhieu -> name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label  >Nội dung</label>
                    <textarea name="content"  class="form-control" style="min-height: 300px;">
                        {{old('content')}}
                    </textarea>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label>Thời gian: </label> <br>
                        <input name="tgian" type="date" class="form-control">
                    </div>
                </div>
                <br>

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
                    </div>
                    <input type="hidden" name="anh1" id="anh1">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload2">
                        <a href="#"
                           onclick="xoaAnh2()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show2">
                    </div>
                    <input type="hidden" name="anh2" id="anh2">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload3">
                        <a href="#"
                           onclick="xoaAnh3()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show3">
                    </div>
                    <input type="hidden" name="anh3" id="anh3">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload4">
                        <a href="#"
                           onclick="xoaAnh4()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show4">
                    </div>
                    <input type="hidden" name="anh4" id="anh4">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload5">
                        <a href="#"
                           onclick="xoaAnh5()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show5">
                    </div>
                    <input type="hidden" name="anh5" id="anh5">
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">thêm blog</button>
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
