<?php

namespace App\Http\Services\Sanpham;

use App\Models\Product;
use App\Models\Nhanhieu;
use App\Models\size;
use App\Models\theloai;
use App\Models\Yeuthich;

class sanphamService
{
    public function getAll(){
        return Product::orderbyDesc('id')->paginate(24);
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
    public function getProductByGender($gender) {
        return Product::where('menu_name1', 'like', "%$gender%")->orderByDesc('id')->paginate(24);
    }

    public function getnam(){
        return Product::where('menu_name1', 'Nam')->paginate(24);
    }
    public function getnu(){
        return Product::where('menu_name1', 'Nữ')->paginate(24);
    }
    public function gettreeem(){
        return Product::where('menu_name1', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nữ')
            ->orwhere('menu_name1', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam')
            ->orwhere('menu_name1', 'Trẻ em (3-6) _ trẻ Nữ')
            ->orwhere('menu_name1', 'Trẻ em (3-6) _ trẻ Nam')
            ->orwhere('menu_name1', 'Thanh thiếu niên (6-12) _ trẻ Nữ')
            ->orwhere('menu_name1', 'Thanh thiếu niên (8-16) _ trẻ Nam')->paginate(24);
    }
    public function get_1_3_nu(){
        return Product::where('menu_name1', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nữ')->paginate(24);
    }
    public function get_1_3_nam(){
        return Product::where('menu_name1', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam')->paginate(24);
    }
    public function get_3_6_nu(){
        return Product::where('menu_name1', 'Trẻ em (3-6) _ trẻ Nữ')->paginate(24);
    }
    public function get_3_6_nam(){
        return Product::where('menu_name1', 'Trẻ em (3-6) _ trẻ Nam')->paginate(24);
    }
    public function get_6_12_nu(){
        return Product::where('menu_name1', 'Thanh thiếu niên (6-12) _ trẻ Nữ')->paginate(24);
    }
    public function get_6_12_nam(){
        return Product::where('menu_name1', 'Thanh thiếu niên (6-12) _ trẻ Nam')->paginate(24);
    }
    public function getSPGG(){
        return Product::where('money_sale', '!=', 0)->paginate(24);
    }

    public function getBLoc($request)
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

        return $query->paginate(24);
    }
    public function getBLoc_nam($request){
        $money = $request->input('money');
        $tien = explode(";", $money);

        $theloai_Di_choi = $request->input('theloai_3');
        $theloai_The_thao = $request->input('theloai_1');
        $theloai_Van_phong = $request->input('theloai_2');

        $nhanhieu = $request->input('nhanhieu');
        $size = $request->input('size');
        $nam = 'nam';

        $query = Product::where('money', '>=', $tien[0])
                        ->where('money', '<=', $tien[1])
                        ->where('menu_name1', '=', $nam);

        if ($nhanhieu != 'null') {
            $query->where('nhanhieu', '=', $nhanhieu);
        }

        if ($size != 'null') {
            $query->where(function ($q) use ($size) {
                $q->where('size1', '=', $size)
                    ->orWhere('size2', '=', $size)
                    ->orWhere('size3', '=', $size)
                    ->orWhere('size4', '=', $size)
                    ->orWhere('size5', '=', $size)
                    ->orWhere('size6', '=', $size);
            });
        }

        if ($theloai_Di_choi != null) {
            $query->where('theloai', '=', $theloai_Di_choi);
        }

        if ($theloai_The_thao != null) {
            $query->where('theloai', '=', $theloai_The_thao);
        }

        if ($theloai_Van_phong != null) {
            $query->where('theloai', '=', $theloai_Van_phong);
        }

        return $query->paginate(24);
    }


    public function getBLoc_nu($request){
        $money = $request->input('money');
        $tien = explode(";", $money);

        $theloai_Di_choi = $request->input('theloai_3');
        $theloai_The_thao = $request->input('theloai_1');
        $theloai_Van_phong = $request->input('theloai_2');

        $nhanhieu = $request->input('nhanhieu');
        $size = $request->input('size');
        $nam = 'Nữ';

        $query = Product::where('money', '>=', $tien[0])
                        ->where('money', '<=', $tien[1])
                        ->where('menu_name1', '=', $nam);

        if ($nhanhieu != 'null') {
            $query->where('nhanhieu', '=', $nhanhieu);
        }

        if ($size != 'null') {
            $query->where(function ($query) use ($size) {
                $query->where('size1', '=', $size)
                    ->orWhere('size2', '=', $size)
                    ->orWhere('size3', '=', $size)
                    ->orWhere('size4', '=', $size)
                    ->orWhere('size5', '=', $size)
                    ->orWhere('size6', '=', $size);
            });
        }

        if ($theloai_Di_choi != null) {
            $query->where('theloai', '=', $theloai_Di_choi);
        }

        if ($theloai_The_thao != null) {
            $query->where('theloai', '=', $theloai_The_thao);
        }

        if ($theloai_Van_phong != null) {
            $query->where('theloai', '=', $theloai_Van_phong);
        }

        return $query->paginate(24);
    }


    public function getBLoc_treem($request){
        $money = $request->input('money');
        $tien = explode(";", $money);

        $theloai_Di_choi = $request->input('theloai_3');
        $theloai_The_thao = $request->input('theloai_1');
        $theloai_Van_phong = $request->input('theloai_2');

        $nhanhieu = $request->input('nhanhieu');
        $size = $request->input('size');

        $query = Product::where('money', '>=', $tien[0])->where('money', '<=', $tien[1])
                        ->where(function ($query) {
                            return $query
                                ->where('menu_name1', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nữ')
                                ->orWhere('menu_name1', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam')
                                ->orWhere('menu_name1', 'Trẻ em (3-6) _ trẻ Nữ')
                                ->orWhere('menu_name1', 'Trẻ em (3-6) _ trẻ Nam')
                                ->orWhere('menu_name1', 'Thanh thiếu niên (6-12) _ trẻ Nữ')
                                ->orWhere('menu_name1', 'Thanh thiếu niên (8-16) _ trẻ Nam');
                        });

        if ($nhanhieu != 'null') {
            $query->where('nhanhieu', '=', $nhanhieu);
        }

        if ($size != 'null') {
            $query->where(function ($query) use ($size) {
                return $query
                    ->where('size1', '=', $size)
                    ->orWhere('size2', '=', $size)
                    ->orWhere('size3', '=', $size)
                    ->orWhere('size4', '=', $size)
                    ->orWhere('size5', '=', $size)
                    ->orWhere('size6', '=', $size);
            });
        }

        if ($theloai_Di_choi != null) {
            $query->where('theloai', '=', $theloai_Di_choi);
        }

        if ($theloai_The_thao != null) {
            $query->where('theloai', '=', $theloai_The_thao);
        }

        if ($theloai_Van_phong != null) {
            $query->where('theloai', '=', $theloai_Van_phong);
        }

        return $query->paginate(24);
    }


    public function getBLocTreEm1_12($request, $menu_name1){
        $money = $request->input('money');
        $tien = explode(";", $money);

        $filters = [
            'theloai_1' => $request->input('theloai_1'),
            'theloai_2' => $request->input('theloai_2'),
            'theloai_3' => $request->input('theloai_3'),
            'nhanhieu' => $request->input('nhanhieu'),
            'size' => $request->input('size'),
        ];

        $nam = $menu_name1;

        $query = Product::where('menu_name1', '=', $nam)
                        ->where('money', '>=', $tien[0])
                        ->where('money', '<=', $tien[1]);

        foreach ($filters as $key => $value) {
            if ($value !== null && $value !== 'null') {
                if ($key === 'size') {
                    $query->where(function ($query) use ($value) {
                        $query->where('size1', $value)
                            ->orWhere('size2', $value)
                            ->orWhere('size3', $value)
                            ->orWhere('size4', $value)
                            ->orWhere('size5', $value)
                            ->orWhere('size6', $value);
                    });
                } else {
                    $query->where('theloai', '=', $value);
                }
            }
        }

        return $query->paginate(24);
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
