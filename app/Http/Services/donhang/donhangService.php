<?php
namespace App\Http\Services\donhang;

use App\Models\daichiKH;
use App\Models\danggiao;
use App\Models\danhan;
use App\Models\donmua;
use App\Models\Hdahuy;
use App\Models\layhang;
use App\Models\Product;
use App\Models\User;
use App\Models\xacNhanDH;
use Illuminate\Support\Facades\DB;
use App\Models\thongbao;
use Brian2694\Toastr\Facades\Toastr;

class donhangService
{

    public function getxacnhan(){
        return xacNhanDH::where('id', '!=', null)->get();
    }
    public function getlayhang(){
        return layhang::where('id', '!=', null)->get();
    }
    public function getdagiao(){
        return danhan::where('id', '!=', null)->get();
    }
    public function getdonhuy(){
        return Hdahuy::where('id', '!=', null)->get();
    }

    public function getdonmua(){
        return donmua::where('id', '!=', null)->get();
    }
    public function getdanggiao(){
        return danggiao::where('id', '!=', null)->get();
    }
    public function getSP(){
        return Product::where('id', '!=', null)->get();
    }
    public function ngdung(){
        return User::where('id', '!=', null)->get();
    }
    public function getDC(){
        return daichiKH::where('id', '!=', null)->get();
    }

    public function huyDonXacNhan($idDM){
        DB::beginTransaction();

        try {
            $xn = xacNhanDH::where('idDMua', $idDM)->firstOrFail();
            $ngdung = User::where('id', $xn->idKH)->firstOrFail();

            $tieude_admin = 'Đơn hàng "' . $idDM . '" đã được hủy';
            $noidung_admin = '"' . $ngdung->name . '" đã hủy đơn hàng "' . $idDM . '"';

            Hdahuy::create([
                'idKH' => $xn->idKH,
                'idDMua' => $xn->idDMua,
                'idDchi' => $xn->idDchi,
                'loinhan' => $xn->loinhan,
            ]);

            thongbao::create([
                'idKH' => '1',
                'idDM' => $idDM,
                'tieude' => $tieude_admin,
                'noidung' => $noidung_admin,
                'daxem' => 'chưa',
            ]);

            $orderItems = donmua::where('idDMua', '=', $idDM)->get();
            foreach ($orderItems as $orderItem) {
                $product = Product::where('id', $orderItem->ID_SP)->first();
                if ($product) {
                    $product->soluong = $product->soluong + $orderItem->SLSP_KH;
                    $product->save();
                }
            }

            xacNhanDH::where('idDMua', $idDM)->delete();

            DB::commit();
            Toastr::success($tieude_admin, 'Thành công', ["positionClass" => "toast-top-right"]);
            return true;

        } catch (\Exception $err) {
            DB::rollBack();

            Toastr::error('Đơn hàng chưa được hủy.', 'Không thành công', ["positionClass" => "toast-top-right"]);
            return false;
        }
    }
    public function huyDonLayHang($idDM){
        DB::beginTransaction();

        try {
            $xn = layhang::where('idDMua', $idDM)->firstOrFail();
            $ngdung = User::where('id', $xn->idKH)->firstOrFail();

            $tieude_admin = 'Đơn hàng "' . $idDM . '" đã được hủy';
            $noidung_admin = '"' . $ngdung->name . '" đã hủy đơn hàng "' . $idDM . '"';

            Hdahuy::create([
                'idKH' => $xn->idKH,
                'idDMua' => $xn->idDMua,
                'idDchi' => $xn->idDchi,
                'loinhan' => $xn->loinhan,
            ]);

            thongbao::create([
                'idKH' => '1',
                'idDM' => $idDM,
                'tieude' => $tieude_admin,
                'noidung' => $noidung_admin,
                'daxem' => 'chưa',
            ]);

            $orderItems = donmua::where('idDMua', '=', $idDM)->get();
            foreach ($orderItems as $orderItem) {
                $product = Product::where('id', $orderItem->ID_SP)->first();
                if ($product) {
                    $product->soluong = $product->soluong + $orderItem->SLSP_KH;
                    $product->daBan = $product->daBan - $orderItem->SLSP_KH;
                    $product->save();
                }
            }

            layhang::where('idDMua', $idDM)->delete();

            DB::commit();
            Toastr::success($tieude_admin, 'Thành công', ["positionClass" => "toast-top-right"]);
            return true;

        } catch (\Exception $err) {
            DB::rollBack();

            Toastr::error('Đơn hàng chưa được hủy.', 'Không thành công', ["positionClass" => "toast-top-right"]);
            return false;
        }
    }
}
