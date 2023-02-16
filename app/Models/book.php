<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'slug',
        'status',
        'category_id',
        'file',
        'cover',
        'user_id',
        'author_id',
    ];
    protected $casts = [
        'created_at' => 'datetime:d F Y H:i',
    ];

    protected $appends = ['activeStatus'];

    protected function active()
    {
        return $this->status == 1 ? "<span class='badge badge-success'>AKTIF</span>" : "<span class='badge badge-danger'>TIDAK AKTIF</span>";
    }
}
