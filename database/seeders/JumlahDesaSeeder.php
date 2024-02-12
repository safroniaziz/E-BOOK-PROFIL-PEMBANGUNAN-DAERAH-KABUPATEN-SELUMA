<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Desa, Kelurahan dan Nama Ibu kota Kecamatan di Kabupaten Seluma')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'nama_ibu_kota' => 'Kembang Mumpo',
                'jumlah_desa' => '25',
                'jumlah_kelurahan' => '1',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'nama_ibu_kota' => 'Pajar Bulan',
                'jumlah_desa' => '23',
                'jumlah_kelurahan' => '1',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'nama_ibu_kota' => 'Masmambang',
                'jumlah_desa' => '15',
                'jumlah_kelurahan' => '1',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'nama_ibu_kota' => 'Padang Cekur',
                'jumlah_desa' => '15',
                'jumlah_kelurahan' => '0',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'nama_ibu_kota' => 'Sukamerindu',
                'jumlah_desa' => '11',
                'jumlah_kelurahan' => '0',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'nama_ibu_kota' => 'Air Keruh',
                'jumlah_desa' => '13',
                'jumlah_kelurahan' => '0',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'nama_ibu_kota' => 'Tais',
                'jumlah_desa' => '0',
                'jumlah_kelurahan' => '7',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'nama_ibu_kota' => 'Rimbo Kedui',
                'jumlah_desa' => '9',
                'jumlah_kelurahan' => '3',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'nama_ibu_kota' => 'Pagar Agung',
                'jumlah_desa' => '9',
                'jumlah_kelurahan' => '0',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'nama_ibu_kota' => 'Selebar',
                'jumlah_desa' => '5',
                'jumlah_kelurahan' => '3',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'nama_ibu_kota' => 'Puguk',
                'jumlah_desa' => '9',
                'jumlah_kelurahan' => '1',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'nama_ibu_kota' => 'Sukaraja',
                'jumlah_desa' => '19',
                'jumlah_kelurahan' => '2',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'nama_ibu_kota' => 'Dermayu',
                'jumlah_desa' => '15',
                'jumlah_kelurahan' => '1',
            ],
            [
                'kelompok_data_sektoral_id' =>  $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'nama_ibu_kota' => 'Rena Panjang',
                'jumlah_desa' => '14',
                'jumlah_kelurahan' => '0',
            ],
        ]);
    }
}
