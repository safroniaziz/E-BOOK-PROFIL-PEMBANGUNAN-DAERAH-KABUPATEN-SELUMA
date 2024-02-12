<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerKelompokUmur2022 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Data Pegawai Negeri Sipil (PNS) Menurut Kelompok Umur  di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '18-20',
                'jumlah' => '0',
                'persentase' => '0.00',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '21-25',
                'jumlah' => '26',
                'persentase' => '0.77',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '26-30',
                'jumlah' => '179',
                'persentase' => '5.33',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '31-35',
                'jumlah' => '465',
                'persentase' => '13.84',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '36-40',
                'jumlah' => '679',
                'persentase' => '20.20',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '41-45',
                'jumlah' => '597',
                'persentase' => '17.76',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '46-50',
                'jumlah' => '449',
                'persentase' => '13.36',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '51-55',
                'jumlah' => '534',
                'persentase' => '15.89',
            ],
        ]);
    }
}
