<?php

namespace App\Http\Services\blog;

use App\Models\blog;
use App\Models\Nhanhieu;
use App\Models\Menu;

class BlogService
{

    public function getnhanhieu(){
        return Nhanhieu::where('id', '!=', null)->get();
    }

    public function ktra($request){
        if ($request->input('nhanhieu') == -1){
            $request->session()->flash('error', 'Vui lòng chọn thương hiệu!!');
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

    public function addBlog($request){
        $ktra = $this->ktra($request);
        if($ktra===false){
            return false;
        }

        try {
            $request->except('_token');
            blog::create($request->all());

            $request->session()->flash('success', 'Thành công!');
        }catch (\Exception $err){
            $request->session()->flash('error', 'Không thành công!');
            $request->session()->flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function getblog(){
        return blog::orderbyDesc('id')->paginate(40);
    }

    public function destroy($request){
        $id = $request->input('id');
        $product = blog::where('id', $id)->first();
        if ($product){
            return blog::where('id', $id)->delete();
        }
        return false;
    }

    public function update($request, $blog){
        $ktra = $this->ktra($request);
        if($ktra===false){
            return false;
        }

        try {
            $blog->fill($request->input());
            $blog->save();

            $request->session()->flash('success', 'update Thành Công!!');

            return true;
        }catch (\Exception $err){
            $request->session()->flash('error', 'update Không Thành Công!!');
            $request->session()->flash('error', $err -> getMessage());
            return false;
        }
    }

}
