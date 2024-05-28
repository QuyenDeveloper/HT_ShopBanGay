<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluanSanpham extends Model
{
    use HasFactory;
    protected $fillable = [
        'idSP',
        'idKH',
        'cmt',
        'danhgia',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'idKH');
    }
}
