<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\yeuthich\yeuthichServices;
use Illuminate\Support\Facades\Auth;

class yeuthichController extends Controller
{
    protected $yeuthichService;
    public function __construct(yeuthichServices $yeuthichservice)
    {
        $this->yeuthichService = $yeuthichservice;
    }

    //
    public function Them_Vao_yeu_thich(Request $request){
//        dd($request->input());
        $idKH = Auth::user()->id;

        $result = $this->yeuthichService->Them_Vao_yeu_thich( $request, $idKH);
//        dd($results);
        if ($result){
            return response()->json([
                'error' => false,
//                'message' => 'Thành công',
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Sản phẩm đã được thêm vào mục yêu thích!'
        ]);
    }
    public function xoa_yeu_thich(Request $request){
//        dd($request->input());
        $result = $this->yeuthichService->xoa_yeu_thich($request);
//        dd($results);
        if ($result){
            return response()->json([
                'error' => false,
//                'message' => 'Thành công',
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Không thành công!'
        ]);
    }

    public function index_YThich(){
        return view('web.yeuthich.yeuthich', [
            'title' => 'Yêu thích',
            'SPyeuthichs' => $this->yeuthichService->getyeuthich(Auth::user()->id),
            'SPs' => $this->yeuthichService->getSP(),

        ]);
    }
}
