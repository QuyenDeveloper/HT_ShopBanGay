<?php

namespace App\Http\Services\Trangchu;

use App\Models\trangchu;
use App\Models\Product;
use App\Models\mailTT;

class trangchuService
{
    public function getAllHotProduct(){
        return Product::orderByDesc('daBan')->paginate(12);
    }
    public function getGenderBaseHotProduct($gender){
        return Product::where('menu_name1','like', "%$gender%")->orderByDesc('daBan')->paginate(12);
    }

    public function getNuProduct(){
        return Product::where('menu_name1', '=', 'Nữ')->get();
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
