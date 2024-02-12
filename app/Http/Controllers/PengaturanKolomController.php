<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaturanKolom;
use Illuminate\Support\Facades\Validator;

class PengaturanKolomController extends Controller
{
    public function index(){
        $pengaturanKoloms = PengaturanKolom::get();
        return view('administrator/pengaturanKolom.index',[
            'pengaturanKoloms' =>  $pengaturanKoloms,
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_header'    => 'required',
            'nama_kolom'       => 'required',

        ], [
            'nama_header.required'        => 'Nama Header harus diisi',
            'nama_kolom.required'          => 'Nama Kolom harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $attributes = [
            'nama_header'           =>  $request->nama_header,
            'nama_kolom'       =>  $request->nama_kolom,
        ];

        $create = PengaturanKolom::create($attributes);

        if ($create) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil disimpan',
                'url'   =>  route('pengaturanKolom'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal disimpan']);
        }
    }

    public function edit(PengaturanKolom $pengaturanKolom){
        return $pengaturanKolom;
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_header'    => 'required',
            'nama_kolom'       => 'required',

        ], [
            'nama_header.required'        => 'Nama Header harus diisi',
            'nama_kolom.required'          => 'Nama Kolom harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $pengaturanKolom = PengaturanKolom::where('id',$request->id)->first();
        $update = $pengaturanKolom->update([
            'nama_header'                         =>  $request->nama_header,
            'nama_kolom'                         =>  $request->nama_kolom,
        ]);

        if ($update) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil diupdate',
                'url'   =>  route('pengaturanKolom'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal diupdate']);
        }
    }

    public function delete(PengaturanKolom $pengaturanKolom){
        $delete = $pengaturanKolom->delete();

        if ($delete) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil dihapus',
                'url'   =>  route('pengaturanKolom'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal dihapus']);
        }
    }
}
