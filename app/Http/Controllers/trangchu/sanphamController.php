<?php

namespace App\Http\Controllers\trangchu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\sanphamRequest;
use App\Models\Product;

use App\Http\Services\Sanpham\binhluanService;
use App\Http\Services\Sanpham\sanphamService;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use App\ProductSimilarity;
use Illuminate\Support\Facades\Log;
use Exception;

class sanphamController extends Controller
{
    protected $sanphamService;
    protected $binhluanService;
    public function __construct(sanphamService $sanphamservice, BinhluanService $binhluanService)
    {
        $this->binhluanService = $binhluanService;
        $this->sanphamService = $sanphamservice;
    }

    public function giam_gia(){
        return view('web.sanpham.SPgiamgia', [
            'title' => 'Sản phẩm giảm giá',
            'giamgias' => $this->sanphamService->getSPGG(),
        ]);
    }
    public function sanpham(Request $request, $showType = null, $gender = null, $num = 12)
    {
        //dd($num);
        // Set common variables
        $viewData = [
            'title' => 'Sản Phẩm',
            'ten' => 'SẢN PHẨM',
            'action' => 'ko',
            'duoidan' => $showType,
            'phongcachs' => $this->sanphamService->getphongcach(),
            'nhanhieus' => $this->sanphamService->getnhanhieu(),
            'sizes' => $this->sanphamService->getsize(),
        ];

        if ($request->isMethod('post')) {
            $viewData['products'] = $this->sanphamService->getBLoc($request, $num);
        } else {
            if($gender != null){
                $viewData['ten1'] = $gender;
                $viewData['tenduoi'] = $gender;
                $viewData['products'] = $this->sanphamService->getProductByGender($gender, $num);
            }else{
                $viewData['products'] = $this->sanphamService->getAll($num);
            }
            //dd(count($viewData['products']));
        }
        if($showType === 'danhsach') return view('web.sanpham.sanpham_hienthiDanhSach', $viewData);
        if($showType === 'thuvien') return view('web.sanpham.sanpham_hienthiThuVien', $viewData);
        if($showType === 'bang') return view('web.sanpham.sanpham_hienthiBang', $viewData);
    }
    public function NDsanphan(Product $idSP){
        $products = $this->sanphamService->getAll2();
        $selectedId = $idSP->id;
        //Log::info('My message', ['user' => $selectedId]);
        $productSimilarity = new ProductSimilarity($products->toArray());
        $similarityMatrix  = $productSimilarity->calculateSimilarityMatrix();
        // Log::info('My message', ['similarityMatrix' => $similarityMatrix]);
        $products = $productSimilarity->getProductsSortedBySimularity($selectedId, $similarityMatrix);

        $collection = collect($products);

        $page = 1;
        $perPage = 4;

        $paginate = new LengthAwarePaginator(
            $collection->forPage($page, $perPage),
            $collection->count(),
            $perPage,
            $page,
        );

        if(Auth::user() == null) return redirect()->route('login')->with([
            'title' => 'Đăng nhập '
        ]);

        return view('web.sanpham.NDsanphan',[
            'title'=>'Chi tiết sản phẩm',
            'SPs' => $idSP,
            'yeuthichs' => $this->sanphamService->getyeuthich(Auth::user()->id, $idSP->id),
            'loais' => $this->sanphamService->getCLoai($idSP->name),
            'SPTTs' => $paginate,
            'Comments' => $this->binhluanService->getBinhLuanByID($selectedId)->paginate(4)
        ]);
    }

}
