<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_done',
    ];

    // change data in json response
    protected $casts = [
        'is_done' => 'boolean',
    ];

    // hide field in json response
    protected $hidden = [
        'updated_at',
    ];
}
