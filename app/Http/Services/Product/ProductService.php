<?php

namespace App\Http\Services\Product;

use App\Models\Menu;
use App\Models\color;
use App\Models\size;
use App\Models\Nhanhieu;
use App\Models\Product;
use App\Models\theloai;
use Brian2694\Toastr\Facades\Toastr;

class ProductService
{
    public function getMenu(){
        return Menu::orderbyDesc('id')->simplePaginate(100);
    }
    public function getColer(){
            return color::orderbyDesc('id')->simplePaginate(100);
    }
//    public function getSize(){
//        return size::orderbyDesc('id')->simplePaginate(100);
//    }
    public function getNH(){
        return Nhanhieu::orderbyDesc('id')->simplePaginate(100);
    }
    public function getTL(){
        return theloai::orderbyDesc('id')->simplePaginate(100);
    }

    public function getAll(){
        return Product::orderbyDesc('id')->paginate(20);
    }


    public function destroy($request){
        $id = $request->input('id');
        $product = Product::where('id', $id)->first();
        if ($product){
            return Product::where('id', $id)->delete();
        }
        return false;
    }

    protected function isValidPrice($request){

        if ( $request->input('menu_name1') == -1){
            $request->session()->flash('error', 'Vui lòng chọn danh mục!!');
            return false;
        }

        if ($request->input('theloai') == -1){
            $request->session()->flash('error', 'Vui lòng chọn thể loại!!');
            return false;
        }

        if($request->input('money') != null && $request->input('money_sale') != null &&
            $request->input('money_sale') >= $request->input('money')
        ){
            $request->session()->flash('error', 'Gía giảm không thể lớn hơn OR bằng giá gốc!!');
            return false;
        }

        if($request->input('money') == 0 && $request->input('money_sale') != 0){
            $request->session()->flash('error', 'Vui lòng nhập giá gốc!!');
            return false;
        }

        if ($request->input('nhanhieu') == -1){
            $request->session()->flash('error', 'Vui lòng chọn thương hiệu!!');
            return false;
        }


        if ($request->input('size1') == null &&
            $request->input('size2') == null &&
            $request->input('size3') == null &&
            $request->input('size4') == null &&
            $request->input('size5') == null &&
            $request->input('size6') == null ){
            $request->session()->flash('error', 'Vui lòng chọn size!!');
            return false;
        }

        if ($request->input('anh1') == null &&
            $request->input('anh2') == null &&
            $request->input('anh3') == null &&
            $request->input('anh4') == null &&
            $request->input('anh5') == null &&
            $request->input('anh6') == null &&
            $request->input('anh7') == null &&
            $request->input('anh8') == null &&
            $request->input('anh9') == null &&
            $request->input('anh10') == null ){
            $request->session()->flash('error', 'Vui lòng chọn ảnh!!');
            return false;
        }

        return true;

    }

    public function update($request, $product){
        $isValidPrice = $this->isValidPrice($request);
        if($isValidPrice === false) return  false;

        try {
            $product->fill($request->input());
            $product->save();

            $request->session()->flash('success', 'update Thành Công!!');

            return true;
        }catch (\Exception $err){
            $request->session()->flash('error', 'update Không Thành Công!!');
            $request->session()->flash('error', $err -> getMessage());
            return false;
        }
    }

    public function insert($request){
        $isValidPrice = $this->isValidPrice($request);

        if ($isValidPrice === false){
            return false;
        }
        try {
            $request->except('_token');
            Product::create($request->all());

            $request->session()->flash('success', 'Thành công!');
        }catch (\Exception $err){
            $request->session()->flash('error', 'Không thành công!');
            $request->session()->flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

}
