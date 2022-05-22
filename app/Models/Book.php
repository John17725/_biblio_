<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'title',
        'author',
        'pages',
        'ISBN',
        'edition',
        'pieces',
        'clasification',
        'editorial',
        'place',
        'serialnumber',
        'capitulo_1',
        'capitulo_2',
        'capitulo_3',
        'capitulo_4',
        'capitulo_5',
        'capitulo_6',
        'capitulo_7',
        'capitulo_8',
        'capitulo_9',
        'capitulo_10'
    ];
}
