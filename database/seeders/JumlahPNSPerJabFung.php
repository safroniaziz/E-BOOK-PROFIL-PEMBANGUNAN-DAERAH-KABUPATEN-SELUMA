<?php

namespace Database\Seeders;

use App\Models\KelompokDetail;
use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JumlahPNSPerJabFung extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompokDataSektoral = KelompokDataSektoral::where('kelompok_data','Jumlah Pegawai Negeri Sipil (PNS) Menurut Kelompok Jabatan Fungsional Di Kabupaten Seluma Tahun 2022')->first();
        KelompokDetail::insert([
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Administrator Database Kependudukan Ahli Muda',
                'jumlah' => '2',
            ],

            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Administrator Kesehatan Ahli Madya',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Administrator Kesehatan Ahli Muda',
                'jumlah' => '6',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Pengendali Organisme Pengganggu Tumbuhan Ahli Muda',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penguji Kendaraan Bermotor Mahir',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penguji Kendaraan Bermotor Terampil',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penilik Ahli Muda',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Hukum Muda / Ahli Muda',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Kesehatan Masyarakat Ahli Muda',
                'jumlah' => '10',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Keluarga Berencana Ahli Muda',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Kesehatan Masyarakat Ahli Madya',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Kesehatan Masyarakat Ahli Pertama',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Kesehatan Masyarakat Mahir',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Kesehatan Masyarakat Penyelia',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Lingkungan Hidup Ahli Muda',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Perikanan Ahli Muda',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Perindustrian dan Perdagangan Ahli Muda',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Pertanian Ahli Madya',
                'jumlah' => '30',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Pertanian Ahli Muda',
                'jumlah' => '21',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Pertanian Ahli Pertama',
                'jumlah' => '9',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Pertanian Mahir',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Pertanian Pelaksana Pemula / Pemula',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Sosial Ahli Muda',
                'jumlah' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Penyuluh Pertanian Terampil',
                'jumlah' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Ahli Muda',
                'jumlah' => '6',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Gigi Pelaksana Lanjutan / Mahir',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Gigi Penyelia',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Gigi Mahir',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Ahli Pertama',
                'jumlah' => '14',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Gigi Pelaksana / Terampil',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perancang Peraturan Perundang-undangan Ahli Muda',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Gigi Terampil',
                'jumlah' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Madya / Ahli Madya',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Mahir',
                'jumlah' => '30',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Muda / Ahli Muda',
                'jumlah' => '30',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Pelaksana Lanjutan / Mahir',
                'jumlah' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Penyelia',
                'jumlah' => '39',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Pelaksana / Terampil',
                'jumlah' => '6',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Terampil',
                'jumlah' => '32',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perawat Pertama / Ahli Pertama',
                'jumlah' => '8',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perekam Medis Pelaksana / Terampil',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perekam Medis Terampil',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Perencana Ahli Muda',
                'jumlah' => '30',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Pranata Hubungan Masyarakat Ahli Muda',
                'jumlah' => '7',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Polisi Pamong Praja Ahli Pertama',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Pranata Komputer Ahli Muda',
                'jumlah' => '4',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Pranata Laboratorium Kesehatan Pelaksana Lanjutan / Mahir',
                'jumlah' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Pranata Laboratorium Kesehatan Penyelia',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Pustakawan Ahli Muda',
                'jumlah' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Radiografer Pelaksana / Terampil',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Radiografer Terampil',
                'jumlah' => '1',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Statistisi Ahli Muda',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Sandiman Ahli Muda',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Sanitarian Penyelia',
                'jumlah' => '5',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Teknik Pengairan Ahli Muda',
                'jumlah' => '2',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Teknik Tata Bangunan dan Perumahan Ahli Muda',
                'jumlah' => '6',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Teknik Jalan dan Jembatan Ahli Muda',
                'jumlah' => '3',
            ],
            [
                'kelompok_data_sektoral_id' => $kelompokDataSektoral->id,
                'rincian_kelompok_jabatan_fungsional' => 'Teknik Penyehatan Lingkungan Ahli Muda',
                'jumlah' => '2',
            ],
        ]);
    }
}
