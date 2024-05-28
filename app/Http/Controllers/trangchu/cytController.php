<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\cacYeuTo\cytService;

class cytController extends Controller
{
    protected $cytService;
    public function __construct(cytService $cytservice)
    {
        $this->cytService= $cytservice;
    }

    public function cacYeuTo(){
//        dd($this->cytService->getNH());
        return view('web.cacYeuTo.cyt', [
            'title' => 'Các yếu tố',
            'nhanhieus' => $this->cytService->getNH(),

        ]);
    }
}
