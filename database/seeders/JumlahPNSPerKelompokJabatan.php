<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerKelompokJabatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Pegawai Negeri Sipil Menurut Kelompok Jabatan Di Kabupaten Seluma Tahun 2019-2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_jabatan' => 'Struktural',
                '2019' => '726',
                '2020' => '664',
                '2021' => '649',
                '2022' => '485',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_jabatan' => 'Fungsional Umum',
                '2019' => '987',
                '2020' => '1033',
                '2021' => '1170',
                '2022' => '770',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_jabatan' => 'Fungsional Tertentu',
                '2019' => '2004',
                '2020' => '1998',
                '2021' => '1701',
                '2022' => '2106',
            ],
        ]);
    }
}
