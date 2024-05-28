<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\sanPhamBinhLuanRequest;
use App\Http\Services\Sanpham\binhluanService;
use Illuminate\Http\Request;
use App\Models\binhluanSanpham;
use App\Models\Product;

class sanPhamBinhLuanController extends Controller
{
    protected $binhluanService;
    public function __construct(binhluanService $binhluanService)
    {
        $this->binhluanService = $binhluanService;
    }

    public function store(Request $request){
        try {
            $this->binhluanService->insert($request);
            return redirect()->back()->with('success', 'Thành công!');
        } catch (\Throwable $th) {
            dd("Error: ", $th->getMessage(), $request->input());
        }
    }

}
