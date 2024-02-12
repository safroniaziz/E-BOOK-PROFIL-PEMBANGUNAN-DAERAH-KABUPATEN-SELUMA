<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokDataSektoral;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KelompokDataSektoralController extends Controller
{
    public function index(){
        $kelompokDataSektorals = KelompokDataSektoral::withCount(['kelompokDetails'])->orderBy('created_at','desc')->get();
        return view('administrator/kelompokDataSektoral.index',[
            'kelompokDataSektorals' =>  $kelompokDataSektorals,
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'kelompok_data'      => 'required',
            'sumber_data'        => 'required',
            'deskripsi_singkat'  => 'required',
            'dokumen_pdf'        => 'mimes:pdf',
            'dokumen_word'       => 'mimes:docx',
        ], [
            'kelompok_data.required'        => 'Kelompok Data harus diisi.',
            'sumber_data.required'          => 'Sumber Data harus diisi.',
            'deskripsi_singkat.required'    => 'Deskripsi Singkat harus diisi.',
            'dokumen_pdf.mimes'             => 'Dokumen PDF harus berformat PDF.',
            'dokumen_word.required'         => 'Dokumen Word harus diunggah.',
            'dokumen_word.mimes'            => 'Dokumen Word harus berformat Word (docx).',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $attributes = [
            'kelompok_data'           =>  $request->kelompok_data,
            'sumber_data'       =>  $request->sumber_data,
            'deskripsi_singkat'       =>  $request->deskripsi_singkat,
        ];

        if ($request->hasFile('dokumen_pdf') && $request->file('dokumen_pdf')->isValid()) {
            $file = $request->file('dokumen_pdf');
            $fileName = $file->store('dokumen_pdfs', 'public');
            $attributes['dokumen_pdf'] = $fileName;
        }

        if ($request->hasFile('dokumen_word') && $request->file('dokumen_word')->isValid()) {
            $file = $request->file('dokumen_word');
            $fileName = $file->store('dokumen_words', 'public');
            $attributes['dokumen_word'] = $fileName;
        }

        $create = KelompokDataSektoral::create($attributes);

        if ($create) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil disimpan',
                'url'   =>  url('/kelompok_data_sektoral/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal disimpan']);
        }
    }

    public function edit(KelompokDataSektoral $kelompok){
        return $kelompok;
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_table'    => 'required',
            'kelompok'       => 'required',
            'nama_model'       => 'required',

        ], [
            'nama_table.required'        => 'nama_table harus diisi',
            'kelompok.required'          => 'Kelompok harus diisi.',
            'nama_model.required'          => 'Nama Model harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 0, 'text' => $validator->errors()->first()], 422);
        }

        $kelompok = KelompokDataSektoral::where('id',$request->id)->first();

        $update = $kelompok->update([
            'nama_table'                         =>  $request->nama_table,
            'kelompok'                         =>  $request->kelompok,
            'model'                         =>  $request->nama_model,
        ]);

        if ($update) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil diupdate',
                'url'   =>  url('/kelompok_data_sektoral/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal diupdate']);
        }
    }

    public function delete(KelompokDataSektoral $kelompok){
        $delete = $kelompok->delete();

        if ($delete) {
            return response()->json([
                'text'  =>  'Berhasil, data berhasil dihapus',
                'url'   =>  url('/kelompok_data_sektoral/'),
            ]);
        }else {
            return response()->json(['text' =>  'Gagal, gagal dihapus']);
        }
    }

    public function downloadPdf(KelompokDataSektoral $kelompokDataSektoral){
        if ($kelompokDataSektoral) {
            $filePath = storage_path("app/public/{$kelompokDataSektoral->dokumen_pdf}");
            if (Storage::disk('public')->exists("{$kelompokDataSektoral->dokumen_pdf}")) {
                return response()->download($filePath);
            } else {
                // Handle file not found in storage
                abort(404);
            }
        } else {
            // Handle file record not found in the database
            abort(404);
        }
    }

    public function downloadWord(KelompokDataSektoral $kelompokDataSektoral){
        if ($kelompokDataSektoral) {
            $filePath = storage_path("app/public/{$kelompokDataSektoral->dokumen_word}");
            if (Storage::disk('public')->exists("{$kelompokDataSektoral->dokumen_word}")) {
                return response()->download($filePath);
            } else {
                // Handle file not found in storage
                abort(404);
            }
        } else {
            // Handle file record not found in the database
            abort(404);
        }
    }
}
