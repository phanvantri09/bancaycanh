<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoty extends Model
{
    use HasFactory;
    protected $table = 'categoties';
    protected $fillable = [
        'name',
        'type'
    ];
}
