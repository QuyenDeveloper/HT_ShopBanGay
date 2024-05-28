<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content',
        'loai',
        'tgian',
        'anh1',
        'anh2',
        'anh3',
        'anh4',
        'anh5',
    ];
}
