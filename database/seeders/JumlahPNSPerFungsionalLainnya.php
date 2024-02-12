<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerFungsionalLainnya extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Pegawai Negeri Sipil (PNS) Fungsional Lainnya  (Penyuluh Pertanian) Menurut Golongan Kepangkatan Di Kabupaten Seluma Tahun 2021-2022')->first();
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
                '2021' => '0',
                '2022' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Ic',
                '2021' => '0',
                '2022' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Id',
                '2021' => '0',
                '2022' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIa',
                '2021' => '3',
                '2022' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIb',
                '2021' => '4',
                '2022' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIc',
                '2021' => '1',
                '2022' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IId',
                '2021' => '4',
                '2022' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIa',
                '2021' => '4',
                '2022' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIb',
                '2021' => '7',
                '2022' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIc',
                '2021' => '5',
                '2022' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIId',
                '2021' => '27',
                '2022' => '17',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVa',
                '2021' => '10',
                '2022' => '22',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVb',
                '2021' => '9',
                '2022' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVc',
                '2021' => '0',
                '2022' => '0',
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
