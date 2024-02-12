<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerPekerjaanDanJK extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Penduduk Kabupaten Seluma Menurut  Jenis Pekerjaan dan Jenis Kelamin Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => '110307',
                'jumlah_penduduk_laki_laki' => 23065,
                'jumlah_penduduk_perempuan' => 21553,
                'jumlah_penduduk' => 44618,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Mengurus Rumah Tangga',
                'jumlah_penduduk_laki_laki' => 1,
                'jumlah_penduduk_perempuan' => 24359,
                'jumlah_penduduk' => 24360,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pelajar/Mahasiswa',
                'jumlah_penduduk_laki_laki' => 24668,
                'jumlah_penduduk_perempuan' => 20296,
                'jumlah_penduduk' => 44964,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pensiunan',
                'jumlah_penduduk_laki_laki' => 440,
                'jumlah_penduduk_perempuan' => 102,
                'jumlah_penduduk' => 542,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pegawai Negeri Sipil (PNS)',
                'jumlah_penduduk_laki_laki' => 1743,
                'jumlah_penduduk_perempuan' => 1425,
                'jumlah_penduduk' => 3168,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Tentara Nasional Indonesia',
                'jumlah_penduduk_laki_laki' => 139,
                'jumlah_penduduk_perempuan' => 2,
                'jumlah_penduduk' => 141,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Kepolisian RI (Polri)',
                'jumlah_penduduk_laki_laki' => 161,
                'jumlah_penduduk_perempuan' => 6,
                'jumlah_penduduk' => 167,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Perdagangan',
                'jumlah_penduduk_laki_laki' => 165,
                'jumlah_penduduk_perempuan' => 124,
                'jumlah_penduduk' => 289,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Petani/Pekebun',
                'jumlah_penduduk_laki_laki' => 37714,
                'jumlah_penduduk_perempuan' => 28137,
                'jumlah_penduduk' => 65851,
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Peternak',
                'jumlah_penduduk_laki_laki' => 1,
                'jumlah_penduduk_perempuan' => 10,
                'jumlah_penduduk' => 24,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Nelayan/Perikanan',
                'jumlah_penduduk_laki_laki' => 12,
                'jumlah_penduduk_perempuan' => 6,
                'jumlah_penduduk' => 130,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Transportasi',
                'jumlah_penduduk_laki_laki' => 6,
                'jumlah_penduduk_perempuan' => 2,
                'jumlah_penduduk' => 8,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Karyawan Swasta',
                'jumlah_penduduk_laki_laki' => 7341,
                'jumlah_penduduk_perempuan' => 2537,
                'jumlah_penduduk' => 9878,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Karyawan Bumn',
                'jumlah_penduduk_laki_laki' => 586,
                'jumlah_penduduk_perempuan' => 53,
                'jumlah_penduduk' => 639,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Karyawan Bumd',
                'jumlah_penduduk_laki_laki' => 24,
                'jumlah_penduduk_perempuan' => 10,
                'jumlah_penduduk' => 34,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Karyawan Honorer',
                'jumlah_penduduk_laki_laki' => 318,
                'jumlah_penduduk_perempuan' => 704,
                'jumlah_penduduk' => 1022,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Buruh Harian Lepas',
                'jumlah_penduduk_laki_laki' => 941,
                'jumlah_penduduk_perempuan' => 104,
                'jumlah_penduduk' => 1045,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Buruh Tani/Perkebunan',
                'jumlah_penduduk_laki_laki' => 864,
                'jumlah_penduduk_perempuan' => 331,
                'jumlah_penduduk' => 1195,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Buruh Nelayan/Perikanan',
                'jumlah_penduduk_laki_laki' => 11,
                'jumlah_penduduk_perempuan' => 1,
                'jumlah_penduduk' => 12,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pembantu Rumah Tangga',
                'jumlah_penduduk_laki_laki' => 0,
                'jumlah_penduduk_perempuan' => 5,
                'jumlah_penduduk' => 5,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Tukang Batu',
                'jumlah_penduduk_laki_laki' => 16,
                'jumlah_penduduk_perempuan' => 1,
                'jumlah_penduduk' => 17,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Tukang Kayu',
                'jumlah_penduduk_laki_laki' => 31,
                'jumlah_penduduk_perempuan' => 1,
                'jumlah_penduduk' => 32,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Tukang Las/Pandai Besi',
                'jumlah_penduduk_laki_laki' => 7,
                'jumlah_penduduk_perempuan' => 0,
                'jumlah_penduduk' => 7,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Tukang Jahit',
                'jumlah_penduduk_laki_laki' => 9,
                'jumlah_penduduk_perempuan' => 4,
                'jumlah_penduduk' => 13,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Mekanik',
                'jumlah_penduduk_laki_laki' => 19,
                'jumlah_penduduk_perempuan' => 1,
                'jumlah_penduduk' => 20,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pendeta',
                'jumlah_penduduk_laki_laki' => 22,
                'jumlah_penduduk_perempuan' => 3,
                'jumlah_penduduk' => 25,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Anggota DPRD Kab/Kota',
                'jumlah_penduduk_laki_laki' => 11,
                'jumlah_penduduk_perempuan' => 3,
                'jumlah_penduduk' => 14,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Dosen',
                'jumlah_penduduk_laki_laki' => 7,
                'jumlah_penduduk_perempuan' => 9,
                'jumlah_penduduk' => 16,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Guru',
                'jumlah_penduduk_laki_laki' => 50,
                'jumlah_penduduk_perempuan' => 153,
                'jumlah_penduduk' => 203,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Dokter',
                'jumlah_penduduk_laki_laki' => 10,
                'jumlah_penduduk_perempuan' => 14,
                'jumlah_penduduk' => 24,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Bidan',
                'jumlah_penduduk_laki_laki' => 0,
                'jumlah_penduduk_perempuan' => 116,
                'jumlah_penduduk' => 116,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Perawat',
                'jumlah_penduduk_laki_laki' => 7,
                'jumlah_penduduk_perempuan' => 21,
                'jumlah_penduduk' => 28,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Apoteker',
                'jumlah_penduduk_laki_laki' => 1,
                'jumlah_penduduk_perempuan' => 4,
                'jumlah_penduduk' => 5,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Sopir',
                'jumlah_penduduk_laki_laki' => 99,
                'jumlah_penduduk_perempuan' => 1,
                'jumlah_penduduk' => 100,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pedagang',
                'jumlah_penduduk_laki_laki' => 252,
                'jumlah_penduduk_perempuan' => 167,
                'jumlah_penduduk' => 419,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Perangkat Desa',
                'jumlah_penduduk_laki_laki' => 250,
                'jumlah_penduduk_perempuan' => 54,
                'jumlah_penduduk' => 304,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Kepala Desa',
                'jumlah_penduduk_laki_laki' => 14,
                'jumlah_penduduk_perempuan' => 1,
                'jumlah_penduduk' => 15,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Wiraswasta',
                'jumlah_penduduk_laki_laki' => 1115,
                'jumlah_penduduk_perempuan' => 3606,
                'jumlah_penduduk' => 14760,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'jenis_pekerjaan' => 'Pekerjaan Lainnya',
                'jumlah_penduduk_laki_laki' => 2,
                'jumlah_penduduk_perempuan' => 12,
                'jumlah_penduduk' => 35,
            ],
        ]);
    }
}
