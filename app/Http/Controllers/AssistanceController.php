<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistance;
use App\Models\Student;

class AssistanceController extends Controller
{
    public function index(){
        return view('student.assistance');
    }
    public function save(Request $request){
        $student = Student::where('enrollment', $request->matricula)->get()->last();
        // dd($student);
        $asis = new Assistance();
        $asis->student_id = $student->id;
        $asis->save();
        return view('student.assistance');
    }
}
