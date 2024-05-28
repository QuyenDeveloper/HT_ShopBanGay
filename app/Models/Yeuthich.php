<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yeuthich extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_KH',
        'ID_SP',
    ];
}
