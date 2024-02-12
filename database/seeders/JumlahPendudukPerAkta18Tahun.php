<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerAkta18Tahun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Kepemilikan Akta Kelahiran Anak (Usia 0-18 Tahun) Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah' => '9748',
                'ada_akta' => '9556',
                'tidak_ada_akta' => '192',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah' => '3190',
                'ada_akta' => '3155',
                'tidak_ada_akta' => '35',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah' => '3268',
                'ada_akta' => '3191',
                'tidak_ada_akta' => '77',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah' => '4275',
                'ada_akta' => '4135',
                'tidak_ada_akta' => '140',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah' => '6904',
                'ada_akta' => '6756',
                'tidak_ada_akta' => '148',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah' => '6826',
                'ada_akta' => '6735',
                'tidak_ada_akta' => '91',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah' => '3305',
                'ada_akta' => '3217',
                'tidak_ada_akta' => '88',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah' => '2994',
                'ada_akta' => '2981',
                'tidak_ada_akta' => '13',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah' => '3101',
                'ada_akta' => '3061',
                'tidak_ada_akta' => '40',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah' => '2503',
                'ada_akta' => '2456',
                'tidak_ada_akta' => '47',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah' => '4008',
                'ada_akta' => '3954',
                'tidak_ada_akta' => '54',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah' => '3062',
                'ada_akta' => '3004',
                'tidak_ada_akta' => '58',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah' => '1566',
                'ada_akta' => '1530',
                'tidak_ada_akta' => '36',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah' => '4777',
                'ada_akta' => '4631',
                'tidak_ada_akta' => '146',
            ],
        ]);
    }
}
