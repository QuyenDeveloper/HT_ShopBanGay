<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongbao extends Model
{
    use HasFactory;
    protected $fillable = [
        'idKH',
        'idDM',
        'tieude',
        'noidung',
        'daxem',
    ];
}
