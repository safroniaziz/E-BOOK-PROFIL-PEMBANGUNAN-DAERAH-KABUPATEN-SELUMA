<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPosbintuPTMPerKecamatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Posbindu PTM* Menurut Kecamatan  Dan Puskesmas Di Kabupaten Seluma Tahun 2020-2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'puskesmas' => 'Puskesmas Babatan',
                '2020' => '10',
                '2021' => '11',
                '2022' => '11',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'puskesmas' => 'Puskesmas Riak Siabun',
                '2020' => '3',
                '2021' => '7',
                '2022' => '7',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Sukaraja',
                'puskesmas' => 'Puskesmas Cahaya Negeri',
                '2020' => '10',
                '2021' => '11',
                '2022' => '11',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'puskesmas' => 'Puskesmas Dermayu',
                '2020' => '10',
                '2021' => '10',
                '2022' => '10',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Air Periukan',
                'puskesmas' => 'Puskesmas Air Periukan',
                '2020' => '4',
                '2021' => '5',
                '2022' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'puskesmas' => 'Puskesmas Dusun Tengah',
                '2020' => '7',
                '2021' => '8',
                '2022' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Lubuk Sandi',
                'puskesmas' => 'Puskesmas Tumbuan',
                '2020' => '8',
                '2021' => '8',
                '2022' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Barat',
                'puskesmas' => 'Puskesmas Talang Tinggi',
                '2020' => '1',
                '2021' => '10',
                '2022' => '10',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma',
                'puskesmas' => 'Puskesmas Kota Tais',
                '2020' => '7',
                '2021' => '6',
                '2022' => '6',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Timur',
                'puskesmas' => 'Puskesmas Rimbo Kedui',
                '2020' => '14',
                '2021' => '14',
                '2022' => '14',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Utara',
                'puskesmas' => 'Puskesmas Puguk',
                '2020' => '9',
                '2021' => '10',
                '2022' => '10',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Seluma Selatan',
                'puskesmas' => 'Puskesmas Seluma Timur',
                '2020' => '8',
                '2021' => '11',
                '2022' => '11',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo',
                'puskesmas' => 'Puskesmas Ulu Talo',
                '2020' => '13',
                '2021' => '13',
                '2022' => '13',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ulu Talo',
                'puskesmas' => 'Puskesmas Masmambang',
                '2020' => '15',
                '2021' => '15',
                '2022' => '15',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'puskesmas' => 'Puskesmas Ilir Talo',
                '2020' => '8',
                '2021' => '8',
                '2022' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Ilir Talo',
                'puskesmas' => 'Puskesmas Penago II',
                '2020' => '5',
                '2021' => '7',
                '2022' => '7',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Talo Kecil',
                'puskesmas' => 'Puskesmas Sukamerindu',
                '2020' => '11',
                '2021' => '10',
                '2022' => '10',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'puskesmas' => 'Puskesmas Pajar Bulan',
                '2020' => '15',
                '2021' => '16',
                '2022' => '16',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas',
                'puskesmas' => 'Puskesmas Renah Gajah Mati',
                '2020' => '8',
                '2021' => '8',
                '2022' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'puskesmas' => 'Puskesmas Kembang Mumpo',
                '2020' => '14',
                '2021' => '15',
                '2022' => '15',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'puskesmas' => 'Puskesmas Muara Maras',
                '2020' => '5',
                '2021' => '5',
                '2022' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'nama_kecamatan' => 'Semidang Alas Maras',
                'puskesmas' => 'Puskesmas Gunung Kembang',
                '2020' => '6',
                '2021' => '6',
                '2022' => '6',
            ],
        ]);
    }
}
