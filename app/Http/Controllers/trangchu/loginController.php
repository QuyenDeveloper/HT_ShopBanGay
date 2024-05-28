<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function index()
    {   Auth::logout();
        return view('web.admin.users.login', [
            'title' => 'Đăng Nhập Hệ Thống'

        ]);
    }

    public function store(Request $request){
//         dd($request ->input());
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'id' => $request->input('id'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            # code...
            return redirect()->route('admin');
        }

        $request->session()->flash('error', 'Email Hoặc password không đúng!!');
        return redirect()->route('loginadmin');
    }

}
