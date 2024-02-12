<?php

namespace App\Http\Controllers;

use App\Models\KelompokTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\LuasWilayahDenganKetinggianTempat;
use App\Models\TableDetail;

class LuasWilayahDenganKetinggianTempatController extends Controller
{
    protected $table;
    public function __construct() {
        $this->table = KelompokTable::where('nama_table','luas_wilayah_dengan_ketinggian_tempats')->first();
    }

    public function index(){
        $data = KelompokTable::with(['tableDetails'])->where('nama_table','luas_wilayah_dengan_ketinggian_tempats')->first();
        return view('administrator/luasWilayahDenganKetinggianTempat.index',[
            'data' =>  $data,
        ]);
    }

    public function store(Request $request){
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

        $simpan = TableDetail::create([
            'kelompok_table_id'         =>  $this->table->id,
            'ketinggian'                         =>  $request->ketinggian,
            'luas'                         =>  $request->luas,
        ]);

        if ($simpan) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil disimpan',
                'url'   =>  url('/luas_wilayah_dengan_ketinggian_tempat/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal disimpan']);
        }
    }

    public function edit(TableDetail $data){
        return $data;
    }

    public function update(Request $request){
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

        $data = TableDetail::where('kelompok_table_id',$this->table->id)->where('id',$request->id)->first();

        $update = $data->update([
            'ketinggian'                         =>  $request->ketinggian,
            'luas'                         =>  $request->luas,
        ]);

        if ($update) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil diupdate',
                'url'   =>  url('/luas_wilayah_dengan_ketinggian_tempat/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal diupdate']);
        }
    }

    public function delete(TableDetail $data){
        $delete = $data->delete();

        if ($delete) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil dihapus',
                'url'   =>  url('/luas_wilayah_dengan_ketinggian_tempat/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal dihapus']);
        }
    }
}
