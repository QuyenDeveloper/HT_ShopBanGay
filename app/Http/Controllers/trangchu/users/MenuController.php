<?php

namespace App\Http\Controllers\trangchu\users;

use App\Http\Requests\Menu\CreateFormRequest;
use App\Models\Menu;
use App\Models\thongbao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Menu\MenuService;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuservice)
    {
        $this->menuService = $menuservice;
    }

    public function QLtaikhoan(){
        return view('web.admin.quanlyTK.list', [
            'title'=>'Tài khoản',
            'tKs'=>$this->menuService->gettaikhoan(),
        ]);
    }

    public function create(){
        if (Auth::user()->id ==1){
        return view('web.admin.menu.add', [
            'title'=>'Thêm Danh mục',
            'menus'=>$this->menuService->getParent(0)
        ]);
        }else return redirect() -> back();
    }

    public function store(CreateFormRequest $request)
    {
        if (Auth::user()->id ==1){
            $this->menuService->create($request);
            return redirect()->back();
        }else return redirect() -> back();
    }

    public function index(){
        if (Auth::user()->id ==1){
        return view('web.admin.menu.list', [
            'title'=>'Doanh mục',
            'menus'=>$this->menuService->getAll(),

        ]);
        }else return redirect() -> back();
    }

    public function show(Menu $menu){
        if (Auth::user()->id ==1){
        return view('web.admin.menu.edit', [
            'title'=>'Sửa Danh mục' . $menu->name,
            'menu'=>$menu,
            'menus'=>$this->menuService->getAll()
        ]);
        }else return redirect() -> back();
    }

    public function update(Menu $menu, CreateFormRequest $request){
        if (Auth::user()->id ==1){
        $this->menuService->update($request, $menu);
        return redirect('/trangchu/admin/menus/list');
        }else return redirect() -> back();
    }

    public function destroy(Request $request): \Illuminate\Http\JsonResponse
    {
        if (Auth::user()->id ==1){
            $result = $this->menuService->destroy($request);
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
