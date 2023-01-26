<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'writer', 
        'publisher', 
        'no_isbn',
        'category_book',
        'synopsis',
        'cover_book',
    ];
}
