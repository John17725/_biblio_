<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('index',[
            'books' => Book::orderBy('id','asc')->simplePaginate(10)
        ]);
    }


    public function home(){
        return redirect()->route('home');
    }
    public function RegisterrBook(){
        return view('books.newbook');
    }

    public function saveBook(Request $request){
        // dd($request);
        DB::beginTransaction();
        try{
            $book = new Book();
            // dd($book);
            $book->title = $request['titlebook'];
            $book->author = $request['authorbook'];
            $book->pages = $request['pagesbook'];
            $book->ISBN = $request['isbnbook'];
            $book->edition = $request['editionbook'];
            $book->pieces = $request['numpiecesbook'];
            $book->clasification = $request['clasificationbook'];
            $book->editorial = $request['editorialbook'];
            $book->place = $request['placebook'];
            $book->serialnumber = $request['numseriebook'];
            $book->capitulo_1 = $request['chapter1'];
            $book->capitulo_2 = $request['chapter2'];
            $book->capitulo_3 = $request['chapter3'];
            $book->capitulo_4 = $request['chapter4'];
            $book->capitulo_5 = $request['chapter5'];
            $book->capitulo_6 = $request['chapter6'];
            $book->capitulo_7 = $request['chapter7'];
            $book->capitulo_8 = $request['chapter8'];
            $book->capitulo_9 = $request['chapter9'];
            $book->capitulo_10 = $request['chapter10'];
            $book->save();
            DB::commit();
            return redirect('libros/');
        }catch(\Exception $e){
            DB::rollback();
            // dd("Error",$e);
            return redirect()->route('estudiante.index');
            // return response()->json($e, 500);
        }
    }
}
