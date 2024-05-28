<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Phukien\PhukienService;

class phukienCotroller extends Controller
{
    protected $phukienService;

    public function __construct(PhukienService $phukienservice)
    {
        $this->phukienService = $phukienservice;
    }


    public function phukien(){
        return view('web.phukien.phukien', [
            'title' => 'Phụ kiện',
            'ten' => 'phu_kien',
            'phukiens' => $this->phukienService->getphukien(),

        ]);
    }
}
