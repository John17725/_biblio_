<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        // dd(Student::orderBy('id','asc')->simplePaginate(10));
        return view('student.student',[
            'students' => Student::orderBy('id','asc')->simplePaginate(10)
        ]);
    }
    
    public function registerstudent(){
        return view('student.newstudent');
    }

    public function store(Request $request){
        // dd($request);
        DB::beginTransaction();
        try{
            $student = new Student();
            // dd($request,$student);
            $student->id_school = $request['id_school'];
            $student->enrollment = $request['enrollment'];
            $student->name = $request['name'];
            $student->last_name = $request['lastname'];
            $student->career = $request['career'];
            $student->grade = $request['grade'];
            $student->group = $request['group'];
            $student->curp = $request['curp'];
            $student->gender = $request['gender'];
            $student->save();
            DB::commit();
            return redirect()->route('estudiante.index');
        }catch(\Exception $e){
            DB::rollback();
            dd("Error",$e);
            return redirect()->route('estudiante.index');
        }
        
    }
}
