<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Services\GioHang\GioHangService;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\taikhoan\hosoService;

class giohangController extends Controller
{
    protected $giohangService;
    protected $hosoService;

    public function __construct(GioHangService $gioHangservice, hosoService $hosoService)
    {
        $this->giohangService = $gioHangservice;
        $this->hosoService = $hosoService;
    }

    public function Them_Vao_Gio_Hang(Request $request){
//        dd($request->input());
        $idKH = Auth::user()->id;
        $result = $this->giohangService->Them_Vao_Gio_Hang($request, $idKH);
//        dd($results);
//        if ($result!=true){
//            Toastr::success('Thành công.', 'Hãy kiểm tra giỏ hàng của bạn!', ["positionClass" => "toast-top-center"]);
//        }else{
//            Toastr::error('Không thành công.', 'chưa chọn Size cho sản phẩm!', ["positionClass" => "toast-top-center"]);
//        }
        if ($result){
//            Toastr::success('Thành công.', 'Hãy kiểm tra giỏ hàng của bạn!', ["positionClass" => "toast-top-center"]);
            return response()->json([
                'error' => false,
//                'message' => 'Thành công',
            ]);
        }else{
//            Toastr::error('Không thành công.', 'chưa chọn Size cho sản phẩm!', ["positionClass" => "toast-top-center"]);
            return response()->json([
                'error' => true,
//                'message' => 'Không thành công!',
            ]);
        }




    }


    public function index_GHang(){
        return view('web.giohang.GioHang', [
            'title'=>'Giỏ hàng',
            'sanphams' =>$this->giohangService->getSp(),
            'khoSPs' => $this->giohangService->getkhoSP(),
        ]);
    }
    public function datHang(Request $request){
//        dd($request->input());
        return view('web.giohang.dathang', [
            'title' => 'Đặt hàng',
            'sanphams' =>$this->giohangService->getSp(),
            'khoSPs' => $this->giohangService->getkhoSP(),
            'diachis' => $this->giohangService->getDC(),
        ]);
    }
    public function XL_dathang(Request $request){
//        dd($request->input());
        if($request->input('diachi') == -1){
            return view('web.giohang.dathang', [
                'title' => 'Đặt hàng',
                'sanphams' =>$this->giohangService->getSp(),
                'khoSPs' => $this->giohangService->getkhoSP(),
                'diachis' => $this->giohangService->getDC(),
                $request->session()->flash('diachi', '*Chưa chọn địa chỉ nhận hàng!')
            ]);
        }else{
            $xet = $this->giohangService->xacnhanDH($request);
//            dd($xet);
            if ($xet){
                Toastr::success('Vui lòng chờ Shop xác nhận đơn của bạn', 'Thành công', ["positionClass" => "toast-top-right"]);
                return  redirect()->route('don_mua1', ['idKH' => Auth::user()->id]);
            }
        }
    }

    public function updateSL(Request $request){
//        dd($request->input());
        $result = $this->giohangService->updateSL($request);
        if ($result){
            return response()->json([
                'error' => false,
//                'message' => 'Thành công',
            ]);
        }
        return response()->json([
            'error' => true,
//            'message' => 'Không thành công!'
        ]);

    }
    public function xoaGH(Request $request){
//        dd($request->input());
        $result = $this->giohangService->xoaGH($request);
        if ($result){
            return response()->json([
                'error' => false,
//                'message' => 'Thành công',
            ]);
        }
        return response()->json([
            'error' => true,
//            'message' => 'Không thành công!'
        ]);
    }




}
