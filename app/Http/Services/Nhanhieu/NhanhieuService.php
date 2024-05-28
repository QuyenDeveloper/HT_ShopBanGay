<?php

namespace App\Http\Services\Nhanhieu;

use App\Models\Nhanhieu;

class NhanhieuService
{
    public function getAll(){
        return nhanhieu::orderbyDesc('id')->simplePaginate(20);
    }

    public function destroy($request){
        $id = $request->input('id');
        $nhanhieu = nhanhieu::where('id', $id)->first();
        if ($nhanhieu){
            return nhanhieu::where('id', $id)->delete();
        }
        return false;
    }

    public function update($request , $nhanhieu){
        try {
            $nhanhieu->fill($request->input());
            $nhanhieu->save();

            $request->session()->flash('success', 'update Thành Công!!');

            return true;
        }catch (\Exception $err){
            $request->session()->flash('error', 'update Không Thành Công!!');
            $request->session()->flash('error', $err -> getMessage());
            return false;
        }
    }

    public function insert($request){
        try {
            $request->except('_token');
            Nhanhieu::create($request->all());

            $request->session()->flash('success', 'Thành công!');
        }catch (\Exception $err){
            $request->session()->flash('error', 'Không thành công!');
            $request->session()->flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

}
