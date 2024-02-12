<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerStruktural extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Pegawai Negeri Sipil (PNS) Struktural dan Fungsional Umum Menurut Golongan Kepangkatan Di Kabupaten Seluma Tahun 2021-2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Ia',
                '2021' => '0',
                '2022' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Ib',
                '2021' => '1',
                '2022' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Ic',
                '2021' => '2',
                '2022' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Id',
                '2021' => '6',
                '2022' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIa',
                '2021' => '8',
                '2022' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIb',
                '2021' => '20',
                '2022' => '14',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIc',
                '2021' => '58',
                '2022' => '43',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IId',
                '2021' => '99',
                '2022' => '72',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIa',
                '2021' => '468',
                '2022' => '390',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIb',
                '2021' => '237',
                '2022' => '133',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIc',
                '2021' => '315',
                '2022' => '188',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIId',
                '2021' => '321',
                '2022' => '288',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVa',
                '2021' => '227',
                '2022' => '116',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVb',
                '2021' => '38',
                '2022' => '37',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVc',
                '2021' => '19',
                '2022' => '18',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVd',
                '2021' => '0',
                '2022' => '0',
            ],
        ]);
    }
}
