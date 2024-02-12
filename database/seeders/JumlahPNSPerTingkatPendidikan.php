<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerTingkatPendidikan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Pegawai Negeri Sipil (PNS) Menurut Tingkat Pendidikan  Di Kabupaten Seluma Tahun 2019-2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SD',
                '2019' => '13',
                '2020' => '9',
                '2021' => '8',
                '2022' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SMP',
                '2019' => '17',
                '2020' => '11',
                '2021' => '10',
                '2022' => '9',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'SMA',
                '2019' => '445',
                '2020' => '377',
                '2021' => '317',
                '2022' => '268',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DI',
                '2019' => '15',
                '2020' => '13',
                '2021' => '7',
                '2022' => '6',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DII',
                '2019' => '83',
                '2020' => '60',
                '2021' => '43',
                '2022' => '36',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DIII',
                '2019' => '385',
                '2020' => '384',
                '2021' => '324',
                '2022' => '312',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'DIV',
                '2019' => '60',
                '2020' => '62',
                '2021' => '101',
                '2022' => '89',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'S1',
                '2019' => '2463',
                '2020' => '2540',
                '2021' => '2455',
                '2022' => '2374',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'S2',
                '2019' => '236',
                '2020' => '238',
                '2021' => '255',
                '2022' => '263',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenjang_pendidikan' => 'S3',
                '2019' => '0',
                '2020' => '1',
                '2021' => '0',
                '2022' => '0',
            ],
        ]);
    }
}
