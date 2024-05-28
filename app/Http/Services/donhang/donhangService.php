<?php
namespace App\Http\Services\donhang;

use App\Models\daichiKH;
use App\Models\danggiao;
use App\Models\danhan;
use App\Models\donmua;
use App\Models\Hdahuy;
use App\Models\layhang;
use App\Models\Product;
use App\Models\User;
use App\Models\xacNhanDH;

class donhangService
{

    public function getxacnhan(){
        return xacNhanDH::where('id', '!=', null)->get();
    }
    public function getlayhang(){
        return layhang::where('id', '!=', null)->get();
    }
    public function getdagiao(){
        return danhan::where('id', '!=', null)->get();
    }
    public function getdonhuy(){
        return Hdahuy::where('id', '!=', null)->get();
    }

    public function getdonmua(){
        return donmua::where('id', '!=', null)->get();
    }
    public function getdanggiao(){
        return danggiao::where('id', '!=', null)->get();
    }
    public function getSP(){
        return Product::where('id', '!=', null)->get();
    }
    public function ngdung(){
        return User::where('id', '!=', null)->get();
    }
    public function getDC(){
        return daichiKH::where('id', '!=', null)->get();
    }


}
