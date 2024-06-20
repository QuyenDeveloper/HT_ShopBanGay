<?php

namespace App\Http\Controllers\trangchu\users;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Http\Requests\Product\ProductRequest;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class productController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productservice)
    {
        $this->productService = $productservice;
    }

    public function index()
    {if (Auth::user()->id ==1){
        return view('web.admin.Products.list', [
            'title'=>'Xem tất cả bản phẩm',
            'products'=>$this->productService->getAll()
        ]);}else return redirect() -> back();
    }


    public function create()
    {
//        echo '12345678';
        if (Auth::user()->id ==1){
        return view('web.admin.Products.add', [
            'title' => 'Thêm Sản Phẩm Mới',
            'menus' => $this->productService->getMenu(),
            'colers' => $this->productService->getColer(),
//            'sizes' => $this->productService->getSize(),
            'nhanhieus' => $this->productService->getNH(),
            'theloais' => $this->productService->getTL(),
        ]);}else return redirect() -> back();
    }


    public function store(ProductRequest $request)
    {
        if (Auth::user()->id ==1){
//        echo '12345';
//        dd($request->input());
        $this->productService->insert($request);
        return redirect()->back();
        }else return redirect() -> back();
    }


    public function show(Product $product)
    {if (Auth::user()->id ==1){
        return view('web.admin.Products.edit', [
            'title' => 'Sử thông tin SP',
            'products' => $product,
            'menus' => $this->productService->getMenu(),
            'nhanhieus' => $this->productService->getNH(),
            'colers' => $this->productService->getColer(),
            'theloais' => $this->productService->getTL(),
        ]);}else return redirect() -> back();
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Product $product)
    {if (Auth::user()->id ==1){
        $this->productService->update($request , $product);
//        Toastr::success('update thành công.', 'Thành công', ["positionClass" => "toast-top-center"]);
        return redirect('/trangchu/admin/products/list');
    }else return redirect() -> back();
    }


    public function destroy(Request $request)
    {if (Auth::user()->id ==1){
        $result = $this->productService->destroy($request);
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
