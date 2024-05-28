<?php

namespace App\Http\Services\Phukien;

use App\Models\Product;


class PhukienService
{
    public function getphukien(){
        return Product::where('menu_name1', 'Phụ kiện')->paginate(24);
    }
}
