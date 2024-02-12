<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerKecamatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Penduduk Menurut Jenis Kelamin Per Kecamatan Di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'jumlah_penduduk_laki_laki' => 17641,
                'jumlah_penduduk_perempuan' => 16747,
                'jumlah_penduduk' => 34388,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'jumlah_penduduk_laki_laki' => 5390,
                'jumlah_penduduk_perempuan' => 5186,
                'jumlah_penduduk' => 10576,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'jumlah_penduduk_laki_laki' => 6461,
                'jumlah_penduduk_perempuan' => 6151,
                'jumlah_penduduk' => 12612,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'jumlah_penduduk_laki_laki' => 8084,
                'jumlah_penduduk_perempuan' => 7619,
                'jumlah_penduduk' => 15703,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'jumlah_penduduk_laki_laki' => 13180,
                'jumlah_penduduk_perempuan' => 12470,
                'jumlah_penduduk' => 25650,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'jumlah_penduduk_laki_laki' => 12068,
                'jumlah_penduduk_perempuan' => 11523,
                'jumlah_penduduk' => 23591,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'jumlah_penduduk_laki_laki' => 6433,
                'jumlah_penduduk_perempuan' => 5895,
                'jumlah_penduduk' => 12328,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'jumlah_penduduk_laki_laki' => 5222,
                'jumlah_penduduk_perempuan' => 4921,
                'jumlah_penduduk' => 10143,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'jumlah_penduduk_laki_laki' => 5779,
                'jumlah_penduduk_perempuan' => 5518,
                'jumlah_penduduk' => 11297,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'jumlah_penduduk_laki_laki' => 5073,
                'jumlah_penduduk_perempuan' => 4529,
                'jumlah_penduduk' => 9602,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'jumlah_penduduk_laki_laki' => 7211,
                'jumlah_penduduk_perempuan' => 6767,
                'jumlah_penduduk' => 13978,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'jumlah_penduduk_laki_laki' => 5866,
                'jumlah_penduduk_perempuan' => 5516,
                'jumlah_penduduk' => 11382,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'jumlah_penduduk_laki_laki' => 3317,
                'jumlah_penduduk_perempuan' => 3034,
                'jumlah_penduduk' => 6351,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'jumlah_penduduk_laki_laki' => 8582,
                'jumlah_penduduk_perempuan' => 8062,
                'jumlah_penduduk' => 16644,
            ],
        ]);
    }
}
