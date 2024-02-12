<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerGolonganKepangkatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Data Pegawai Negeri Sipil Menurut Golongan Kepangkatan Di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Ib',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Ic',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'Id',
                'jumlah' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIa',
                'jumlah' => '11',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIb',
                'jumlah' => '20',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIc',
                'jumlah' => '65',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IId',
                'jumlah' => '180',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIa',
                'jumlah' => '546',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIb',
                'jumlah' => '407',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIIc',
                'jumlah' => '547',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IIId',
                'jumlah' => '777',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVa',
                'jumlah' => '579',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVb',
                'jumlah' => '203',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVc',
                'jumlah' => '18',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_pangkat_golongan' => 'IVd',
                'jumlah' => '0',
            ],
        ]);
    }
}
