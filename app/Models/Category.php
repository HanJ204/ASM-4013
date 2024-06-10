<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primarykey = 'id';
    protected $attributes = ['anHien'=>0,'thuTu'=>1];
    protected $fillable = [
        'name',
        'thuTu',
        'anHien',
    ];
}
