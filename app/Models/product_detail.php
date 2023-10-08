<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_detail extends Model
{
    use HasFactory;
    protected $table = 'product_details';
    protected $fillable = [
        'id_product',
        'description',
        'info_bonus',
    ];
}
