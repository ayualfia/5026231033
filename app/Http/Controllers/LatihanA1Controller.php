<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatihanA1Controller extends Controller
{
    //
    public function index5()
    {
        $counter = DB::table('pagecounter')->where('ID', 1)->first();
        $jumlahpengunjung = 0;
        if($counter){
            $newjumlah =$counter-> Jumlah+1;
            DB::table('pagecounter')
            ->where('ID',1)
            ->update(['Jumlah'=>$newjumlah]);
        }
        $jumlahpengunjung = $newjumlah;
        return view('belajareas/index5', ['jumlahpengunjung' => $jumlahpengunjung]);
    }
}
