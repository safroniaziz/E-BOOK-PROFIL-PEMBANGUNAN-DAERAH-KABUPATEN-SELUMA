<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerKelompokUmur extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Data Pegawai Negeri Sipil (PNS) Menurut Kelompok Umur  di Kabupaten Seluma Tahun 2019-2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '18-20',
                '2019' => '0',
                '2020' => '0',
                '2021' => '0',
                '2022' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '21-25',
                '2019' => '63',
                '2020' => '88',
                '2021' => '205',
                '2022' => '26',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '26-30',
                '2019' => '303',
                '2020' => '289',
                '2021' => '205',
                '2022' => '179',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '31-35',
                '2019' => '648',
                '2020' => '565',
                '2021' => '471',
                '2022' => '465',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '36-40',
                '2019' => '711',
                '2020' => '714',
                '2021' => '686',
                '2022' => '679',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '41-45',
                '2019' => '428',
                '2020' => '571',
                '2021' => '607',
                '2022' => '597',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '46-50',
                '2019' => '463',
                '2020' => '421',
                '2021' => '459',
                '2022' => '449',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '51-55',
                '2019' => '672',
                '2020' => '635',
                '2021' => '546',
                '2022' => '534',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'kelompok_umur' => '56-60',
                '2019' => '429',
                '2020' => '412',
                '2021' => '546',
                '2022' => '432',
            ],
        ]);
    }
}
