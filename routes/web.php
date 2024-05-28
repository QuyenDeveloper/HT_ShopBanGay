<?php

use App\Http\Controllers\trangchu\users\donhangController;
use App\Http\Controllers\trangchu\users\thongbaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\trangchu\trangchuController;
use App\Http\Controllers\trangchu\loginController;
use App\Http\Controllers\trangchu\users\mainController;
use App\Http\Controllers\trangchu\users\MenuController;
use App\Http\Controllers\trangchu\users\productController;
use App\Http\Controllers\trangchu\users\NhanhieuController;
use App\Http\Controllers\trangchu\UploadController;
use App\Http\Controllers\trangchu\sanphamController;
use App\Http\Controllers\trangchu\blogController;
use App\Http\Controllers\trangchu\phukienCotroller;
use App\Http\Controllers\trangchu\cytController;
use App\Http\Controllers\trangchu\lienlacController;
use App\Http\Controllers\trangchu\loginNDController;
use App\Http\Controllers\trangchu\giohangController;
use App\Http\Controllers\trangchu\yeuthichController;
use App\Http\Controllers\trangchu\taikhoanController;
use App\Http\Controllers\trangchu\timKiemController;
use App\Http\Controllers\sanPhamBinhLuanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('trangchu/admin/users/login', [loginController::class, 'index'])->name('loginadmin');
Route::post('trangchu/admin/users/login/store', [loginController::class, 'store']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('trangchu/admin')->group(function () {
        Route::get('/', [mainController::class, 'index'])->name('admin');
        Route::get('main', [mainController::class, 'index']);

        Route::prefix('QLtaikhoan')->group(function () {
            Route::get('/', [MenuController::class, 'QLtaikhoan']);

        });
        #menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);

        });

        #Product
        Route::prefix('products')->group(function (){
            Route::get('add', [productController::class, 'create']);
            Route::post('add', [productController::class, 'store']);
            Route::get('list', [productController::class, 'index']);
            Route::get('edit/{product}', [productController::class, 'show']);
            Route::post('edit/{product}', [productController::class, 'update']);
            Route::DELETE('destroy', [productController::class, 'destroy']);
        });

        #nhãn hiệu
        Route::prefix('nhanhieu')->group(function () {
            Route::get('add', [NhanhieuController::class, 'create']);
            Route::post('add', [NhanhieuController::class, 'store']);
            Route::get('list', [NhanhieuController::class, 'index']);
            Route::DELETE('destroy', [NhanhieuController::class, 'destroy']);
            Route::get('edit/{nhanhieu}', [NhanhieuController::class, 'show']);
            Route::post('edit/{nhanhieu}', [NhanhieuController::class, 'update']);

        });

        #blog
        Route::prefix('blog')->group(function () {
            Route::get('add', [blogController::class, 'create']);
            Route::post('add', [blogController::class, 'store']);
            Route::get('list', [blogController::class, 'index']);
            Route::DELETE('destroy', [blogController::class, 'destroy']);
            Route::get('edit/{blog}', [blogController::class, 'show']);
            Route::post('edit/{blog}', [blogController::class, 'update']);

        });


        #upload
        Route::post('upload/services', [UploadController::class, 'store']);



        #blog
        Route::prefix('donhang')->group(function () {
            Route::get('xacnhan', [donhangController::class, 'xacnhan']);
            Route::get('xl_xacnhan/{idDM}', [donhangController::class, 'xl_xacnhan']);

            Route::get('layhang', [donhangController::class, 'layhang']);
            Route::get('xl_chuyengiao/{idDM}', [donhangController::class, 'xl_chuyengiao']);

            Route::get('danggiao', [donhangController::class, 'danggiao']);
            Route::get('xl_giaothanhcong/{idDM}', [donhangController::class, 'xl_giaothanhcong']);
            Route::get('xl_danhan/{idDM}', [donhangController::class, 'xl_danhan']);

            Route::get('dagiao', [donhangController::class, 'dagiao']);

            Route::get('donhuy', [donhangController::class, 'donhuy']);

        });

        #thông báo
        Route::prefix('thongbaoadmin')->group(function () {
            Route::get('/', [thongbaoController::class, 'thongbaoadmin'])->name('thongbaoadmin');
            Route::get('xacthucdaxem/{idTB}', [thongbaoController::class, 'xacthucdaxem']);


        });



    });

});

Route::get('/', [trangchuController::class, 'index']);

