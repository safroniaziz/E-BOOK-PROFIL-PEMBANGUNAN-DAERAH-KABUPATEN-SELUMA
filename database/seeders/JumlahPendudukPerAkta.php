<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerAkta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Data Jumlah dan Persentase Penduduk Yang memiliki Akta Dan tidak memiliki Akta di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_akta' => 'Akta Kelahiran anak usia 0-5 Tahun',
                'yang_tercatat' => '15025',
                'ada_akta' => '14631',
                'tidak_ada_akta' => '394',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_akta' => 'Akta Kelahiran anak usia 0-18 Tahun',
                'yang_tercatat' => '59527',
                'ada_akta' => '58362',
                'tidak_ada_akta' => '1165',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_akta' => 'Akta Perkawinan',
                'yang_tercatat' => '107332',
                'ada_akta' => '57848',
                'tidak_ada_akta' => '49484',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_akta' => 'Akta Perceraian',
                'yang_tercatat' => '2074',
                'ada_akta' => '972',
                'tidak_ada_akta' => '1102',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_akta' => 'Akta Kematian',
                'yang_tercatat' => '4080',
                'ada_akta' => '4080',
                'tidak_ada_akta' => '0',
            ],
        ]);
    }
}
