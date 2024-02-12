<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKelompokUmurSLTP extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut  Kelompok Umur SLTP (13-15 Tahun)  Dan Jenis Kelamin Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_laki_laki' => 985,
                'jumlah_perempuan' => 847,
                'jumlah_penduduk' => 1832,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_laki_laki' => 301,
                'jumlah_perempuan' => 278,
                'jumlah_penduduk' => 579,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_laki_laki' => 349,
                'jumlah_perempuan' => 287,
                'jumlah_penduduk' => 636,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_laki_laki' => 415,
                'jumlah_perempuan' => 395,
                'jumlah_penduduk' => 810,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_laki_laki' => 709,
                'jumlah_perempuan' => 649,
                'jumlah_penduduk' => 1358,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_laki_laki' => 676,
                'jumlah_perempuan' => 618,
                'jumlah_penduduk' => 1294,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_laki_laki' => 353,
                'jumlah_perempuan' => 319,
                'jumlah_penduduk' => 672,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_laki_laki' => 273,
                'jumlah_perempuan' => 268,
                'jumlah_penduduk' => 541,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_laki_laki' => 286,
                'jumlah_perempuan' => 301,
                'jumlah_penduduk' => 587,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_laki_laki' => 281,
                'jumlah_perempuan' => 239,
                'jumlah_penduduk' => 520,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_laki_laki' => 354,
                'jumlah_perempuan' => 340,
                'jumlah_penduduk' => 694,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_laki_laki' => 309,
                'jumlah_perempuan' => 271,
                'jumlah_penduduk' => 580,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_laki_laki' => 172,
                'jumlah_perempuan' => 152,
                'jumlah_penduduk' => 324,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_laki_laki' => 444,
                'jumlah_perempuan' => 394,
                'jumlah_penduduk' => 838,
            ],
        ]);
    }
}
