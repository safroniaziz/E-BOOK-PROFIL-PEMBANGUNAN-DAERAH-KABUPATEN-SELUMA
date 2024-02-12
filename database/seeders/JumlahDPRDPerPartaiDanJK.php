<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahDPRDPerPartaiDanJK extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Anggota Dewan Perwakilan Rakyat Daerah (DPRD)  Menurut Partai Politik Dan Jenis Kelamin Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'partai_politik' => 'PDIP',
                'jumlah_laki_laki' => '5',
                'jumlah_perempuan' => '0',
                'jumlah' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'NASIONAL DEMOKRAT',
                'jumlah_laki_laki' => '4',
                'jumlah_perempuan' => '0',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'GOLONGAN KARYA',
                'jumlah_laki_laki' => '4',
                'jumlah_perempuan' => '0',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'GERAKAN INDONESIA RAYA',
                'jumlah_laki_laki' => '3',
                'jumlah_perempuan' => '1',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'DEMOKRAT',
                'jumlah_laki_laki' => '3',
                'jumlah_perempuan' => '0',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI AMANAT NASIONAL',
                'jumlah_laki_laki' => '2',
                'jumlah_perempuan' => '0',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PKIP',
                'jumlah_laki_laki' => '2',
                'jumlah_perempuan' => '0',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI PERSATUAN PEMBANGUNAN',
                'jumlah_laki_laki' => '2',
                'jumlah_perempuan' => '0',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI KEADILAN SEJAHTERA',
                'jumlah_laki_laki' => '1',
                'jumlah_perempuan' => '0',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'partai_politik' => 'PARTAI PERSATUAN INDONESIA',
                'jumlah_laki_laki' => '1',
                'jumlah_perempuan' => '2',
                'jumlah' => '3',
            ],
        ]);
    }
}
