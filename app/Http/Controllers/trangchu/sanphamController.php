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
    public function sanpham(Request $request, $showType = null,$gender = null)
    {
        //dd($showType, $gender);
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

        // Apply filters if present
        if ($request->isMethod('post')) {
            $viewData['products'] = $this->sanphamService->getBLoc($request);
        } else {
            if($gender != null){
                $viewData['ten1'] = $gender;
                $viewData['tenduoi'] = $gender;
                $viewData['products'] = $this->sanphamService->getProductByGender($gender);
            }else{
                $viewData['products'] = $this->sanphamService->getAll();
            }
            //dd(count($viewData['products']));
        }
        if($showType === 'danhsach') return view('web.sanpham.sanpham_hienthiDanhSach', $viewData);
        if($showType === 'thuvien') return view('web.sanpham.sanpham_hienthiThuVien', $viewData);
        if($showType === 'bang') return view('web.sanpham.sanpham_hienthiBang', $viewData);
    }
    public function NDsanphan(Product $idSP){
        $products = $this->sanphamService->getAll()->items();
        $selectedId = $idSP->id;
        $productSimilarity = new ProductSimilarity($products);
        $similarityMatrix  = $productSimilarity->calculateSimilarityMatrix();
        $products          = $productSimilarity->getProductsSortedBySimularity($selectedId, $similarityMatrix);

        // Log::info('My message', ['similarityMatrix' => $similarityMatrix]);
        // Log::info('My message', ['user' => $products]);

        $collection = collect($products);

        $page = 1;
        $perPage = 4;

        $paginate = new LengthAwarePaginator(
            $collection->forPage($page, $perPage),
            $collection->count(),
            $perPage,
            $page,
        );

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
