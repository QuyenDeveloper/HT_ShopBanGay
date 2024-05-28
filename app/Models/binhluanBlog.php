<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluanBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'idBlog',
        'idKH',
        'cmt',
        'danhgia',
    ];
}
