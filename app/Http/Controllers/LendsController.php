<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lends;
use App\Models\Student;
use App\Models\Book;

class LendsController extends Controller
{
    public function index(){
        return view('lends.index', [
            'lends' => Lends::orderBy('id','asc')->simplePaginate(10) 
        ]);
    }
    public function registerlend(){
        $books = Book::all();
        $students = Student::all();
        return view('lends.newlend', compact('books','students'));
    }

    public function getdatastudentlend (Request $request){
        $data = Student::where('enrollment',$request['enrollment'])->get()->last();
        // dd($data);
        if($data == null){
            return response()->json('null', 200);
        }else{
            return response()->json($data, 200);
        }
    }
}
