<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    use HasFactory;
    protected $table = 'product_images';
    protected $fillable = [
        'id_product',
        'img_url'
    ];
}
