<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'id_school',
        'enrollment',
        'name',
        'last_name',
        'career',
        'grade',
        'group',
        'curp'
    ];
    public function Book(){
        return $this->belongsTo(Book::class);
    }
}
