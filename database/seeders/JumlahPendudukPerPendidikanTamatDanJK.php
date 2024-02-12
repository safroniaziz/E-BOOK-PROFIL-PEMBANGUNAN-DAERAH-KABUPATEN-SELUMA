<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerPendidikanTamatDanJK extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Pendidikan  Yang Di Tamatkan dan Jenis Kelamin Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Tidak/Belum Sekolah',
                'jumlah_laki_laki' => 23526,
                'jumlah_perempuan' => 22966,
                'jumlah_penduduk' => 46492,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Belum Tamat SD/Sederajat',
                'jumlah_laki_laki' => 12530,
                'jumlah_perempuan' => 11282,
                'jumlah_penduduk' => 23812,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Tamat SD/Sederajat',
                'jumlah_laki_laki' => 27959,
                'jumlah_perempuan' => 29255,
                'jumlah_penduduk' => 57214,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SLTP/Sederajat',
                'jumlah_laki_laki' => 17970,
                'jumlah_perempuan' => 16886,
                'jumlah_penduduk' => 34856,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SLTA/Sederajat',
                'jumlah_laki_laki' => 24445,
                'jumlah_perempuan' => 18850,
                'jumlah_penduduk' => 43295,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Diploma I/II',
                'jumlah_laki_laki' => 276,
                'jumlah_perempuan' => 301,
                'jumlah_penduduk' => 577,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Akademi/Diploma III/Sarjana Muda',
                'jumlah_laki_laki' => 366,
                'jumlah_perempuan' => 829,
                'jumlah_penduduk' => 1195,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Diploma IV/Strata I',
                'jumlah_laki_laki' => 3099,
                'jumlah_perempuan' => 3474,
                'jumlah_penduduk' => 6573,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Strata II',
                'jumlah_laki_laki' => 130,
                'jumlah_perempuan' => 94,
                'jumlah_penduduk' => 224,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'Strata III',
                'jumlah_laki_laki' => 6,
                'jumlah_perempuan' => 1,
                'jumlah_penduduk' => 7,
            ],
        ]);
    }
}
