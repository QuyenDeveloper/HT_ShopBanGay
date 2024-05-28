<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Http\Requests\diachi\diachiRequest;
use App\Models\daichiKH;
use App\Models\donmua;
use App\Models\Hdahuy;
use App\Models\thongbao;
use App\Models\xacNhanDH;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Services\taikhoan\hosoService;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class taikhoanController extends Controller
{
    protected $hosoService;
    public function __construct(hosoService $hososervice)
    {
        $this->hosoService = $hososervice;
    }

    public function hoso(User $idKH){
//        dd($idKH);
        return view('web.CD_taikhoang.taikhoangcuatoi.hoso', [
            'title' => 'Tài khoản',
            'action' => 'hoso',
            'users' => $idKH,

        ]);
    }
    public function capnhathoso(Request $request, User $idKH){
//        dd($request->input());
        $request->validate([
            'name'=>'required'
        ],[
            'name.required' => Toastr::error('Cập nhật không thành công.', 'Không thành công', ["positionClass" => "toast-top-right"])
        ]);
        $resuts = $this->hosoService->capnhathoso( $request, $idKH);
        if ($resuts){
            Toastr::success('Cập nhật thành công.', 'Thành công', ["positionClass" => "toast-top-right"]);
        }else{
            Toastr::error('Cập nhật không thành công.', 'Không thành công', ["positionClass" => "toast-top-right"]);
        }

        return redirect()->back();
    }

    public function daichi(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.taikhoangcuatoi.diachi', [
            'title' => 'Tài khoản',
            'action' => 'diachi',
            'users' => $idKH,
            'DCs' => $this->hosoService->getDC($idKH),

        ]);
    }

    public function them_dia_chi(diachiRequest $request){
//        dd($request->input('loaiDC'));
        $result = $this->hosoService->them_dia_chi($request);

        Toastr::success('Thêm thành công.', 'Thành công', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
//        if ($result){
//             response()->json([
//                'error' => false,
//                'message' => 'Thành công',
//            ]);
//        }else{
//            response()->json([
//                'error' => true,
//                'message' => 'Không thành công!'
//            ]);
//        }

    }
    public function xoaDC(Request $request){
//        dd($request->input('idDC));

        $result = $this->hosoService->xoaDC($request->input('idDC'));
//        dd(xacNhanDH::where('idDchi', '=', $request->input('idDC'))->first());
        if ($result){
            Toastr::success('Xóa thành công.', 'Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }else{
            Toastr::error('Địa chỉ đang được sử dụng cho đơn hàng.', 'Không Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
//        if ($result){
//             return response()->json([
//                'error' => false,
//            ]);
//        }
//        return response()->json([
//            'error' => true,
//        ]);

    }

    public function ngan_hang(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.taikhoangcuatoi.nganhang', [
            'title' => 'Tài khoản',
            'action' => 'ngan_hang',
            'users' => $idKH,

        ]);
    }

    public function doi_MK(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.taikhoangcuatoi.doi_MK', [
            'title' => 'Tài khoản',
            'action' => 'DMK',
            'users' => $idKH,

        ]);
    }

    public function doiMK(User $idKH, Request $request){
//        dd($request->input());
        $request->validate([
            'MKC' => 'required',
            'MKM' => 'required',//|min:8
            'xn_MKM' => 'required|same:MKM',
        ], [
            'MKC.required' => 'Bạn chưa nhập mật khẩu củ!',
            'MKM.required' => 'Bạn chưa nhập mật khẩu mới!',
            'xn_MKM.required' => 'Bạn chưa nhập xác nhận mật khẩu!',
            'xn_MKM.same' => 'Xác nhận mật khẩu mới sai!',
//            'MKM.min' => 'Mật khẩu tối thiểu 8 ký tự!',
        ]);
//dd(Hash::make($idKH->password));
        if(password_verify($request->input('MKC'), $idKH->password)){

            $idKH->password = bcrypt($request->input('MKM'));
            $idKH->save();

//            $request->session()->flash('success', 'Đổi mật khẩu thành công!');
            Toastr::success('Đổi mật khẩu thành công.', 'Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }else{
            $request->session()->flash('error', 'Nhập mật khẩu củ không đúng!!');
//            Toastr::error('Nhập mật khẩu củ không đúng!', ' Không Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function thong_bao(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.thongbao', [
            'title' => 'Tài khoản',
            'action' => 'TB',
            'users' => $idKH,
            'thongbaos' => thongbao::where('idKH', '=', Auth::user()->id)->get()->sortByDesc('id'),

        ]);

    }

    public function don_mua1(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.donmua.xacnhan', [
            'title' => 'Tài khoản',
            'action' => 'DM',
            'chon' => 'chon1',
            'users' => $idKH,
            'xacnhans' => $this->hosoService->getxacnhan($idKH),
            'donmuas' => $this->hosoService->getdonmua($idKH),
            'sps' => $this->hosoService->getSP($idKH),

        ]);

    }
    public function don_mua2(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.donmua.cholayhang', [
            'title' => 'Tài khoản',
            'action' => 'DM',
            'chon' => 'chon2',
            'users' => $idKH,
            'layhangs' => $this->hosoService->getlayhang($idKH),
            'donmuas' => $this->hosoService->getdonmua($idKH),
            'sps' => $this->hosoService->getSP($idKH),

        ]);

    }
    public function don_mua3(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.donmua.danggiao', [
            'title' => 'Tài khoản',
            'action' => 'DM',
            'chon' => 'chon3',
            'users' => $idKH,
            'danggiaos' => $this->hosoService->getdanggiao($idKH),
            'donmuas' => $this->hosoService->getdonmua($idKH),
            'sps' => $this->hosoService->getSP($idKH),

        ]);

    }
    public function don_mua4(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.donmua.danhan', [
            'title' => 'Tài khoản',
            'action' => 'DM',
            'chon' => 'chon4',
            'users' => $idKH,
            'danggiaos' => $this->hosoService->getdanhan($idKH),
            'donmuas' => $this->hosoService->getdonmua($idKH),
            'sps' => $this->hosoService->getSP($idKH),

        ]);

    }

    public function don_mua5(User $idKH){
//        dd($this->hosoService->getDC($idKH));
        return view('web.CD_taikhoang.donmua.huydon', [
            'title' => 'Tài khoản',
            'action' => 'DM',
            'chon' => 'chon5',
            'users' => $idKH,
            'huydons' => $this->hosoService->gethuydon($idKH),
            'donmuas' => $this->hosoService->getdonmua($idKH),
            'sps' => $this->hosoService->getSP($idKH),

        ]);

    }

    public function ND_donhang1($idDM){
//        dd($this->hosoService->getSanpham($idDM));
        return view('web.CD_taikhoang.donmua.chitietdon', [
            'title' => 'Chi tiết đơn hàng',
            'vt' => $this->hosoService->getvt($idDM),
            'sanphams' =>$this->hosoService->getSanpham($idDM),
            'donmuas' =>$this->hosoService->getdonmuas($idDM),
            'khoSPs' => $this->hosoService->getkhoSP(),
            'diachis' => $this->hosoService->getDiachi(),

        ]);

    }



}
