<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKelompokUmurPT extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut  Kelompok Umur Perguruan Tinggi (19-22 Tahun)  	Dan Jenis Kelamin Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_laki_laki' => 1205,
                'jumlah_perempuan' => 1091,
                'jumlah_penduduk' => 2296,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_laki_laki' => 356,
                'jumlah_perempuan' => 336,
                'jumlah_penduduk' => 692,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_laki_laki' => 490,
                'jumlah_perempuan' => 464,
                'jumlah_penduduk' => 954,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_laki_laki' => 636,
                'jumlah_perempuan' => 575,
                'jumlah_penduduk' => 1211,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_laki_laki' => 958,
                'jumlah_perempuan' => 884,
                'jumlah_penduduk' => 1842,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_laki_laki' => 814,
                'jumlah_perempuan' => 812,
                'jumlah_penduduk' => 1626,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_laki_laki' => 508,
                'jumlah_perempuan' => 446,
                'jumlah_penduduk' => 954,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_laki_laki' => 351,
                'jumlah_perempuan' => 352,
                'jumlah_penduduk' => 703,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_laki_laki' => 396,
                'jumlah_perempuan' => 430,
                'jumlah_penduduk' => 826,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_laki_laki' => 423,
                'jumlah_perempuan' => 359,
                'jumlah_penduduk' => 782,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_laki_laki' => 494,
                'jumlah_perempuan' => 498,
                'jumlah_penduduk' => 992,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_laki_laki' => 463,
                'jumlah_perempuan' => 416,
                'jumlah_penduduk' => 879,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_laki_laki' => 226,
                'jumlah_perempuan' => 204,
                'jumlah_penduduk' => 430,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_laki_laki' => 667,
                'jumlah_perempuan' => 614,
                'jumlah_penduduk' => 1281,
            ],
        ]);
    }
}
