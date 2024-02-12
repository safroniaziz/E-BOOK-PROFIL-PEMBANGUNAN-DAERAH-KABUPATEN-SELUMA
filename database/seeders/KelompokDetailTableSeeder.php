<?php

namespace Database\Seeders;

use App\Models\KelompokDataSektoral;
use App\Models\KelompokDetail;
use App\Models\LuasWilayahDenganKetinggianTempat;
use App\Models\TableDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelompokDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Luas Wilayah Dengan Ketinggian Tempat')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'ketinggian' => '0-10',
                'luas' => '30.798',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'ketinggian' => '10-25',
                'luas' => '22.314',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'ketinggian' => '25-50',
                'luas' => '27.264',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'ketinggian' => '50-100',
                'luas' => '18.766',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'ketinggian' => '100-500',
                'luas' => '58.387',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'ketinggian' => '500-1000',
                'luas' => '42.307',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'ketinggian' => '>1000',
                'luas' => '40.208',
            ],

        ]);
    }
}
