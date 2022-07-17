<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function getbookdatalend(Request $request){  
        $books = Book::where('title','LIKE', '%'.$request['title'].'%')->get();
        if($books->isEmpty()){
            return response()->json('null',200);
        }else{
            return response()->json($books,200);
        }
    }

    public function storenewlend(Request $request){
        $book = Book::find($request['idBook']);
        if($book->pieces >= 1){
            try{
                DB::beginTransaction();
                $lend = new Lends();
                $lend->student_id = $request['idAlumno'];
                $lend->book_id = $request['idBook'];
                Book::find($request['idBook'])->update(['pieces' => $book->pieces-1]);
                $lend->save();
                DB::commit();
                $response = [
                    'message' => 'Prestamo exitoso',
                    'folio' => $lend->id,
                ];
                return response()->json($response,200);   
            }catch(\Exception $e){
                return response()->json('Ha ocurrido un error al realizar el prestamo',200);    
            }
        }else{
            return response()->json('No hay piezas disponibles para prestamos',200);
        }
    }

    public function returnBook($id){
       Lends::find($id)->update(['end_date' => \Carbon\Carbon::now()]);
       return redirect()->route('prestamos.index');
    }

    public function findlend(Request $request){
        $lends = collect(Lends::find($request->folio));
        return view('lends.index', compact('lends'));
    }
}
