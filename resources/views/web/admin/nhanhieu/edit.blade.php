@extends('web.admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

    <div class="card card-primary">

        <!-- form start -->
        <form action="" method="POST">
            <div class="card-body">

                {{--                @include('admin.alert')--}}
                <div class="form-group ">
                    <label for="menu">Tên thương hiệu</label>
                    <input type="text" name="name" value="{{$nhanhieu->name}}" class="form-control" placeholder="Nhập Tên Sản Phẩm...">
                </div>

                <div class="form-group">
                    <label  >logo</label>
                    <div class="row">
                        <input type="file" class="form-check col-sm-auto" id="upload">
                        <a href="#"
                           onclick="xoaAnh()"
                           style="color: red" class="col-sm-1">Xóa ảnh</a>
                    </div>
                    <br>
                    <div class="form-check" id="image_show">
                        <a href="{{$nhanhieu->logo}}" target="_blank">
                            <img style="height: 50px;" src="{{$nhanhieu->logo}}">
                        </a>
                    </div>
                    <input type="hidden" name="logo" id="logo" value="{{$nhanhieu->logo}}">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Sửa Thương hiệu</button>
            </div>
            @csrf
        </form>
    </div>


@endsection

@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'content' );
    </script>
@endsection
