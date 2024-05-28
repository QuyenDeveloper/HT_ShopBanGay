@extends('web.admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<div class="card card-primary">

    <!-- form start -->
    <form action="" method="POST">
      <div class="card-body">

{{--        @include('web.admin.alert')--}}

        <div class="form-group">
          <label for="menu">Tên Danh Mục</label>
          <input type="text" name="name" class="form-control" placeholder="Nhập Tên Danh Mục...">
        </div>

        <div class="form-group">
            <label  >Danh Mục</label>
            <select class="form-control" name="parent_id" >
                <option value="0">Danh Mục Cha</option>
                @foreach ($menus as $menu)
                    <option value="{{$menu -> id}}">{{$menu -> name}}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <label  >Mô Tả</label>
            <textarea name="description" class="form-control">

            </textarea>
          </div>

          <div class="form-group">
            <label  >Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control">

            </textarea>
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
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
      </div>
{{--        _tokin--}}
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
