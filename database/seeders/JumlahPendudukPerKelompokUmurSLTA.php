<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKelompokUmurSLTA extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut Kelompok Umur SLTA (16-18 Tahun) Dan Jenis Kelamin Perkecamatan Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_laki_laki' => 904,
                'jumlah_perempuan' => 860,
                'jumlah_penduduk' => 1764,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_laki_laki' => 263,
                'jumlah_perempuan' => 256,
                'jumlah_penduduk' => 519,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_laki_laki' => 342,
                'jumlah_perempuan' => 333,
                'jumlah_penduduk' => 675,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_laki_laki' => 446,
                'jumlah_perempuan' => 463,
                'jumlah_penduduk' => 909,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_laki_laki' => 769,
                'jumlah_perempuan' => 695,
                'jumlah_penduduk' => 1464,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_laki_laki' => 719,
                'jumlah_perempuan' => 615,
                'jumlah_penduduk' => 1334,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_laki_laki' => 362,
                'jumlah_perempuan' => 312,
                'jumlah_penduduk' => 674,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_laki_laki' => 259,
                'jumlah_perempuan' => 235,
                'jumlah_penduduk' => 494,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_laki_laki' => 327,
                'jumlah_perempuan' => 263,
                'jumlah_penduduk' => 590,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_laki_laki' => 261,
                'jumlah_perempuan' => 246,
                'jumlah_penduduk' => 507,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_laki_laki' => 375,
                'jumlah_perempuan' => 350,
                'jumlah_penduduk' => 725,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_laki_laki' => 288,
                'jumlah_perempuan' => 289,
                'jumlah_penduduk' => 577,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_laki_laki' => 155,
                'jumlah_perempuan' => 142,
                'jumlah_penduduk' => 297,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_laki_laki' => 468,
                'jumlah_perempuan' => 406,
                'jumlah_penduduk' => 874,
            ],
        ]);
    }
}
