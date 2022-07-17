<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lends;
use App\Models\Student;
use App\Models\Assistance;

class StatsController extends Controller
{
    public function stats(){
        return view('stats.index');
    }
    public function getDataYear($year){
        if($year == '2022'){
            $start = \Carbon\Carbon::parse('2022-01-01')->format('Y-m-d');
            $end = \Carbon\Carbon::parse('2022-12-31')->format('Y-m-d');
        }
        if($year == '2023'){
            $start = \Carbon\Carbon::parse('2023-01-01')->format('Y-m-d');
            $end = \Carbon\Carbon::parse('2023-12-31')->format('Y-m-d');
        }
        if($year == '2024'){
            $start = \Carbon\Carbon::parse('2024-01-01')->format('Y-m-d');
            $end = \Carbon\Carbon::parse('2024-12-31')->format('Y-m-d');
        }
        $totalIngresos = Assistance::where('created_at', '>=', $start)->where('created_at','<=',$end)->count();
        $Totallends = Lends::where('created_at', '>=', $start)->where('created_at','<=',$end)->count();
        $lends = Lends::where('created_at', '>=', $start)->where('created_at','<=',$end)->get();
        $femeninos = 0;
        $masculinos = 0;
        // $Lend
        foreach($lends as $lend){
            if(Student::find($lend->student_id)->gender == 'Masculino'){
                // dd('asdasdsd');
                $masculinos++;
            }
            if(Student::find($lend->student_id)->gender == 'Femenino'){
                $femeninos++;
            }
        }
        // dd($totalIngresos,$Totallends,$lends,$femeninos,$masculinos);
        return  view('stats.index', compact('totalIngresos','Totallends','femeninos','masculinos'));
        // $data = [
        //     'status' => 'success',
        //     'start' =>  $start,
        //     'end' =>  $end,
        //     'query' => Lends::where('created_at', '>=', $start)->where('created_at','<=',$end)->get()
        // ];
        
        // return response()->json($data, 200);
    }
}
