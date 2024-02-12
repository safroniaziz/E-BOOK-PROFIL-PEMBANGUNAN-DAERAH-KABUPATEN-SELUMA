<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokTable;
use Illuminate\Support\Facades\Validator;

class KelompokTableController extends Controller
{
    public function index(){
        $kelompokTables = KelompokTable::all();
        return view('administrator/kelompokTable.index',[
            'kelompokTables' =>  $kelompokTables,
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_table'    => 'required',
            'kelompok'       => 'required',
            'nama_model'       => 'required',

        ], [
            'nama_table.required'        => 'nama_table harus diisi',
            'kelompok.required'          => 'Luas harus diisi.',
            'nama_model.required'          => 'Nama Model harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $simpan = KelompokTable::create([
            'nama_table'                         =>  $request->nama_table,
            'kelompok'                         =>  $request->kelompok,
            'model'                         =>  $request->nama_model,
        ]);

        if ($simpan) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil disimpan',
                'url'   =>  url('/kelompok_table/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal disimpan']);
        }
    }

    public function edit(KelompokTable $kelompok){
        return $kelompok;
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_table'    => 'required',
            'kelompok'       => 'required',
            'nama_model'       => 'required',

        ], [
            'nama_table.required'        => 'nama_table harus diisi',
            'kelompok.required'          => 'Luas harus diisi.',
            'nama_model.required'          => 'Nama Model harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $kelompok = KelompokTable::where('id',$request->id)->first();

        $update = $kelompok->update([
            'nama_table'                         =>  $request->nama_table,
            'kelompok'                         =>  $request->kelompok,
            'model'                         =>  $request->nama_model,
        ]);

        if ($update) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil diupdate',
                'url'   =>  url('/kelompok_table/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal diupdate']);
        }
    }

    public function delete(KelompokTable $kelompok){
        $delete = $kelompok->delete();

        if ($delete) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil dihapus',
                'url'   =>  url('/kelompok_table/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal dihapus']);
        }
    }
}
