<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerRataAnggotaKeluarga extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut  Rata-rata Anggota Keluarga Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_penduduk' => 34388,
                'jumlah_kepala_keluarga' => 11022,
                'rata_rata_anggota_keluarga' => 3.12,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_penduduk' => 10576,
                'jumlah_kepala_keluarga' => 3252,
                'rata_rata_anggota_keluarga' => 3.25,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_penduduk' => 12612,
                'jumlah_kepala_keluarga' => 4221,
                'rata_rata_anggota_keluarga' => 2.99,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_penduduk' => 15703,
                'jumlah_kepala_keluarga' => 5138,
                'rata_rata_anggota_keluarga' => 3.06,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_penduduk' => 25650,
                'jumlah_kepala_keluarga' => 8453,
                'rata_rata_anggota_keluarga' => 3.03,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_penduduk' => 23591,
                'jumlah_kepala_keluarga' => 7646,
                'rata_rata_anggota_keluarga' => 3.09,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_penduduk' => 12328,
                'jumlah_kepala_keluarga' => 3895,
                'rata_rata_anggota_keluarga' => 3.17,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_penduduk' => 10143,
                'jumlah_kepala_keluarga' => 3151,
                'rata_rata_anggota_keluarga' => 3.22,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_penduduk' => 11297,
                'jumlah_kepala_keluarga' => 3629,
                'rata_rata_anggota_keluarga' => 3.11,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_penduduk' => 9602,
                'jumlah_kepala_keluarga' => 3078,
                'rata_rata_anggota_keluarga' => 3.12,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_penduduk' => 13978,
                'jumlah_kepala_keluarga' => 4447,
                'rata_rata_anggota_keluarga' => 3.14,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_penduduk' => 11382,
                'jumlah_kepala_keluarga' => 3706,
                'rata_rata_anggota_keluarga' => 3.07,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_penduduk' => 6351,
                'jumlah_kepala_keluarga' => 2132,
                'rata_rata_anggota_keluarga' => 2.98,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_penduduk' => 16644,
                'jumlah_kepala_keluarga' => 5536,
                'rata_rata_anggota_keluarga' => 3.01,
            ],
        ]);
    }
}
