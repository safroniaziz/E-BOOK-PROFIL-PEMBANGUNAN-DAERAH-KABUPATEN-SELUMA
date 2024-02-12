<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKelompokUmurSD extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut  Kelompok Umur Sekolah Dasar (7-12 Tahun)  Dan Jenis Kelamin Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_laki_laki' => 1857,
                'jumlah_perempuan' => 1768,
                'jumlah_penduduk' => 3625,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_laki_laki' => 641,
                'jumlah_perempuan' => 579,
                'jumlah_penduduk' => 1220,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_laki_laki' => 637,
                'jumlah_perempuan' => 588,
                'jumlah_penduduk' => 1225,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_laki_laki' => 811,
                'jumlah_perempuan' => 811,
                'jumlah_penduduk' => 1622,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_laki_laki' => 1353,
                'jumlah_perempuan' => 1221,
                'jumlah_penduduk' => 2574,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_laki_laki' => 1299,
                'jumlah_perempuan' => 1177,
                'jumlah_penduduk' => 2476,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_laki_laki' => 624,
                'jumlah_perempuan' => 592,
                'jumlah_penduduk' => 1216,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_laki_laki' => 573,
                'jumlah_perempuan' => 561,
                'jumlah_penduduk' => 1134,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_laki_laki' => 591,
                'jumlah_perempuan' => 532,
                'jumlah_penduduk' => 1123,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_laki_laki' => 451,
                'jumlah_perempuan' => 443,
                'jumlah_penduduk' => 894,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_laki_laki' => 825,
                'jumlah_perempuan' => 712,
                'jumlah_penduduk' => 1537,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_laki_laki' => 548,
                'jumlah_perempuan' => 515,
                'jumlah_penduduk' => 1063,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_laki_laki' => 309,
                'jumlah_perempuan' => 268,
                'jumlah_penduduk' => 577,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_laki_laki' => 938,
                'jumlah_perempuan' => 877,
                'jumlah_penduduk' => 1815,
            ],
        ]);
    }
}
