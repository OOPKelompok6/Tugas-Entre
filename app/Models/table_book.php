<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_book extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookName',
        'bookAuthor',
        'ISBN',
        'publisher',
        'type',
        'publishDate',
        'description',
        'price'
    ];
}
