<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daichiKH extends Model
{
    use HasFactory;
    protected $fillable = [
        'idKH',
        'hoten',
        'sdt',
        'daichi',
        'loaiDC',
    ];
}
