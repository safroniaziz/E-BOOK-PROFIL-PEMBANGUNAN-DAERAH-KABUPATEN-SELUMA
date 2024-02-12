<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKelompokUsia extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Penduduk Berdasarkan Kelompok Usia di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '0-4 Tahun',
                    'jumlah' => '11606',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '5-9 Tahun',
                    'jumlah' => '17540',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '10-14 Tahun',
                    'jumlah' => '19142',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '15-19 Tahun',
                    'jumlah' => '19031',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '20-24 Tahun',
                    'jumlah' => '19469',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '25-29 Tahun',
                    'jumlah' => '16913',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '30-34 Tahun',
                    'jumlah' => '16920',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '35-39 Tahun',
                    'jumlah' => '16738',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '40-44 Tahun',
                    'jumlah' => '17651',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '45-49 Tahun',
                    'jumlah' => '14802',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '50-54 Tahun',
                    'jumlah' => '12776',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '55-59 Tahun',
                    'jumlah' => '10349',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '60-64 Tahun',
                    'jumlah' => '8247',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '65-69 Tahun',
                    'jumlah' => '5538',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '70-75 Tahun',
                    'jumlah' => '3286',
                ],
                [
                    'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                    'kelompok_umur' => '>75 Tahun',
                    'jumlah' => '4227',
                ],
        ]);
    }
}
