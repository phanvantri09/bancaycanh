<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoty_item extends Model
{
    use HasFactory;
    protected $table = 'categoty_items';
    protected $fillable = [
        'content',
        'name',
        'id_category',
    ];
}
