<?php

namespace App\Http\Controllers\trangchu\users;

use App\Http\Controllers\Controller;
use App\Http\Requests\nhanhieu\NhanhieuRequest;
use App\Models\Nhanhieu;
use Illuminate\Http\Request;
use App\Http\Services\Nhanhieu\NhanhieuService;
use Illuminate\Support\Facades\Auth;

class NhanhieuController extends Controller
{
    protected $nhanhieuService;

    public function __construct(NhanhieuService $nhanhieuservice)
    {
        $this->nhanhieuService = $nhanhieuservice;
    }

    public function index()
    {
        if (Auth::user()->id ==1){
        return view('web.admin.nhanhieu.list', [
            'title' => 'Danh sách thương hiệu',
            'nhanhieus' => $this->nhanhieuService->getAll(),
        ]);}else return redirect() -> back();
    }


    public function create()
    {if (Auth::user()->id ==1){
        return view('web.admin.nhanhieu.add', [
            'title' => 'Thêm thương hiệu',

        ]);}else return redirect() -> back();
    }


    public function store(NhanhieuRequest $request)
    {if (Auth::user()->id ==1){
        $this->nhanhieuService->insert($request);
        return redirect()->back();
    }else return redirect() -> back();
    }


    public function show(Nhanhieu $nhanhieu)
    {if (Auth::user()->id ==1){
        return view('web.admin.nhanhieu.edit', [
            'title' => 'Sửa thông tin nhãn hiệu',
            'nhanhieu' => $nhanhieu,

        ]);
    }else return redirect() -> back();
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Nhanhieu $nhanhieu)
    {if (Auth::user()->id ==1){
        $this->nhanhieuService->update($request , $nhanhieu);
        return redirect('/trangchu/admin/nhanhieu/list');
    }else return redirect() -> back();
    }


    public function destroy(Request $request)
    {if (Auth::user()->id ==1){
        $result = $this->nhanhieuService->destroy($request);
        if ($result){
            return response()->json([
                'error' => false,
                'message' => ' Xóa thành công!'
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => ' Xóa không thành công!'
        ]);
    }else return redirect() -> back();
    }
}
