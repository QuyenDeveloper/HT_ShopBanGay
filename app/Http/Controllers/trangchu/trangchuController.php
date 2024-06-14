<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trangchu\trangchuRequest;
use App\Models\trangchu;
use Illuminate\Http\Request;
use App\Http\Services\Trangchu\trangchuService;

class trangchuController extends Controller
{
    protected $trangchuService;

    public function __construct(trangchuService $trangchu)
    {
        $this->trangchuService = $trangchu;
    }

    public function index()
    {
        return view('web.home', [
           'title' => 'ALLSTORE',
            'products_all' => $this->trangchuService->getAllHotProduct(),
            'products_nam' => $this->trangchuService->getGenderBaseHotProduct("Nam"),
            'products_nu' => $this->trangchuService->getGenderBaseHotProduct("Nữ"),
            'products_treem0' => $this->trangchuService->getGenderBaseHotProduct("trẻ"),
            'products_sale' => $this->trangchuService->getSaleProduct(),
        ]);
    }


    public function store(trangchuRequest $request){
//        dd($request->input('mail'));

//        return redirect()->back();
        $result = $this->trangchuService->insert($request);
        if ($result){
            return response()->json([
                'error' => false,
                'message' => 'Thành công',
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Thêm không thành công!'
        ]);

    }

}
