<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerAktaPerkawinan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Kepemilikan Akta Perkawinan Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'status_cerai_hidup' => '354',
                'ada_akta' => '186',
                'tidak_ada_akta' => '168',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'status_cerai_hidup' => '145',
                'ada_akta' => '68',
                'tidak_ada_akta' => '77',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'status_cerai_hidup' => '159',
                'ada_akta' => '70',
                'tidak_ada_akta' => '89',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'status_cerai_hidup' => '112',
                'ada_akta' => '44',
                'tidak_ada_akta' => '68',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'status_cerai_hidup' => '219',
                'ada_akta' => '101',
                'tidak_ada_akta' => '118',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'status_cerai_hidup' => '225',
                'ada_akta' => '100',
                'tidak_ada_akta' => '125',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'status_cerai_hidup' => '103',
                'ada_akta' => '39',
                'tidak_ada_akta' => '64',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'status_cerai_hidup' => '80',
                'ada_akta' => '40',
                'tidak_ada_akta' => '40',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'status_cerai_hidup' => '144',
                'ada_akta' => '71',
                'tidak_ada_akta' => '73',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'status_cerai_hidup' => '64',
                'ada_akta' => '29',
                'tidak_ada_akta' => '35',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'status_cerai_hidup' => '149',
                'ada_akta' => '72',
                'tidak_ada_akta' => '77',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'status_cerai_hidup' => '104',
                'ada_akta' => '45',
                'tidak_ada_akta' => '59',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'status_cerai_hidup' => '43',
                'ada_akta' => '20',
                'tidak_ada_akta' => '23',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'status_cerai_hidup' => '173',
                'ada_akta' => '87',
                'tidak_ada_akta' => '86',
            ],
        ]);
    }
}
