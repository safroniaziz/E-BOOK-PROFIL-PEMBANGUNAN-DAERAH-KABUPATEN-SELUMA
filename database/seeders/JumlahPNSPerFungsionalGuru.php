<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerFungsionalGuru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Pegawai Negeri Sipil (PNS) Fungsional Guru Menurut Tingkat Pendidikan Di Kabupaten Seluma Tahun 2021-2022')->first();
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
                '2021' => '1',
                '2022' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIb',
                '2021' => '1',
                '2022' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIc',
                '2021' => '2',
                '2022' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IId',
                '2021' => '16',
                '2022' => '6',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIa',
                '2021' => '174',
                '2022' => '51',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIb',
                '2021' => '164',
                '2022' => '123',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIc',
                '2021' => '151',
                '2022' => '156',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIId',
                '2021' => '347',
                '2022' => '299',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVa',
                '2021' => '414',
                '2022' => '399',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVb',
                '2021' => '115',
                '2022' => '138',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVc',
                '2021' => '1',
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
