<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'img',
        'name',
        'content_pre',
        'content_main',
        'id_category',
        'id_category_item'
    ];
}
