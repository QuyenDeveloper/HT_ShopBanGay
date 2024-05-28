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
                    <input type="text" name="name" value="{{$blogs->name}}" class="form-control" placeholder="Nhập Tên blog...">
                </div>

                <div class="form-group ">
                    <label  >Thương hiệu</label>
                    <select class="form-control"  name="loai" >
                        <option value="-1">Null</option>
                        @foreach ($nhanhieus as $nhanhieu)
                            <option value="{{$nhanhieu -> name}}" {{($blogs->loai == $nhanhieu -> name)? 'selected' :''}}>{{$nhanhieu -> name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label  >Nội dung</label>
                    <textarea name="content"  class="form-control" style="min-height: 300px;">
                        {{$blogs->content}}
                    </textarea>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label>Thời gian: </label> <br>
                        <input name="tgian" type="date" class="form-control" value="{{$blogs->tgian}}">
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
                        <a href="{{$blogs->anh1}}" target="_blank">
                            <img src="{{$blogs->anh1}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh1" id="anh1" value="{{$blogs->anh1}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload2">
                        <a href="#"
                           onclick="xoaAnh2()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show2">
                        <a href="{{$blogs->anh2}}" target="_blank">
                            <img src="{{$blogs->anh2}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh2" id="anh2" value="{{$blogs->anh2}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload3">
                        <a href="#"
                           onclick="xoaAnh3()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show3">
                        <a href="{{$blogs->anh3}}" target="_blank">
                            <img src="{{$blogs->anh3}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh3" id="anh3" value="{{$blogs->anh3}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload4">
                        <a href="#"
                           onclick="xoaAnh4()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show4">
                        <a href="{{$blogs->anh4}}" target="_blank">
                            <img src="{{$blogs->anh4}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh4" id="anh4" value="{{$blogs->anh4}}">
                    <br>

                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload5">
                        <a href="#"
                           onclick="xoaAnh5()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show5">
                        <a href="{{$blogs->anh5}}" target="_blank">
                            <img src="{{$blogs->anh5}}" width="100px" />
                        </a>
                    </div>
                    <input type="hidden" name="anh5" id="anh5" value="{{$blogs->anh5}}">
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập nhật blog</button>
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
