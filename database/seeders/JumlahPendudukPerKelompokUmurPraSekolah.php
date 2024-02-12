<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKelompokUmurPraSekolah extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma  Menurut Kelompok Umur Pra-Sekolah (0-6 Tahun)  Dan Jenis Kelamin Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_laki_laki' => '1622',
                'jumlah_perempuan' => '1456',
                'jumlah_penduduk' => '3078',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_laki_laki' => 572,
                'jumlah_perempuan' => 467,
                'jumlah_penduduk' => 1039,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_laki_laki' => 498,
                'jumlah_perempuan' => 485,
                'jumlah_penduduk' => 983,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_laki_laki' => 590,
                'jumlah_perempuan' => 622,
                'jumlah_penduduk' => 1212,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_laki_laki' => 996,
                'jumlah_perempuan' => 1005,
                'jumlah_penduduk' => 2001,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_laki_laki' => 1081,
                'jumlah_perempuan' => 1044,
                'jumlah_penduduk' => 2125,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_laki_laki' => 494,
                'jumlah_perempuan' => 471,
                'jumlah_penduduk' => 965,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_laki_laki' => 537,
                'jumlah_perempuan' => 457,
                'jumlah_penduduk' => 994,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_laki_laki' => 519,
                'jumlah_perempuan' => 483,
                'jumlah_penduduk' => 1002,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_laki_laki' => 384,
                'jumlah_perempuan' => 374,
                'jumlah_penduduk' => 758,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_laki_laki' => 680,
                'jumlah_perempuan' => 616,
                'jumlah_penduduk' => 1296,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_laki_laki' => 544,
                'jumlah_perempuan' => 517,
                'jumlah_penduduk' => 1061,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_laki_laki' => 234,
                'jumlah_perempuan' => 246,
                'jumlah_penduduk' => 480,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_laki_laki' => 765,
                'jumlah_perempuan' => 786,
                'jumlah_penduduk' => 1551,
            ],
        ]);
    }
}
