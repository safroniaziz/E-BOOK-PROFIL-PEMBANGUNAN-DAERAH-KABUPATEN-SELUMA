<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LuasWilayahPerKecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Luas Wilayah Per Kecamatan di Kabupaten Seluma')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'luas' => '189.46',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'luas' => '163.81',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'luas' => '257.56',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'luas' => '87.6',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'luas' => '27.41',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'luas' => '80.43',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'luas' => '320.99',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'luas' => '77.08',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'luas' => '91.22',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'luas' => '111.89',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'luas' => '328.54',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'luas' => '113.85',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'luas' => '508.65',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'luas' => '120.07',
            ],
        ]);
    }
}
