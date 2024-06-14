<?php

namespace App\Http\Controllers\trangchu\users;

use App\Http\Controllers\Controller;
use App\Models\danggiao;
use App\Models\danhan;
use App\Models\Hdahuy;
use App\Models\layhang;
use App\Models\thongbao;
use App\Models\xacNhanDH;
use App\Models\Product;
use App\Models\donmua;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Services\donhang\donhangService;
use Illuminate\Support\Facades\Auth;

class donhangController extends Controller
{
    //
    protected $donhangService;
    public function __construct(donhangService $donhangService)
    {
        $this->donhangService=$donhangService;
    }

    public function xacnhan(){
        return view('web.admin.donhang.xacnhan_admin', [
            'title'=>'Xác nhận đơn',
            'xacnhans' => $this->donhangService->getxacnhan(),
            'donmuas' => $this->donhangService->getdonmua(),
            'sps' => $this->donhangService->getSP(),
            'ngdungs' => $this->donhangService->ngdung(),
            'diachis' => $this->donhangService->getDC(),
        ]);
    }

    public function xl_xacnhan($idDM){
        try {
            $xn = xacNhanDH::where('idDMua', '=', $idDM)->first();
            $ngdung = User::where('id', '=', $xn->idKH)->first();

            $tieude = 'Đơn hàng "'.$idDM.'" đã được xác nhận';
            $noidung= 'Người gửi đang chuẩn bị đơn hàng. Vui lòng kiểm tra thời gian nhận hàng dự kiến trong phần chi tiết đơn hàng nhé!';
//            dd($xn->idKH,$xn->idDMua,$xn->idDchi,$xn->loinhan,);

            layhang::create([
                'idKH' => $xn->idKH,
                'idDMua' => $xn->idDMua,
                'idDchi' => $xn->idDchi,
                'loinhan' => $xn->loinhan,
            ]);
            thongbao::create([
                'idKH' => $ngdung->id,
                'idDM' => $idDM,
                'tieude' => $tieude,
                'noidung' => $noidung,
                'daxem' => 'chưa',
            ]);

            xacNhanDH::where('idDMua', '=', $idDM)->delete();

            Toastr::success($tieude, 'Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }catch (\Exception $err){
            Toastr::error('Đơn hàng chưa được xác nhận.', 'Không thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }

    }

    public function layhang(){
        return view('web.admin.donhang.layhang_admin', [
            'title'=>'Đơn chuẩn bị giao',
            'layhangs' => $this->donhangService->getlayhang(),
            'donmuas' => $this->donhangService->getdonmua(),
            'sps' => $this->donhangService->getSP(),
            'ngdungs' => $this->donhangService->ngdung(),
            'diachis' => $this->donhangService->getDC(),
        ]);
    }

    public function xl_chuyengiao($idDM){
        try {
            $xn = layhang::where('idDMua', '=', $idDM)->first();
            $ngdung = User::where('id', '=', $xn->idKH)->first();

            $tieude = 'Đơn hàng "'.$idDM.'" đang vận chuyển!';
            $noidung= 'Đơn hàng "'.$idDM.'" với mã vận chuyển đã được nhân viên giao cho đơn vị vận chuyển.';
//            dd($xn->idKH,$xn->idDMua,$xn->idDchi,$xn->loinhan,);

            danggiao::create([
                'idKH' => $xn->idKH,
                'idDMua' => $xn->idDMua,
                'idDchi' => $xn->idDchi,
                'loinhan' => $xn->loinhan,
                'xndanhan' => 'chưa',
            ]);
            thongbao::create([
                'idKH' => $ngdung->id,
                'idDM' => $idDM,
                'tieude' => $tieude,
                'noidung' => $noidung,
                'daxem' => 'chưa',
            ]);

            layhang::where('idDMua', '=', $idDM)->delete();

            Toastr::success($tieude, 'Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }catch (\Exception $err){
            Toastr::error('Đơn hàng chưa được xác nhận.', 'Không thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }

    }


    public function danggiao(){
        return view('web.admin.donhang.giaothanhcong_admin', [
            'title'=>'Hàng đang giao',
            'danggiaos' => $this->donhangService->getdanggiao(),
            'donmuas' => $this->donhangService->getdonmua(),
            'sps' => $this->donhangService->getSP(),
            'ngdungs' => $this->donhangService->ngdung(),
            'diachis' => $this->donhangService->getDC(),
        ]);
    }
    public function xl_giaothanhcong($idDM){
        try {
            $xn = danggiao::where('idDMua', '=', $idDM)->first();
            $ngdung = User::where('id', '=', $xn->idKH)->first();

            $tieude = 'Xác nhận đã nhận hàng';
            $noidung= 'Vui lòng chọn "đã nhận được hàng" cho đơn"'.$idDM.'" nếu bạn hài lòng với tất cả sản phẩm và không có nhu cầu trả hàng/ hoàn tiền.';
//            dd($xn->idKH,$xn->idDMua,$xn->idDchi,$xn->loinhan,);


            $xn->xndanhan = 'rồi';
            $xn->save();


            thongbao::create([
                'idKH' => $ngdung->id,
                'idDM' => $idDM,
                'tieude' => $tieude,
                'noidung' => $noidung,
                'daxem' => 'chưa',
            ]);

//            danggiao::where('idDMua', '=', $idDM)->delete();

            Toastr::success($tieude, 'Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }catch (\Exception $err){
            Toastr::error('Đơn hàng chưa được xác nhận.', 'Không thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }

    }
    public function xl_danhan($idDM){
        try {
            $xn = danggiao::where('idDMua', '=', $idDM)->first();
            $ngdung = User::where('id', '=', $xn->idKH)->first();

            $tieude = 'Đơn "'.$idDM.'" xác nhận đã nhận hàng';
            $noidung= 'Vui lòng chọn "đã nhận được hàng" cho đơn"'.$idDM.'" nếu bạn hài lòng với tất cả sản phẩm và không có nhu cầu trả hàng/ hoàn tiền.';
//            dd($xn->idKH,$xn->idDMua,$xn->idDchi,$xn->loinhan,);

            danhan::create([
                'idKH' => $xn->idKH,
                'idDMua' => $xn->idDMua,
                'idDchi' => $xn->idDchi,
                'loinhan' => $xn->loinhan,
                'xndanhan' => 'chưa',
            ]);

            thongbao::create([
                'idKH' => $ngdung->id,
                'idDM' => $idDM,
                'tieude' => $tieude,
                'noidung' => $noidung,
                'daxem' => 'chưa',
            ]);

            danggiao::where('idDMua', '=', $idDM)->delete();

            Toastr::success($tieude, 'Thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }catch (\Exception $err){
            Toastr::error('Đơn hàng chưa được xác nhận.', 'Không thành công', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }

    }


    public function dagiao(){
        return view('web.admin.donhang.dagiao_admin', [
            'title'=>'Đơn đã giao',
            'dagiaos' => $this->donhangService->getdagiao(),
            'donmuas' => $this->donhangService->getdonmua(),
            'sps' => $this->donhangService->getSP(),
            'ngdungs' => $this->donhangService->ngdung(),
            'diachis' => $this->donhangService->getDC(),
        ]);
    }
    public function donhuy(){
        return view('web.admin.donhang.donhuy', [
            'title'=>'Đơn đã bị hủy',
            'donhuys' => $this->donhangService->getdonhuy(),
            'donmuas' => $this->donhangService->getdonmua(),
            'sps' => $this->donhangService->getSP(),
            'ngdungs' => $this->donhangService->ngdung(),
            'diachis' => $this->donhangService->getDC(),
        ]);
    }

    public function huy_don($idDM){
        if($this->donhangService->huyDonXacNhan($idDM)){
            return redirect()->route('don_mua5', ['idKH' => Auth::user()->id]);
        }else{
            return redirect()->back();
        }
    }
    public function huy_don2($idDM){
        if($this->donhangService->huyDonLayHang($idDM)){
            return redirect()->route('don_mua5', ['idKH' => Auth::user()->id]);
        }else{
            return redirect()->back();
        }
    }

}
