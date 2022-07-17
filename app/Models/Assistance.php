<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;
    protected $table = 'asisstance';
    protected $fillable = [
        'student_id',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
