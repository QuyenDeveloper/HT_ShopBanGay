<?php

namespace App\Http\Controllers\trangchu\users;

use App\Http\Controllers\Controller;
use App\Models\Hdahuy;
use App\Models\thongbao;
use App\Models\xacNhanDH;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class thongbaoController extends Controller
{

    public function thongbaoadmin(){
        return view('web.admin.thong_bao.thongbao_admin',[
            'title'=>'Thông báo',
            'thongbaos' => thongbao::where('idKH', '=', '1')->get()->sortByDesc('id'),
        ]);
    }

    public function xacthucdaxem(thongbao $idTB){
        try {
            $idTB->daxem = 'rồi';
            $idTB->save();

            return redirect()->back();
        }catch (\Exception $err){
            return redirect()->back();
        }

    }



}
