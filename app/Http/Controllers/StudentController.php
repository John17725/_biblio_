<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('student',[
            'students' => Student::orderBy('id','asc')->simplePaginate(10)
        ]);
    }
}
