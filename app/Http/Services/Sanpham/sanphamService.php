<?php

namespace App\Http\Services\Sanpham;

use App\Models\Product;
use App\Models\Nhanhieu;
use App\Models\size;
use App\Models\theloai;
use App\Models\Yeuthich;

class sanphamService
{
    public function getAll2(){
        return Product::orderbyDesc('id')->get();
    }
    public function getAll($num){
        return Product::orderbyDesc('id')->paginate($num);
    }
    public function getphongcach(){
        return theloai::orderbyDesc('id')->paginate(100);
    }
    public function getnhanhieu(){
        return Nhanhieu::orderbyDesc('id')->simplePaginate(100);
    }
    public function getsize(){
        return size::orderbyDesc('id')->simplePaginate(100);
    }
    public function getProductByGender($gender, $num) {
        return Product::where('menu_name1', 'like', "%$gender%")->orderByDesc('id')->paginate($num);
    }
    public function getSPGG(){
        return Product::where('money_sale', '!=', 0)->paginate(24);
    }

    public function getBLoc($request,$num)
    {
        $money = explode(";", $request->input('money'));
        $theloais = [
            $request->input('theloai_1'),
            $request->input('theloai_2'),
            $request->input('theloai_3')
        ];
        $nhanhieu = $request->input('nhanhieu');
        $size = $request->input('size');

        $query = Product::whereBetween('money', [$money[0], $money[1]]);

        foreach ($theloais as $theloai) {
            if ($theloai) {
                $query->where('theloai', $theloai);
            }
        }

        if ($nhanhieu && $nhanhieu !== 'null') {
            $query->where('nhanhieu', $nhanhieu);
        }

        if ($size && $size !== 'null') {
            $query->where(function ($query) use ($size) {
                foreach (range(1, 6) as $i) {
                    $query->orWhere("size$i", $size);
                }
            });
        }

        return $query->paginate($num);
    }


    public function getCLoai($loai){
        return Product::where('name', '=', $loai)->get();
    }

    public function SPTT($sizes, $loai) {
        return Product::where(function ($query) use ($sizes) {
            foreach ($sizes as $size) {
                for ($i = 1; $i <= 6; $i++) {
                    $query->orWhere("size$i", '=', $size);
                }
            }
        })->where('theloai', '=', $loai)->paginate(6);
    }


    public function getyeuthich($idKH, $idSP){
        return Yeuthich::where('ID_KH', '=', $idKH)
            ->where('ID_SP','=', $idSP)->first();
    }
}