Route::prefix('trangchu')->group(function () {

    Route::post('timsanpham', [timKiemController::class, 'timkiem']);

    Route::get('/', [trangchuController::class, 'index'])->name('trangchu');
    Route::post('addmailTt', [trangchuController::class, 'store']);

    Route::prefix('sanpham')->group(function () {
        Route::get('NDsanphan/{idSP}', [sanphamController::class, 'NDsanphan']);
        Route::post('binhluan', [sanPhamBinhLuanController::class, 'store']);
        Route::post('them_gio_hang', [giohangController::class, 'Them_Vao_Gio_Hang']);
        Route::post('them_yeu_thich', [yeuthichController::class, 'Them_Vao_yeu_thich']);
        Route::post('xoa_yeu_thich', [yeuthichController::class, 'xoa_yeu_thich']);

        Route::get('{showType}', [sanphamController::class, 'sanpham']);
        Route::post('{showType}', [sanphamController::class, 'sanpham']);

        Route::prefix('{showType}')->group(function () {
            Route::get('{gender}', [sanphamController::class, 'sanpham']);
            Route::post('{gender}', [sanphamController::class, 'sanpham']);
        });
    });

    Route::prefix('blog')->group(function () {
        Route::get('/', [blogController::class, 'index_blog']);
//        Route::get('{id_blog}', [blogController::class, 'ndung_blog']);
    });

    Route::prefix('phukien')->group(function () {
        Route::get('/', [phukienCotroller::class, 'phukien']);
    });

    Route::prefix('cacYeuTo')->group(function () {
        Route::get('/', [cytController::class, 'cacYeuTo']);
    });

});

Route::get('trangchu/login', [loginNDController::class, 'login'])->name('login');
Route::post('trangchu/login', [loginNDController::class, 'postDangnhap']);

Route::get('trangchu/quenMK', [loginNDController::class, 'quenMK'])->name('quenMK');
Route::post('trangchu/quenMK', [loginNDController::class, 'postquenMK']);
Route::get('trangchu/getpass/{id}/{token}', [loginNDController::class, 'getpass'])->name('getpass');
Route::post('trangchu/getpass/{id}/{token}', [loginNDController::class, 'postgetpass']);


Route::get('trangchu/Register', [loginNDController::class, 'Register']);
Route::post('trangchu/Register', [loginNDController::class, 'postDangky']);

Route::get('trangchu/logout', [loginNDController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('trangchu')->group(function () {


        Route::prefix('blog')->group(function () {
            Route::get('{id_blog}', [blogController::class, 'ndung_blog']);
        });

        Route::prefix('lienlac')->group(function () {
            Route::get('/', [lienlacController::class, 'lienlac']);
        });


        Route::prefix('giohang')->group(function () {
            Route::get('/', [giohangController::class, 'index_GHang']);

            Route::post('/updateSL', [giohangController::class, 'updateSL']);
            Route::post('/xoa', [giohangController::class, 'xoaGH']);

        });

        Route::get('dathang', [giohangController::class, 'datHang'])->name('datHang');
        Route::post('XL_dathang', [giohangController::class, 'XL_dathang']);

        Route::prefix('yeuthich')->group(function () {
            Route::get('/', [yeuthichController::class, 'index_YThich']);

        });

        Route::prefix('tai_khoan')->group(function () {
            Route::get('hoso/{idKH}', [taikhoanController::class, 'hoso'])->name('hoso');
            Route::post('capnhathoso/{idKH}', [taikhoanController::class, 'capnhathoso']);

            Route::get('daichi/{idKH}', [taikhoanController::class, 'daichi'])->name('daichi');
            Route::post('them_dia_chi', [taikhoanController::class, 'them_dia_chi']);
            Route::post('xoaDC', [taikhoanController::class, 'xoaDC']);

            Route::get('ngan_hang/{idKH}', [taikhoanController::class, 'ngan_hang'])->name('ngan_hang');

            Route::get('doi_MK/{idKH}', [taikhoanController::class, 'doi_MK'])->name('doi_MK');
            Route::post('doiMK/{idKH}', [taikhoanController::class, 'doiMK']);

            Route::get('thong_bao/{idKH}', [taikhoanController::class, 'thong_bao']);

            Route::get('don_mua/{idKH}/1', [taikhoanController::class, 'don_mua1'])->name('don_mua1');
            Route::get('don_mua/{idKH}/2', [taikhoanController::class, 'don_mua2'])->name('don_mua2');
            Route::get('don_mua/{idKH}/3', [taikhoanController::class, 'don_mua3'])->name('don_mua3');
            Route::get('don_mua/{idKH}/4', [taikhoanController::class, 'don_mua4'])->name('don_mua4');
            Route::get('don_mua/{idKH}/5', [taikhoanController::class, 'don_mua5'])->name('don_mua5');

            Route::get('ND_donhang/{idDM}', [taikhoanController::class, 'ND_donhang1'])->name('ND_donhang1');

            Route::get('huy_don/{idDM}', [donhangController::class, 'huy_don'])->name('huy_don');
            Route::get('huy_don2/{idDM}', [donhangController::class, 'huy_don2'])->name('huy_don2');


        });

    });
});

