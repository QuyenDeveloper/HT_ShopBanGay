<?php
namespace App\Http\Services\GioHang;

use App\Models\GioHang;
use App\Models\Product;
use App\Models\User;
use App\Models\Yeuthich;
use App\Models\daichiKH;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\xacNhanDH;
use App\Models\donmua;
use App\Models\thongbao;
use mysql_xdevapi\Exception;

class GioHangService
{
    public function Xet($request){
        if ($request->input('sizeSP_KHcan') == -1){
            $request->session()->flash('error', 'Vui lòng chọn Size!!');
            return false;
        }
        return true;
    }
    public function trunglap($request, $idKH)
    {
        $id = $request->input('idSP');
        $tims = GioHang::where('ID_SP','=', $id)->get();
        foreach ($tims as $tim){
//            dd($tims);
            if ($tim->sizeSP_kh == $request->input('sizeSP_KHcan') && $tim->ID_KH ==  $idKH){
                $SoLuong = $tim->SLSP_KH + $request->input('SLSP_KHcan');
//                dd($tim);
                try {
                    $tim->SLSP_KH = (int) $SoLuong;
                    $tim->save();
                    return true;
                }catch (\Exception $err){
                    $request->session()->flash('error', $err -> getMessage());
                    return false;
                }

            }
//            else{
//                try {
//                    GioHang::create([
//                        'ID_KH'=> $request->input('idKH'),
//                        'ID_SP'=> $request->input('idSP'),
//                        'sizeSP_kh'=> $request->input('sizeSP_KHcan'),
//                        'SLSP_KH'=> $request->input('SLSP_KHcan'),
//                    ]);
//                    return true;
//                }catch (\Exception $err){
//                    $request->session()->flash('error', $err -> getMessage());
//                    return false;
//                }
//            }
        }
    }
    public function Them_Vao_Gio_Hang($request, $idKH){
        $Xet = $this->Xet($request);
        if($Xet === false) return  false;

        $trung = $this->trunglap($request, $idKH);

        if ($trung == true){
            return true;
        }else{
            try {
                GioHang::create([
                    'ID_KH'=> $idKH,
                    'ID_SP'=> $request->input('idSP'),
                    'sizeSP_kh'=> $request->input('sizeSP_KHcan'),
                    'SLSP_KH'=> $request->input('SLSP_KHcan'),
                ]);
                return true;
            }catch (\Exception $err){
                $request->session()->flash('error', $err -> getMessage());
                return false;
            }
        }
    }


    public function updateSL($request){
//        $id = $request->input('idSPGH');
        $tims = GioHang::where('id','=', $request->input('idSPGH'))->get();

        foreach ($tims as $tim){
//            dd($tim->SLSP_KH);
//            if ($tims->sizeSP_kh == $request->input('sizeSP_KHcan') && $tim->ID_KH == $request->input('idKH')){

                try {
                    $tim->SLSP_KH = (int) $request->input('SLSP_KHcan');
                    $tim->save();

                    return true;
                }catch (\Exception $err){
                    $request->session()->flash('error', $err -> getMessage());
                    return false;
                }

//            }
        }
    }
    public function xoaGH($request){
        try {
            GioHang::where('id', '=', $request->input('id'))->delete();

            return true;
        }catch (\Exception $err){
            $request->session()->flash('error', $err -> getMessage());
            return false;
        }
    }

    public function getSp(){
        return GioHang::where('id', '!=', null)->get();
    }

    public function getkhoSP(){
        return Product::where('id', '!=', null)->get();
    }

    public function getDC(){
        return daichiKH::where('idKH', '=', Auth::user()->id)->get();
    }


    //đặt hàng

    public function xacnhanDH($request){
        $idDM = strtoupper(Str::random(10));
//        dd($idDM);

        try {
            xacNhanDH::create([
                'idKH' => $request->input('idKH'),
                'idDMua' => $idDM,
                'idDchi' => $request->input('diachi'),
                'loinhan' => $request->input('loinhan'),
            ]);
        }catch (\Exception $err){
            return false;
        }

        $kh = User::where('id', '=', $request->input('idKH'))->first();
        $noidung_admin = '"'.$kh->name.'" đã khởi tạo đơn hàng có mã: "'. $idDM.'"';
        thongbao::create([
            'idKH' => '1',
            'idDM' => $idDM,
            'tieude' => 'Có đơn hàng đang chờ xác nhận',
            'noidung' => $noidung_admin,
            'daxem' => 'chưa',
        ]);

        $SPGHs = GioHang::where('ID_KH', '=',  $request->input('idKH'))->get();
        foreach ($SPGHs as $SPGH){
            try {
                donmua::create([
                    'idKH' => $request->input('idKH'),
                    'idDMua' => $idDM,
                    'ID_SP' => $SPGH->ID_SP,
                    'sizeSP_kh' => $SPGH->sizeSP_kh,
                    'SLSP_KH' => $SPGH->SLSP_KH,
                ]);
                GioHang::where('ID_KH', '=',  $request->input('idKH'))->delete();

            }catch (\Exception $err){
                return false;
            }
        }

        return true;

    }

}
