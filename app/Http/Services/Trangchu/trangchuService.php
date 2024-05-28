<?php

namespace App\Http\Services\Trangchu;

use App\Models\trangchu;
use App\Models\Product;
use App\Models\mailTT;

class trangchuService
{
    public function getAllProduct(){
        return Product::where('id', '>=', 0)->get();
    }

    public function getNamProduct(){
        return Product::where('menu_name1', '=', 'nam')->get();
    }
    public function getNuProduct(){
        return Product::where('menu_name1', '=', 'Nữ')->get();
    }

    public function getTreemProduct1(){
        return Product::where('menu_name1', '=', 'Thanh thiếu niên (8-16) _ trẻ Nam')->get();
    }
    public function getTreemProduct2(){
        return Product::Where('menu_name1', '=', 'Thanh thiếu niên (6-12) _ trẻ Nữ')->get();
    }
    public function getTreemProduct3(){
        return Product::Where('menu_name1', '=', 'Trẻ em (3-6) _ trẻ Nam')->get();
    }
    public function getTreemProduct4(){
        return Product::Where('menu_name1', '=', 'Trẻ em (3-6) _ trẻ Nữ')->get();
    }
    public function getTreemProduct5(){
        return Product::Where('menu_name1', '=', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nam')->get();
    }
    public function getTreemProduct6(){
        return Product::Where('menu_name1', '=', 'Trẻ nhỏ & trẻ mới biết đi (1-3) _ tre Nữ')->get();
    }
    public function getSaleProduct(){
        return Product::where('money_sale', '!=', 0)->get();
    }

    public function mailkt($request){
        return mailTT::where('mail', $request->inout('mail'))->first();
    }

    public function mail($request){
        if ($request->input('mail')  == null){
            return false;
        }
        return true;
    }

    public function insert($request){
        $mail = $this->mail($request);

        if ($mail === false){
//            $request->session()->flash('error_js', 'Vui lòng nhập mail!');
            return false;
        }
        try {
            $request->except('_token');
            mailTT::create($request->all());

//            $request->session()->flash('success_js', 'Thành công!');
            return true;
        }catch (\Exception $err){
//            $request->session()->flash('error_js', 'Không thành công!');
            $request->session()->flash('error_js', $err->getMessage());
            return false;
        }

    }

}
