<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'slug',
        'status',
        'category_id',
        'file',
        'user_id',
        'author_id',
    ];
}
