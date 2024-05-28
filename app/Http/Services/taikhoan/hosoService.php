<?php
namespace App\Http\Services\taikhoan;

use App\Models\daichiKH;
use App\Models\danggiao;
use App\Models\danhan;
use App\Models\donmua;
use App\Models\GioHang;
use App\Models\Hdahuy;
use App\Models\layhang;
use App\Models\Product;
use App\Models\xacNhanDH;
use Illuminate\Support\Facades\Auth;

class hosoService
{

    public function capnhathoso( $request, $idKH){
        try {
            $idKH->avt = (string) $request->input('avt');
            $idKH->name = (string) $request->input('name');
            $idKH->email = (string) $request->input('email');
            $idKH->sdt = (string) $request->input('sdt');
            $idKH->giotinh = (string) $request->input('giotinh');
            $idKH->ngaysinh = (string) $request->input('ngSinh');
            $idKH->save();

//            $request->session()->flash('success_js', 'update Thành Công!!');
            return true;
        }catch (\Exception $err){
//            $request->session()->flash('error_js', 'update không Thành Công!!');
            return false;
        }
    }

    public function them_dia_chi($request){
        try {
            daichiKH::create([
                'idKH' => $request->input('idKH'),
                'hoten' => $request->input('hoten'),
                'sdt' => $request->input('sdt'),
                'daichi' => $request->input('daichi'),
                'loaiDC' => $request->input('loaiDC'),
            ]);


            return true;
        }catch (\Exception $err){
            $request->session()->flash('error_js', 'Không Thành Công!!');
            return false;
        }
    }

    public function getDC($idKH){
        return daichiKH::where('idKH', '=', $idKH->id)->get();
    }

    public function xoaDC($id){
        try {
//            $don = xacNhanDH::where('idDchi', '=', $id)->first();
//            dd($don->idDchi);
            if (xacNhanDH::where('idDchi', '=', $id)->first() == null){
                daichiKH::where('id', '=', $id)->delete();
                return true;
            }
            return false;
        }catch (\Exception $err){
//            $request->session()->flash('error', $err -> getMessage());
            return false;
        }
    }

    public function getxacnhan($idKH){
        return xacNhanDH::where('idKH', '=', $idKH->id)->get()->sortByDesc('id');
    }
    public function getlayhang($idKH){
        return layhang::where('idKH', '=', $idKH->id)->get()->sortByDesc('id');
    }
    public function getdanggiao($idKH){
        return danggiao::where('idKH', '=', $idKH->id)->get()->sortByDesc('id');
    }
    public function getdanhan($idKH){
        return danhan::where('idKH', '=', $idKH->id)->get()->sortByDesc('id');
    }

    public function getvt($idDM){
        $xacNhanDH = xacNhanDH::where('idDMua', '=', $idDM)->first();
        if($xacNhanDH !=null) {return 'xn';}

        $layhang = layhang::where('idDMua', '=', $idDM)->first();
        if($layhang !=null) {return 'cld';}

        $danggiao = danggiao::where('idDMua', '=', $idDM)->first();
        if($danggiao !=null) {return 'dg';}

        $danhan = danhan::where('idDMua', '=', $idDM)->first();
        if($danhan !=null) {return 'dn';}
    }
    public function getSanpham($idDM){
        $xacNhanDH = xacNhanDH::where('idDMua', '=', $idDM)->first();
        if($xacNhanDH !=null) {return $xacNhanDH;}

        $layhang = layhang::where('idDMua', '=', $idDM)->first();
        if($layhang !=null) {return $layhang;}

        $danggiao = danggiao::where('idDMua', '=', $idDM)->first();
        if($danggiao !=null) {return $danggiao;}

        $danhan = danhan::where('idDMua', '=', $idDM)->first();
        if($danhan !=null) {return $danhan;}
    }
    public function getdonmuas($idDM){
        return donmua::where('idDMua', '=', $idDM)->get();
    }
    public function getkhoSP(){
        return Product::where('id', '!=', null)->get();
    }
    public function getDiachi(){
        return daichiKH::where('idKH', '=', Auth::user()->id)->get();
    }

    public function getdonmua($idKH){
        return donmua::where('idKH', '=', $idKH->id)->get();
    }
    public function getSP($idKH){
        return Product::where('id', '!=', null)->get();
    }
    public function gethuydon($idKH){
        return Hdahuy::where('idKH', '=', $idKH->id)->get()->sortByDesc('id');
    }

}
