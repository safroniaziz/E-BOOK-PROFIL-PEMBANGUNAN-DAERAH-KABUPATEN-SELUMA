<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahDPRDPerPartaiDanPendidikan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Dewan Perwakilan Rakyat Daerah (DPRD)  Menurut Partai Politik Dan Pendidikan Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'partai_politik' => 'PDIP',
                'sma' => '0',
                's1' => '5',
                's2' => '0',
                's3' => '0',
                'jumlah' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'NASIONAL DEMOKRAT',
                'sma' => '1',
                's1' => '2',
                's2' => '1',
                's3' => '0',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'GOLONGAN KARYA',
                'sma' => '0',
                's1' => '3',
                's2' => '1',
                's3' => '0',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'GERAKAN INDONESIA RAYA',
                'sma' => '1',
                's1' => '1',
                's2' => '2',
                's3' => '0',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'DEMOKRAT',
                'sma' => '1',
                's1' => '2',
                's2' => '0',
                's3' => '0',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI AMANAT NASIONAL',
                'sma' => '1',
                's1' => '1',
                's2' => '0',
                's3' => '0',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PKIP',
                'sma' => '0',
                's1' => '2',
                's2' => '0',
                's3' => '0',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI PERSATUAN PEMBANGUNAN',
                'sma' => '1',
                's1' => '1',
                's2' => '0',
                's3' => '0',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI KEADILAN SEJAHTERA',
                'sma' => '0',
                's1' => '1',
                's2' => '0',
                's3' => '0',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI PERSATUAN INDONESIA',
                'sma' => '0',
                's1' => '3',
                's2' => '0',
                's3' => '0',
                'jumlah' => '3',
            ],
        ]);
    }
}
