<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKK extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Penduduk menurut Kepala Keluarga  di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_laki_laki' => 9278,
                'jumlah_perempuan' => 1744,
                'jumlah' => 11022,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_laki_laki' => 2705,
                'jumlah_perempuan' => 547,
                'jumlah' => 3252,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_laki_laki' => 3438,
                'jumlah_perempuan' => 783,
                'jumlah' => 4221,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_laki_laki' => 4298,
                'jumlah_perempuan' => 840,
                'jumlah' => 5138,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_laki_laki' => 6998,
                'jumlah_perempuan' => 1455,
                'jumlah' => 8453,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_laki_laki' => 6297,
                'jumlah_perempuan' => 1349,
                'jumlah' => 7646,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_laki_laki' => 3231,
                'jumlah_perempuan' => 664,
                'jumlah' => 3895,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_laki_laki' => 2685,
                'jumlah_perempuan' => 466,
                'jumlah' => 3151,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_laki_laki' => 2998,
                'jumlah_perempuan' => 631,
                'jumlah' => 3629,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_laki_laki' => 2592,
                'jumlah_perempuan' => 486,
                'jumlah' => 3078,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_laki_laki' => 3748,
                'jumlah_perempuan' => 699,
                'jumlah' => 4447,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_laki_laki' => 3145,
                'jumlah_perempuan' => 561,
                'jumlah' => 3706,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_laki_laki' => 1786,
                'jumlah_perempuan' => 346,
                'jumlah' => 2132,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_laki_laki' => 4601,
                'jumlah_perempuan' => 935,
                'jumlah' => 5536,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Jumlah',
                'jumlah_laki_laki' => 57800,
                'jumlah_perempuan' => 11506,
                'jumlah' => 69306,
            ],
        ]);
    }
}
