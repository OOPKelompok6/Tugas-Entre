<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\table_book;

class cartCollection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'table_book_id',
        'quantity'
    ];

    public function book()
    {
        return $this->belongsTo(table_book::class, 'table_book_id');
    }
}
