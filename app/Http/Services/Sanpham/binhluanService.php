<?php

namespace App\Http\Services\Sanpham;
use App\Models\binhluanSanpham;
class binhluanService
{
    public function getBinhLuanByID($productID){
        return binhluanSanpham::where("idSP", $productID);
    }
    public function getRating($productID){
        return binhluanSanpham::where("idSP", $productID)->count() ? (binhluanSanpham::where("idSP", $productID)->sum('danhgia') / binhluanSanpham::where("idSP", $productID)->count()) : 5;
    }
    public function insert($request){

        try {
            $data = $request->except('_token');
            // dd($data);
            // Corrected the below line
            binhluanSanpham::create($data);

            $request->session()->flash('success', 'Thành công!');
        }catch (\Exception $err){
            $request->session()->flash('error', 'Không thành công!');
            $request->session()->flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
