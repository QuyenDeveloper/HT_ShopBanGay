<?php
namespace App\Http\Services\timkiem;

use App\Models\Product;

class timkiemService
{
    public function getTK($request){
        return Product::where('name','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('menu_name1','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('money','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('money_sale','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('nhanhieu','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('size1','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('size2','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('size3','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('size4','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('size5','like', '%'.$request->input('timKiemSP').'%')
            ->orwhere('size6','like', '%'.$request->input('timKiemSP').'%')->paginate(24);
    }

}
