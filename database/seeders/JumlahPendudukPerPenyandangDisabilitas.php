<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerPenyandangDisabilitas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Penyandang Disabilitas dan Jenis Kelamin Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'penyandang_disabilitas' => 'Cacat Fisik',
                'jumlah_penduduk_laki_laki' => 65,
                'jumlah_penduduk_perempuan' => 49,
                'jumlah_penduduk' => 114,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'penyandang_disabilitas' => 'Cacat Netra/Buta',
                'jumlah_penduduk_laki_laki' => 20,
                'jumlah_penduduk_perempuan' => 22,
                'jumlah_penduduk' => 42,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'penyandang_disabilitas' => 'Cacat Rungu/Wicara',
                'jumlah_penduduk_laki_laki' => 27,
                'jumlah_penduduk_perempuan' => 28,
                'jumlah_penduduk' => 55,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'penyandang_disabilitas' => 'Cacat Mental/Jiwa',
                'jumlah_penduduk_laki_laki' => 74,
                'jumlah_penduduk_perempuan' => 71,
                'jumlah_penduduk' => 145,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'penyandang_disabilitas' => 'Cacat Fisik dan Mental',
                'jumlah_penduduk_laki_laki' => 3,
                'jumlah_penduduk_perempuan' => 5,
                'jumlah_penduduk' => 8,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'penyandang_disabilitas' => 'Cacat Lainnya',
                'jumlah_penduduk_laki_laki' => 10,
                'jumlah_penduduk_perempuan' => 20,
                'jumlah_penduduk' => 30,
            ],
        ]);
    }
}
