<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPendudukPerStatusHubungan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Penduduk Kabupaten Seluma Menurut Status Hubungan Dalam Keluarga (SHDK) dan Jenis Kelamin di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Kepala Keluarga',
                'jumlah_laki_laki' => 57800,
                'jumlah_perempuan' => 11506,
                'jumlah' => 69306,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Suami',
                'jumlah_laki_laki' => 5,
                'jumlah_perempuan' => 0,
                'jumlah' => 5,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Istri',
                'jumlah_laki_laki' => 0,
                'jumlah_perempuan' => 50394,
                'jumlah' => 50394,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Anak',
                'jumlah_laki_laki' => 51497,
                'jumlah_perempuan' => 40610,
                'jumlah' => 92107,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Menantu',
                'jumlah_laki_laki' => 1,
                'jumlah_perempuan' => 3,
                'jumlah' => 4,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Cucu',
                'jumlah_laki_laki' => 355,
                'jumlah_perempuan' => 306,
                'jumlah' => 661,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Orang Tua',
                'jumlah_laki_laki' => 98,
                'jumlah_perempuan' => 432,
                'jumlah' => 530,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Mertua',
                'jumlah_laki_laki' => 24,
                'jumlah_perempuan' => 112,
                'jumlah' => 136,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Famili Lain',
                'jumlah_laki_laki' => 512,
                'jumlah_perempuan' => 552,
                'jumlah' => 1064,
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'status_hubungan' => 'Lainnya',
                'jumlah_laki_laki' => 15,
                'jumlah_perempuan' => 23,
                'jumlah' => 38,
            ],
        ]);
    }
}
