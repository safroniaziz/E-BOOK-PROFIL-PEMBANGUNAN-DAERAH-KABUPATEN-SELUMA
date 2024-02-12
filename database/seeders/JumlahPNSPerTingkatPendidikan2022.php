<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerTingkatPendidikan2022 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah dan Persentase Pegawai Negeri Sipil (PNS)  Menurut Tingkat Pendidikan Di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SD',
                'jumlah' => '13',
                'persentase' => '0.12',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SMP',
                'jumlah' => '9',
                'persentase' => '0.27',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SMA',
                'jumlah' => '268',
                'persentase' => '7.97',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DI',
                'jumlah' => '6',
                'persentase' => '0.18',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DII',
                'jumlah' => '36',
                'persentase' => '1.07',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DIII',
                'jumlah' => '312',
                'persentase' => '9.28',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DIV',
                'jumlah' => '89',
                'persentase' => '2.65',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'S1',
                'jumlah' => '2374',
                'persentase' => '70.63',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'S2',
                'jumlah' => '263',
                'persentase' => '7.83',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'S3',
                'jumlah' => '0',
                'persentase' => '0.00',
            ],
        ]);
    }
}
