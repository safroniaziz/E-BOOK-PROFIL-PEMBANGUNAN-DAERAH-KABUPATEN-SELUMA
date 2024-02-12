<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndikatorKinerjaPelayananRS extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Indikator Kinerja Pelayanan Di Rumah Sakit Umum Daerah Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_rumah_sakit' => 'RSUD TAIS',
                'jumlah_tempat_tidur' => '115',
                'pasien_keluar' => '884',
                'jumlah_hari_perawatan' => '18536',
                'jumlah_lama_dirawat' => '3',
                'bor' => '44.4',
                'bto' => '8',
                'toi' => '26',
                'alos' => '0',
            ],
        ]);
    }
}
