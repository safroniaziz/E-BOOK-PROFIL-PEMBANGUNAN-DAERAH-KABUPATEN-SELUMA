<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerAkta5Tahun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Kepemilikan Akta Kelahiran Anak (Usia 0-5 Tahun) Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah' => '2490',
                'ada_akta' => '2458',
                'tidak_ada_akta' => '32',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah' => '842',
                'ada_akta' => '830',
                'tidak_ada_akta' => '12',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah' => '819',
                'ada_akta' => '787',
                'tidak_ada_akta' => '32',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah' => '996',
                'ada_akta' => '940',
                'tidak_ada_akta' => '56',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah' => '1585',
                'ada_akta' => '1542',
                'tidak_ada_akta' => '43',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah' => '1735',
                'ada_akta' => '1718',
                'tidak_ada_akta' => '17',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah' => '762',
                'ada_akta' => '721',
                'tidak_ada_akta' => '41',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah' => '803',
                'ada_akta' => '799',
                'tidak_ada_akta' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah' => '824',
                'ada_akta' => '808',
                'tidak_ada_akta' => '16',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah' => '611',
                'ada_akta' => '586',
                'tidak_ada_akta' => '25',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah' => '1045',
                'ada_akta' => '1028',
                'tidak_ada_akta' => '17',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah' => '877',
                'ada_akta' => '855',
                'tidak_ada_akta' => '22',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah' => '373',
                'ada_akta' => '365',
                'tidak_ada_akta' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah' => '1263',
                'ada_akta' => '1194',
                'tidak_ada_akta' => '69',
            ],
        ]);
    }
}
