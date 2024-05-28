<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'menu_name1',
        'theloai',
        'money',
        'money_sale',
        'nhanhieu',
        'color1',
        'color2',
        'color3',
        'color4',
        'color5',
        'color6',
        'size1',
        'size2',
        'size3',
        'size4',
        'size5',
        'size6',
        'dattrung',
        'content',
        'active',
        'anh1',
        'anh2',
        'anh3',
        'anh4',
        'anh5',
        'anh6',
        'anh7',
        'anh8',
        'anh9',
        'anh10'
    ];
}
