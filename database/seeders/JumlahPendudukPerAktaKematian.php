<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerAktaKematian extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Kepemilikan  Akta Kematian Perkecamatan')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_penduduk' => '777',
                'ada_akta' => '777',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_penduduk' => '259',
                'ada_akta' => '259',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_penduduk' => '316',
                'ada_akta' => '316',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_penduduk' => '219',
                'ada_akta' => '219',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_penduduk' => '385',
                'ada_akta' => '385',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_penduduk' => '474',
                'ada_akta' => '474',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_penduduk' => '222',
                'ada_akta' => '222',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_penduduk' => '298',
                'ada_akta' => '298',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_penduduk' => '227',
                'ada_akta' => '227',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_penduduk' => '170',
                'ada_akta' => '170',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_penduduk' => '221',
                'ada_akta' => '221',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_penduduk' => '145',
                'ada_akta' => '145',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_penduduk' => '152',
                'ada_akta' => '152',
                'tidak_ada_akta' => '0',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_penduduk' => '215',
                'ada_akta' => '215',
                'tidak_ada_akta' => '0',
            ],
        ]);
    }
}
