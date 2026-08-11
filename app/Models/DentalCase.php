<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalCase extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'before_image',
        'after_image',
        'description',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
