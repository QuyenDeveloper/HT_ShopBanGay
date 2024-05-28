<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hdahuy extends Model
{
    use HasFactory;
    protected $fillable = [
        'idKH',
        'idDMua',
        'idDchi',
        'loinhan',
    ];
}
