@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session()->has('error'))
    <div class="alert alert-danger">

        {{ session()->get('error') }}

    </div>
@endif

@if (session()->has('success'))
    <div class="alert alert-success">

        {{ session()->get('success') }}

    </div>
@endif

@if (session()->has('error_js'))
    <div class="alert alert-danger">
        <script>
            alert('{{ session()->get('error_js')}}');
        </script>

{{--                {{ session()->get('error') }}--}}

    </div>
@endif

@if (session()->has('success_js'))
    <div class="alert alert-success">
        <script>
            alert('{{ session()->get('success_js')}}');
        </script>

        {{--        {{ session()->get('success') }}--}}

    </div>
@endif
