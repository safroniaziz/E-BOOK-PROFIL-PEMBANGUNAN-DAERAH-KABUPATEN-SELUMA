<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use function Ramsey\Uuid\v1;

class SepuluhBesarPekerjaanPendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Sepuluh Besar Jenis Pekerjaan  Penduduk Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Petani/Pekebun',
                'jumlah_penduduk_perempuan' => '64851',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pelajar/Mahasiswa',
                'jumlah_penduduk_perempuan' => '44964',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Belum/Tidak Bekerja',
                'jumlah_penduduk_perempuan' => '44618',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Mengurus Rumah Tangga',
                'jumlah_penduduk_perempuan' => '24360',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Wiraswasta',
                'jumlah_penduduk_perempuan' => '14760',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Karyawan Swasta',
                'jumlah_penduduk_perempuan' => '9878',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pegawai Negeri Sipil (PNS)',
                'jumlah_penduduk_perempuan' => '3168',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Buruh Tani/Perkebunan',
                'jumlah_penduduk_perempuan' => '1195',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Buruh Harian Lepas',
                'jumlah_penduduk_perempuan' => '1045',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Karyawan Honorer',
                'jumlah_penduduk_perempuan' => '1022',
            ],
        ]);
    }
}
