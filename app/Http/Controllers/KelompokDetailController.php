<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokDetail;
use App\Models\KelompokDataSektoral;
use Illuminate\Support\Facades\Validator;

class KelompokDetailController extends Controller
{
    public function index(KelompokDataSektoral $kelompokDataSektoral){
        $kelompokDetails = KelompokDetail::where('kelompok_data_sektoral_id',$kelompokDataSektoral->id)->get();
        return view('administrator/kelompokDetail.index',[
            'kelompokDetails' =>  $kelompokDetails,
            'kelompokDataSektoral' =>  $kelompokDataSektoral,
        ]);
    }

    public function store(KelompokDataSektoral $kelompokDataSektoral, Request $request){
        $validator = Validator::make($request->all(), [
            'ketinggian'    => 'required',
            'luas'       => 'required',

        ], [
            'ketinggian.required'        => 'Ketinggian harus diisi',
            'luas.required'          => 'Luas harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $attributes = [
            'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
            'ketinggian'           =>  $request->ketinggian,
            'luas'       =>  $request->luas,
        ];

        $create = KelompokDetail::create($attributes);

        if ($create) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil disimpan',
                'url'   =>  route('kelompokDetail',[$kelompokDataSektoral->id]),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal disimpan']);
        }
    }

    public function edit(KelompokDetail $kelompokDetail){
        return $kelompokDetail;
    }

    public function update(KelompokDataSektoral $kelompokDataSektoral, Request $request){
        $validator = Validator::make($request->all(), [
            'ketinggian'    => 'required',
            'luas'       => 'required',

        ], [
            'ketinggian.required'        => 'Ketinggian harus diisi',
            'luas.required'          => 'Luas harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $kelompokDetail = KelompokDetail::where('id',$request->id)->first();
        $update = $kelompokDetail->update([
            'ketinggian'                         =>  $request->ketinggian,
            'luas'                         =>  $request->luas,
        ]);

        if ($update) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil diupdate',
                'url'   =>  route('kelompokDetail',[$kelompokDataSektoral->id]),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal diupdate']);
        }
    }

    public function delete(KelompokDataSektoral $kelompokDataSektoral, KelompokDetail $kelompokDetail){
        $delete = $kelompokDetail->delete();

        if ($delete) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil dihapus',
                'url'   =>  route('kelompokDetail',[$kelompokDataSektoral->id]),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal dihapus']);
        }
    }
}
