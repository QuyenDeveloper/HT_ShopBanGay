<?php

namespace App\Http\Services\cacYeuTo;

use App\Models\Nhanhieu;

class cytService
{
    public function getNH(){
        return Nhanhieu::where('id', '!=', null)->get();
    }

}
