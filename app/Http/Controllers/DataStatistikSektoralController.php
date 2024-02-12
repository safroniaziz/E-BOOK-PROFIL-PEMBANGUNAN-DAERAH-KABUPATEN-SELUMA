<?php

namespace App\Http\Controllers;

use App\Models\KelompokDataSektoral;
use App\Models\KelompokTable;
use Illuminate\Http\Request;

class DataStatistikSektoralController extends Controller
{
    public function index(){
        $datas = KelompokDataSektoral::whereHas('kelompokDetails')->paginate(5);
        return view('frontend.dataStatistikSektoral.index',compact('datas'));
    }

    public function detail(KelompokDataSektoral $kelompokDataSektoral){
        $data = KelompokDataSektoral::with(['kelompokDetails'])->where('id',$kelompokDataSektoral->id)->first();
        return $data;
    }
}
