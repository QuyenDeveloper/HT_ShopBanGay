<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_KH',
        'ID_SP',
        'sizeSP_kh',
        'SLSP_KH',
    ];
}
