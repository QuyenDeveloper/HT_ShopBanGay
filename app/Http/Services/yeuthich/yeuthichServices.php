<?php
namespace App\Http\Services\yeuthich;

use App\Models\Yeuthich;
use App\Models\Product;

class yeuthichServices
{
    public function xet($request, $idKH){
        $value = Yeuthich::where('ID_KH' , '=', $idKH)
            ->where('ID_SP' , '=', $request->input('idSP'))->first();
        if ($value != null){
            return false;
        }
        return true;
    }
    public function Them_Vao_yeu_thich($request, $idKH){
        $xet = $this->xet($request, $idKH);
        if ($xet == false) return false;

        try {
            Yeuthich::create([
                'ID_KH'=> $idKH,
                'ID_SP'=> $request->input('idSP'),
            ]);
            return true;
        }catch (\Exception $err){
            $request->session()->flash('error', $err -> getMessage());
            return false;
        }
    }

    public function xoa_yeu_thich($request){
        try {
            Yeuthich::where('ID_KH', '=', $request->input('idKH'))
                ->where('ID_SP','=', $request->input('idSP'))->delete();
            return true;
        }catch (\Exception $err){
            $request->session()->flash('error', $err -> getMessage());
            return false;
        }
    }

    public function getyeuthich($idKH){
        return Yeuthich::where('id' , '!=', null)
            ->where('ID_KH' , '=', $idKH)->get();
    }
    public function getSP(){
        return Product::where('id' , '!=', null)->get();
    }

}
