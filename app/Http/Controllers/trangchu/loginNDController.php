<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Http\Requests\dangky\dangkyRequest;
use App\Http\Requests\dangnhap\dangnhapRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class loginNDController extends Controller
{
    //
    public function login()
    {
        return view('web.login.login', [
            'title' => 'Đăng nhập '
        ]);
    }
    public function Register()
    {
        return view('web.login.Register', [
            'title' => ' Đăng ký'
        ]);
    }

    public function postDangky(dangkyRequest $request)
    {
//        dd($request->input());
        $password = $request->input('password');
        $password1 = $request->input('password1');
        if ($password != $password1){
            $request->session()->flash('error', 'Nhập lại password sai!!');
            return redirect()->back();
        }
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('login');
    }

    public function postDangnhap(dangnhapRequest $request){
//        dd($request->input());

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            # code...
            return redirect()->route('trangchu');
        }

        $request->session()->flash('error', 'Email Hoặc password không đúng!!');
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect() -> back();
    }

    public function quenMK()
    {
        return view('web.login.quenMK', [
            'title' => ' Quên MK'
        ]);
    }
    public function postquenMK(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users'
        ], [
            'email.required' => 'Bạn chưa nhập email!',
            'email.exists' => 'Email không tồn tại trong hệ thống!',
        ]);

        $User = User::where('email', $request->email)->first();
        $token = strtoupper(Str::random(10));
//        $User -> update(['token'=>$token]);
        $User->token = $token;
        $User->save();

        Mail::send('web.login.ndsend', compact('User'), function ($email) use ($User) {
            $email->subject('ALLStore Lấy lại mật khẩu tài khoản');
            $email->to($User->email, $User->name);
        });
         $request->session()->flash('success', 'Vui lòng kiểm tra mail của bạn!');
         return redirect()->back();
    }
    public function getpass(User $id, $token, Request $request){
//        dd($id);
        if($id->token == $token){
            return view('web.login.datlaipass', [
                'title' => 'Đổi mật khẩu',

            ]);
        }else{
            return view('web.login.quenMK', [
                'title' => ' Quên MK',
                $request->session()->flash('error', 'Mã xác thực của bạn không hợp lệ!'),
            ]);
        }

    }

    public function postgetpass(User $id, $token, Request $request){
        $request->validate([
            'password' => 'required',
            'password1' => 'required|same:password',
        ], [
            'password.required' => 'Bạn chưa nhập mật khẩu mới!',
            'password1.required' => 'Bạn chưa nhập xác nhận mật khẩu!',
            'password1.same' => 'Xác nhận mật khẩu mới sai!',
        ]);

        $id->password = bcrypt($request->input('password'));
        $id->save();
        return redirect()->route('login');

    }


}
