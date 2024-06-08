<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $dates = ['dateSubmitted'];
    protected $fillable = [
        'name',
        'describe',
        'image',
        'price',
        'priceSale',
        'quantity',
        'hot',
        'view',
        'anHien',
        'dateSubmitted',
        'idCategory',
    ];
}
