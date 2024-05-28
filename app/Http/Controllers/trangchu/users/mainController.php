<?php

namespace App\Http\Controllers\trangchu\users;

use App\Http\Controllers\Controller;
use App\Models\danhan;
use App\Models\thongbao;
use App\Models\User;
use App\Models\Yeuthich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public function index(){
//        dd(thongbao::where('idKH', '=', 1)->get());
        if (Auth::user()->id ==1){
            return view('web.admin.home', [
                'title'=>'Trang quản trị Admin',
                'tbcds' => thongbao::where('idKH', '=', 1)->get(),
                'yeuthichs'=> Yeuthich::where('id', '!=', null)->get(),
                'dabans'=>danhan::where('id', '!=', null)->get(),
                'taikhoans'=>User::where('id', '!=', 1)->get(),
            ]);
        }else return redirect() -> back();

    }
}
