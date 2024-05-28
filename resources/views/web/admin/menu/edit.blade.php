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

                <div class="form-group">
                    <label for="menu">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control" value="{{$menu->name}}">
                </div>

                <div class="form-group">
                    <label  >Danh Mục</label>
                    <select class="form-control" name="parent_id" >
                        <option value="0"{{ $menu->parent_id ==  0 ? 'selected' : ''}}>Danh Mục Cha</option>
                        @foreach ($menus as $menuParent)
                            <option value="{{$menuParent -> id}}"
                                {{ $menu->parent_id ==  $menuParent -> id ? 'selected' : ''}}>
                                {{$menuParent -> name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label  >Mô Tả</label>
                    <textarea name="description" class="form-control">
                        {{$menu->description}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label  >Mô Tả Chi Tiết</label>
                    <textarea name="content" id="content" class="form-control">
                         {{$menu->content}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for=""> Kích Hoạt</label>
                    <div class="form-check form-radio">
                        <input class="form-control-input" value="1" {{ $menu->active ==  1 ? 'checked=""' : ''}} type="radio" id="active" name="active" >
                        <label for="active" class="form-check-label">Có</label>
                    </div>
                    <div class="form-check form-radio">
                        <input class="form-control-input" value="0" {{ $menu->active ==  0 ? 'checked=""' : ''}} type="radio" id="no_active" name="active" >
                        <label for="no_active" class="form-check-label">Không</label>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
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
