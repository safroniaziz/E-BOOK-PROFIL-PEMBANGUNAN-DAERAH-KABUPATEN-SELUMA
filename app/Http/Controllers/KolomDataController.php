<?php

namespace App\Http\Controllers;

use App\Models\KelompokDataSektoral;
use Illuminate\Http\Request;

class KolomDataController extends Controller
{
    public function index(){
        $kelompokDataSektorals = KelompokDataSektoral::with(['pengaturanKoloms'])->get();
        return view('administrator/kolomData.index',[
            'kelompokDataSektorals' =>  $kelompokDataSektorals,
        ]);
    }
}
