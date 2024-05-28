<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Http\Requests\timkiem\timKiemRequest;
use Illuminate\Http\Request;
use App\Http\Services\Sanpham\sanphamService;
use App\Http\Services\timkiem\timkiemService;


class timKiemController extends Controller
{
    protected $sanphamService;
    protected $timkiemService;
    public function __construct(sanphamService $sanphamservice, timkiemService  $timkiemservice)
    {
        $this->sanphamService = $sanphamservice;
        $this->timkiemService = $timkiemservice;
    }

//    protected $timkiemService;
//    public function __construct(timkiemService  $timkiemservice)
//    {
//        $this->timkiemService = $timkiemservice;
//    }

    public function timkiem(timKiemRequest $request){

//        dd($request->input());
        return view('web.sanpham.sanpham_hienthiThuVien', [
            'title' => 'tim kiếm: '.$request->input('timKiemSP'),
            'ten' => 'tim kiếm: '.$request->input('timKiemSP'),
            'action' => 'ok',
            'duoidan' => 'thuvien',
            'products' => $this->timkiemService->getTK($request),
            'phongcachs' => $this->sanphamService->getphongcach(),
            'nhanhieus' => $this->sanphamService->getnhanhieu(),
            'sizes' => $this->sanphamService->getsize(),

        ]);
    }

}
