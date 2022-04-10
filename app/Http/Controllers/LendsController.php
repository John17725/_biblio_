<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lends;

class LendsController extends Controller
{
    public function index(){
        return view('lends', [
            'lends' => Lends::orderBy('id','asc')->simplePaginate(10) 
        ]);
    }
}
