<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donmua extends Model
{
    use HasFactory;
    protected $fillable = [
        'idKH',
        'idDMua',
        'ID_SP',
        'sizeSP_kh',
        'SLSP_KH',
    ];
}
