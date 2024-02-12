<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKelompokUsiaDanJK extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Kelompok Umur dan Jenis Kelamin Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'kelompok_umur' => '0-4 Tahun',
                'jumlah_laki_laki' => '5956',
                'jumlah_perempuan' => '5660',
                'jumlah_penduduk' => '11616',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '5-9 Tahun',
                'jumlah_laki_laki' => 8993,
                'jumlah_perempuan' => 8547,
                'jumlah_penduduk' => 17540,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '10-14 Tahun',
                'jumlah_laki_laki' => 10029,
                'jumlah_perempuan' => 9113,
                'jumlah_penduduk' => 19142,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '15-19 Tahun',
                'jumlah_laki_laki' => 9890,
                'jumlah_perempuan' => 9141,
                'jumlah_penduduk' => 19031,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '20-24 Tahun',
                'jumlah_laki_laki' => 10105,
                'jumlah_perempuan' => 9364,
                'jumlah_penduduk' => 19469,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '25-29 Tahun',
                'jumlah_laki_laki' => 8737,
                'jumlah_perempuan' => 8176,
                'jumlah_penduduk' => 16913,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '30-34 Tahun',
                'jumlah_laki_laki' => 8513,
                'jumlah_perempuan' => 8407,
                'jumlah_penduduk' => 16920,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '35-39 Tahun',
                'jumlah_laki_laki' => 8543,
                'jumlah_perempuan' => 8195,
                'jumlah_penduduk' => 16738,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '40-44 Tahun',
                'jumlah_laki_laki' => 9164,
                'jumlah_perempuan' => 8487,
                'jumlah_penduduk' => 17651,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '45-49 Tahun',
                'jumlah_laki_laki' => 7688,
                'jumlah_perempuan' => 7114,
                'jumlah_penduduk' => 14802,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '50-54 Tahun',
                'jumlah_laki_laki' => 6640,
                'jumlah_perempuan' => 6136,
                'jumlah_penduduk' => 12776,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '55-59 Tahun',
                'jumlah_laki_laki' => 5360,
                'jumlah_perempuan' => 4989,
                'jumlah_penduduk' => 10349,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '60-64 Tahun',
                'jumlah_laki_laki' => 4276,
                'jumlah_perempuan' => 3971,
                'jumlah_penduduk' => 8247,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '65-69 Tahun',
                'jumlah_laki_laki' => 2855,
                'jumlah_perempuan' => 2683,
                'jumlah_penduduk' => 5538,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '70-74 Tahun',
                'jumlah_laki_laki' => 1618,
                'jumlah_perempuan' => 1668,
                'jumlah_penduduk' => 3286,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '>74 Tahun',
                'jumlah_laki_laki' => 1940,
                'jumlah_perempuan' => 2287,
                'jumlah_penduduk' => 4227,
            ],
        ]);
    }
}
