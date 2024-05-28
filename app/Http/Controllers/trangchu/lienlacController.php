<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class lienlacController extends Controller
{
    public function lienlac(){
        return view('web.trang.lienlac', [
           'title'=>'Liên lạc',
        ]);
    }
}
