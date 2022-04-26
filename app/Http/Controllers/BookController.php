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
        return view('welcome');
    }
    public function RegisterrBook(){
        return view('books.newbook');
    }

    public function saveBook(Request $request){
        // dd($request['numseriebook']);
        DB::beginTransaction();
        try{
            $book = new Book();
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
            $book->save();
            DB::commit();
            return redirect('libros/');
        }catch(\Exception $e){
            DB::rollback();
            dd("Error",$e);
            // return response()->json($e, 500);
        }
    }
}
