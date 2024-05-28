<div style="width:600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào {{$User->name}}</h2>
        <p>Email này để giúp bạn lấy lại mật khẩu tài khoản đã bị quên. </p>
        <p>Vui lòng click vào link dưới đây để đặt lại mật khẩu.</p>
        <p>Chú ý: mã xác nhận trong link chỉ có hiệu lực trong vòng 72 giờ. </p>
        <p>
            <a href="http://127.0.0.1:8000/trangchu/getpass/{{$User->id}}/{{$User->token}}" style="display:inline-block; background: green; color: #fff; padding: 7px 25px; font-weight:bold">Đặt lại mật khẩu</a>
        </p>
        {{--{{route('customer.getPass',['customer' => $User->id, 'token' => $User->token])}}--}}
    </div>
    <h3>AllStore</h3>
</div>
