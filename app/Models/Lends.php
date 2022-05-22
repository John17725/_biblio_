<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lends extends Model
{
    use HasFactory;
    protected $table = 'lends';
    protected $fillable = [
        'student_id',
        'book_id',
        'end_date'
    ];
    public function book(){
        return $this->belongsTo(Book::class);
    }
    
    public function student(){
        return $this->belongsTo(Student::class);
    }
    
}
