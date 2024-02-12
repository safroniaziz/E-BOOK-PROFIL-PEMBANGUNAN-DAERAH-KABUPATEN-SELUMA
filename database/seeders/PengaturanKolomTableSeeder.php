<?php

namespace Database\Seeders;

use App\Models\PengaturanKolom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengaturanKolomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            array(
                "nama_header" => 'Nama Kecamatan',
                "nama_kolom" => 'nama_kecamatan',
            ),
            array(
                "nama_header" => 'Nama Ibu Kota',
                "nama_kolom" => 'nama_ibu_kota',
            ),
            array(
                "nama_header" => 'Jumlah Desa',
                "nama_kolom" => 'jumlah_desa',
            ),
            array(
                "nama_header" => 'Jumlah Kelurahan',
                "nama_kolom" => 'jumlah_kelurahan',
            ),
            array(
                "nama_header" => 'Tahun',
                "nama_kolom" => 'tahun',
            ),
            array(
                "nama_header" => 'Jumlah Penduduk',
                "nama_kolom" => 'jumlah_penduduk',
            ),
            array(
                "nama_header" => 'Jumlah Penduduk Laki-laki',
                "nama_kolom" => 'jumlah_penduduk_laki_laki',
            ),
            array(
                "nama_header" => 'Jumlah Penduduk Perempuan',
                "nama_kolom" => 'jumlah_penduduk_perempuan',
            ),
            array(
                "nama_header" => 'Ketinggian',
                "nama_kolom" => 'ketinggian',
            ),
            array(
                "nama_header" => 'Luas',
                "nama_kolom" => 'luas',
            ),
            array(
                "nama_header" => 'A',
                "nama_kolom" => 'A',
            ),
            array(
                "nama_header" => 'B',
                "nama_kolom" => 'B',
            ),
            array(
                "nama_header" => 'AB',
                "nama_kolom" => 'AB',
            ),
            array(
                "nama_header" => 'O',
                "nama_kolom" => 'O',
            ),
            array(
                "nama_header" => 'A+',
                "nama_kolom" => 'A+',
            ),
            array(
                "nama_header" => 'A-',
                "nama_kolom" => 'A-',
            ),
            array(
                "nama_header" => 'B+',
                "nama_kolom" => 'B+',
            ),
            array(
                "nama_header" => 'B-',
                "nama_kolom" => 'B-',
            ),
            array(
                "nama_header" => 'AB+',
                "nama_kolom" => 'A+',
            ),
            array(
                "nama_header" => 'AB-',
                "nama_kolom" => 'AB-',
            ),
            array(
                "nama_header" => 'O+',
                "nama_kolom" => 'O+',
            ),
            array(
                "nama_header" => 'O-',
                "nama_kolom" => 'O-',
            ),
            array(
                "nama_header" => 'Tidak Tahu',
                "nama_kolom" => 'tidak_tahu',
            ),
            array(
                "nama_header" => 'Islam',
                "nama_kolom" => 'islam',
            ),
            array(
                "nama_header" => 'Kristen',
                "nama_kolom" => 'kristen',
            ),
            array(
                "nama_header" => 'Katolik',
                "nama_kolom" => 'katolik',
            ),
            array(
                "nama_header" => 'Hindu',
                "nama_kolom" => 'hindu',
            ),
            array(
                "nama_header" => 'Buddha',
                "nama_kolom" => 'buddha',
            ),
            array(
                "nama_header" => 'Konghucu',
                "nama_kolom" => 'konghucu',
            ),
            array(
                "nama_header" => 'Aliran Kepercayaan',
                "nama_kolom" => 'aliran_kepercayaan',
            ),
            array(
                "nama_header" => 'Yang Tercatat',
                "nama_kolom" => 'yang_tercatat',
            ),
            array(
                "nama_header" => 'Ada Data',
                "nama_kolom" => 'ada_data',
            ),
            array(
                "nama_header" => 'Tidak Ada Data',
                "nama_kolom" => 'tidak_ada_data',
            ),
            array(
                "nama_header" => 'Usia',
                "nama_kolom" => 'usia',
            ),
            array(
                "nama_header" => 'Ada Akta',
                "nama_kolom" => 'ada_akta',
            ),
            array(
                "nama_header" => 'Tidak Ada Akta',
                "nama_kolom" => 'tidak_ada_akta',
            ),
            array(
                "nama_header" => 'Status Cerai Hidup',
                "nama_kolom" => 'status_cerai_hidup',
            ),
            array(
                "nama_header" => 'Penduduk Mati yang Dilaporkan',
                "nama_kolom" => 'penduduk_mati_yang_dilaporkan',
            ),
            array(
                "nama_header" => 'Kelompok Jabatan',
                "nama_kolom" => 'kelompok_jabatan',
            ),
            array(
                "nama_header" => '2017',
                "nama_kolom" => '2017',
            ),
            array(
                "nama_header" => '2018',
                "nama_kolom" => '2018',
            ),
            array(
                "nama_header" => '2019',
                "nama_kolom" => '2019',
            ),
            array(
                "nama_header" => '2020',
                "nama_kolom" => '2020',
            ),
            array(
                "nama_header" => '2021',
                "nama_kolom" => '2021',
            ),
            array(
                "nama_header" => '2022',
                "nama_kolom" => '2022',
            ),
            array(
                "nama_header" => 'Rincian Kelompok Jabatan Fungsional',
                "nama_kolom" => 'rincian_kelompok_jabatan_fungsional',
            ),
            array(
                "nama_header" => 'Pendidikan',
                "nama_kolom" => 'pendidikan',
            ),
            array(
                "nama_header" => 'Persentase',
                "nama_kolom" => 'persentase',
            ),
            array(
                "nama_header" => 'Pangkat Golongan',
                "nama_kolom" => 'pangkat_golongan',
            ),
            array(
                "nama_header" => 'Rincian Pangkat Golongan',
                "nama_kolom" => 'rincian_pangkat_golongan',
            ),
            array(
                "nama_header" => 'Kelompok Umur',
                "nama_kolom" => 'kelompok_umur',
            ),
            array(
                "nama_header" => 'Partai Politik',
                "nama_kolom" => 'partai_politik',
            ),
            array(
                "nama_header" => 'SMA',
                "nama_kolom" => 'sma',
            ),
            array(
                "nama_header" => 'S1',
                "nama_kolom" => 's1',
            ),
            array(
                "nama_header" => 'S2',
                "nama_kolom" => 's2',
            ),
            array(
                "nama_header" => 'S3',
                "nama_kolom" => 's3',
            ),
            array(
                "nama_header" => 'Nama Rumah Sakit',
                "nama_kolom" => 'nama_rumah_sakit',
            ),
            array(
                "nama_header" => 'Jumlah Tempat Tidur',
                "nama_kolom" => 'jumlah_tempat_tidur',
            ),
            array(
                "nama_header" => 'Pasien Keluar',
                "nama_kolom" => 'pasien_keluar',
            ),
            array(
                "nama_header" => 'Jumlah Hari Perawatan',
                "nama_kolom" => 'jumlah_hari_perawatan',
            ),
            array(
                "nama_header" => 'Jumlah Lama Dirawat',
                "nama_kolom" => 'jumlah_lama_dirawat',
            ),
            array(
                "nama_header" => 'BOR',
                "nama_kolom" => 'bor',
            ),
            array(
                "nama_header" => 'BTO',
                "nama_kolom" => 'bto',
            ),
            array(
                "nama_header" => 'TOI',
                "nama_kolom" => 'toi',
            ),
            array(
                "nama_header" => 'ALOS',
                "nama_kolom" => 'alos',
            ),
            array(
                "nama_header" => 'Puskesmas',
                "nama_kolom" => 'puskesmas',
            ),
            array(
                "nama_header" => 'Unit Kerja',
                "nama_kolom" => 'unit_kerja',
            ),
            array(
                "nama_header" => 'Dokter Spesialis Laki-laki',
                "nama_kolom" => 'dr_spesialis_laki_laki',
            ),
            array(
                "nama_header" => 'Dokter Spesialis Perempuan',
                "nama_kolom" => 'dr_spesialis_perempuan',
            ),
            array(
                "nama_header" => 'Dokter Umum Laki-laki',
                "nama_kolom" => 'dr_umum_laki_laki',
            ),
            array(
                "nama_header" => 'Dokter Umum Perempuan',
                "nama_kolom" => 'dr_umum_perempuan',
            ),
            array(
                "nama_header" => 'Dokter Gigi Laki-laki',
                "nama_kolom" => 'dr_gigi_laki_laki',
            ),
            array(
                "nama_header" => 'Dokter Gigi Perempuan',
                "nama_kolom" => 'dr_gigi_perempuan',
            ),
            array(
                "nama_header" => 'Dokter Gigi Laki-laki',
                "nama_kolom" => 'dr_gigi_laki_laki',
            ),
            array(
                "nama_header" => 'Dokter Gigi Perempuan',
                "nama_kolom" => 'dr_gigi_perempuan',
            ),
            array(
                "nama_header" => 'Nakes Kesmas Laki-laki',
                "nama_kolom" => 'nakes_kesmas_laki_laki',
            ),
            array(
                "nama_header" => 'Nakes Kesmas Perempuan',
                "nama_kolom" => 'nakes_kesmas_perempuan',
            ),
            array(
                "nama_header" => 'Nakes Kesling Laki-laki',
                "nama_kolom" => 'nakes_kesling_laki_laki',
            ),
            array(
                "nama_header" => 'Nakes Kesling Perempuan',
                "nama_kolom" => 'nakes_kesling_perempuan',
            ),
            array(
                "nama_header" => 'Nakes Gizi Laki-laki',
                "nama_kolom" => 'nakes_gizi_laki_laki',
            ),
            array(
                "nama_header" => 'Nakes Gizi Perempuan',
                "nama_kolom" => 'nakes_gizi_perempuan',
            ),
            array(
                "nama_header" => 'Perawat Perempuan',
                "nama_kolom" => 'perawat_perempuan',
            ),
            array(
                "nama_header" => 'Perawat Laki-laki',
                "nama_kolom" => 'perawat_laki_laki',
            ),
            array(
                "nama_header" => 'Bidan',
                "nama_kolom" => 'bidan',
            ),
            array(
                "nama_header" => 'Ahli Lab Medik Laki-laki',
                "nama_kolom" => 'ahli_lab_medik_laki_laki',
            ),
            array(
                "nama_header" => 'Ahli Lab Medik Perempuan',
                "nama_kolom" => 'ahli_lab_medik_perempuan',
            ),
            array(
                "nama_header" => 'Tenaga Teknik Biomedika Laki-laki',
                "nama_kolom" => 'tenaka_teknik_biomedika_laki_laki',
            ),
            array(
                "nama_header" => 'Tenaga Teknik Biomedika Perempuan',
                "nama_kolom" => 'tenaka_teknik_biomedika_perempuan',
            ),
            array(
                "nama_header" => 'Keterapian Fisik Laki-laki',
                "nama_kolom" => 'keterapian_fisik_laki_laki',
            ),
            array(
                "nama_header" => 'Keterapian Fisik Perempuan',
                "nama_kolom" => 'keterapian_fisik_perempuan',
            ),
            array(
                "nama_header" => 'Keteknisian Medis Laki-laki',
                "nama_kolom" => 'keteknisian_medis_laki_laki',
            ),
            array(
                "nama_header" => 'Keteknisian Medis Perempuan',
                "nama_kolom" => 'keteknisian_medis_perempuan',
            ),
            array(
                "nama_header" => 'Tekaga Teknis Kefarmasian Laki-laki',
                "nama_kolom" => 'tekaga_teknis_kefarmasian_laki_laki',
            ),
            array(
                "nama_header" => 'Tekaga Teknis Kefarmasian Perempuan',
                "nama_kolom" => 'tekaga_teknis_kefarmasian_perempuan',
            ),
            array(
                "nama_header" => 'Apoteker Laki-laki',
                "nama_kolom" => 'apoteker_laki_laki',
            ),
            array(
                "nama_header" => 'Apoteker Perempuan',
                "nama_kolom" => 'apoteker_perempuan',
            ),
            array(
                "nama_header" => 'Pejabat Struktural Laki-laki',
                "nama_kolom" => 'pejabat_struktural_laki_laki',
            ),
            array(
                "nama_header" => 'Pejabat Struktural Perempuan',
                "nama_kolom" => 'pejabat_struktural_perempuan',
            ),
            array(
                "nama_header" => 'Tenaga Pendidik Laki-laki',
                "nama_kolom" => 'tenaga_pendidik_laki_laki',
            ),
            array(
                "nama_header" => 'Tenaga Pendidik Perempuan',
                "nama_kolom" => 'tenaga_pendidik_perempuan',
            ),
            array(
                "nama_header" => 'Tenaga Dukungan Manajemen Laki-laki',
                "nama_kolom" => 'tenaga_dukungan_manajemen_laki_laki',
            ),
            array(
                "nama_header" => 'Tenaga Dukungan Manajemen Perempuan',
                "nama_kolom" => 'tenaga_dukungan_manajemen_perempuan',
            ),
            array(
                "nama_header" => 'Jumlah Lahir Hidup',
                "nama_kolom" => 'jumlah_lahir_hidup',
            ),
            array(
                "nama_header" => 'Jumlah Kematian Ibu Hamil',
                "nama_kolom" => 'jumlah_kematian_ibu_hamil',
            ),
            array(
                "nama_header" => 'Jumlah Kematian Ibu Bersalin',
                "nama_kolom" => 'jumlah_kematian_ibu_bersalin',
            ),
            array(
                "nama_header" => 'Jumlah Kematian Ibu Nifas',
                "nama_kolom" => 'jumlah_kematian_ibu_nifas',
            ),
            array(
                "nama_header" => 'Jumlah Kematian Ibu',
                "nama_kolom" => 'jumlah_kematian_ibu',
            ),
            array(
                "nama_header" => 'Pendarahan',
                "nama_kolom" => 'pendarahan',
            ),
            array(
                "nama_header" => 'Gangguan Hipertensi',
                "nama_kolom" => 'gangguan_hipertensi',
            ),
            array(
                "nama_header" => 'Infeksi',
                "nama_kolom" => 'infeksi',
            ),
            array(
                "nama_header" => 'Kelainan Jantung dan Pembuluh Darah',
                "nama_kolom" => 'kelainan_jantung_dan_pembuluh_darah',
            ),
            array(
                "nama_header" => 'Gangguan Autoimun',
                "nama_kolom" => 'gangguan_autoimun',
            ),
            array(
                "nama_header" => 'Gangguan Cerebrovaskular',
                "nama_kolom" => 'gangguan_cerebrovaskular',
            ),
            array(
                "nama_header" => 'COVID',
                "nama_kolom" => 'covid',
            ),
            array(
                "nama_header" => 'Komplikasi Pasca Keguguran',
                "nama_kolom" => 'komplikasi_pasca_keguguran',
            ),
            array(
                "nama_header" => 'Lain-lain',
                "nama_kolom" => 'lain_lain',
            ),
            array(
                "nama_header" => 'Jumlah Kematian Ibu',
                "nama_kolom" => 'jumlah_kematian_ibu',
            ),
            array(
                "nama_header" => 'Jumlah Pus',
                "nama_kolom" => 'jumlah_pus',
            ),
            array(
                "nama_header" => 'Pus 4T',
                "nama_kolom" => 'pus_4t',
            ),
            array(
                "nama_header" => 'Pus 4T pada KB Aktif',
                "nama_kolom" => 'pus_4t_pada_kb_aktif',
            ),
            array(
                "nama_header" => 'Pus ALKI',
                "nama_kolom" => 'pus_alki',
            ),
            array(
                "nama_header" => 'Pus ALKI pada KB Aktif',
                "nama_kolom" => 'pus_alki_pada_kb_aktif',
            ),
            array(
                "nama_header" => 'Jumlah Ibu Bersalin',
                "nama_kolom" => 'jumlah_ibu_bersalin',
            ),
            array(
                "nama_header" => 'Kondom',
                "nama_kolom" => 'kondom',
            ),
            array(
                "nama_header" => 'Suntik',
                "nama_kolom" => 'suntik',
            ),
            array(
                "nama_header" => 'Pil',
                "nama_kolom" => 'pil',
            ),
            array(
                "nama_header" => 'AKDR',
                "nama_kolom" => 'akdr',
            ),
            array(
                "nama_header" => 'MOP',
                "nama_kolom" => 'mop',
            ),
            array(
                "nama_header" => 'MOW',
                "nama_kolom" => 'mow',
            ),
            array(
                "nama_header" => 'Implan',
                "nama_kolom" => 'implan',
            ),
            array(
                "nama_header" => 'MAL',
                "nama_kolom" => 'mal',
            ),
            array(
                "nama_header" => 'Jumlah',
                "nama_kolom" => 'jumlah',
            ),
            array(
                "nama_header" => 'Persentase',
                "nama_kolom" => 'persentase',
            ),
            array(
                "nama_header" => 'Jumlah Lahir Laki-laki',
                "nama_kolom" => 'jumlah_lahir_laki_laki',
            ),
            array(
                "nama_header" => 'Jumlah Lahir Perempuan',
                "nama_kolom" => 'jumlah_lahir_perempuan',
            ),
            array(
                "nama_header" => 'Jumlah Bayi',
                "nama_kolom" => 'jumlah_bayi',
            ),
            array(
                "nama_header" => 'Proporsi Kelompok Umur',
                "nama_kolom" => 'proporsi_kelompok_umur',
            ),
            array(
                "nama_header" => 'Jumlah Kasus Laki-laki',
                "nama_kolom" => 'jumlah_kasus_laki_laki',
            ),
            array(
                "nama_header" => 'Jumlah Kasus Perempuan',
                "nama_kolom" => 'jumlah_kasus_perempuan',
            ),
            array(
                "nama_header" => 'Meninggal Laki-laki',
                "nama_kolom" => 'meninggal_laki_laki',
            ),
            array(
                "nama_header" => 'Meninggal Perempuan',
                "nama_kolom" => 'meninggal_perempuan',
            ),
            array(
                "nama_header" => 'Jumlah Laki-laki',
                "nama_kolom" => 'jumlah_laki_laki',
            ),
            array(
                "nama_header" => 'Jumlah Perempuan',
                "nama_kolom" => 'jumlah_perempuan',
            ),
            array(
                "nama_header" => 'Mendapatkan Pelayanan Kesehatan',
                "nama_kolom" => 'mendapatkan_pelayanan_kesehatan',
            ),
            array(
                "nama_header" => 'Kecamatan Pesisir',
                "nama_kolom" => 'kecamatan_pesisir',
            ),
            array(
                "nama_header" => 'Desa Pantai',
                "nama_kolom" => 'desa_pantai',
            ),
            array(
                "nama_header" => 'Desa Bukan',
                "nama_kolom" => 'desa_bukan',
            ),
            array(
                "nama_header" => 'Produksi',
                "nama_kolom" => 'produksi',
            ),
            array(
                "nama_header" => 'Nilai Produksi',
                "nama_kolom" => 'nilai_produksi',
            ),
            array(
                "nama_header" => 'Perahu Tidak Motor',
                "nama_kolom" => 'perahu_tidak_motor',
            ),
            array(
                "nama_header" => 'Perahu Motor Tempel',
                "nama_kolom" => 'perahu_motor_tempel',
            ),
            array(
                "nama_header" => 'Kapal Motor',
                "nama_kolom" => 'kapal_motor',
            ),
            array(
                "nama_header" => 'Jenis Alat',
                "nama_kolom" => 'jenis_alat',
            ),
            array(
                "nama_header" => 'Jenis Perikanan Budidaya',
                "nama_kolom" => 'jenis_perikanan_budidaya',
            ),
            array(
                "nama_header" => 'Jenjang Pendidikan',
                "nama_kolom" => 'jenjang_pendidikan',
            ),
            array(
                "nama_header" => 'Jumlah Sekolah',
                "nama_kolom" => 'jumlah_sekolah',
            ),
            array(
                "nama_header" => 'Jumlah Murid',
                "nama_kolom" => 'jumlah_murid',
            ),
            array(
                "nama_header" => 'Jumlah Guru',
                "nama_kolom" => 'jumlah_guru',
            ),
            array(
                "nama_header" => 'Rasio',
                "nama_kolom" => 'rasio',
            ),
            array(
                "nama_header" => 'Klasifikasi',
                "nama_kolom" => 'klasifikasi',
            ),
            array(
                "nama_header" => 'Jumlah Judul',
                "nama_kolom" => 'jumlah_judul',
            ),
            array(
                "nama_header" => 'Jumlah Eksemplar',
                "nama_kolom" => 'jumlah_eksemplar',
            ),
            array(
                "nama_header" => 'Oktober 2021',
                "nama_kolom" => 'oktober_2021',
            ),
            array(
                "nama_header" => 'November 2021',
                "nama_kolom" => 'november_2021',
            ),
            array(
                "nama_header" => 'Desember 2021',
                "nama_kolom" => 'desember_2021',
            ),
            array(
                "nama_header" => 'Januari 2022',
                "nama_kolom" => 'januari_2022',
            ),
            array(
                "nama_header" => 'Februari 2022',
                "nama_kolom" => 'februari_2022',
            ),
            array(
                "nama_header" => 'Maret 2022',
                "nama_kolom" => 'maret_2022',
            ),
            array(
                "nama_header" => 'April 2022',
                "nama_kolom" => 'april_2022',
            ),
            array(
                "nama_header" => 'Mei 2022',
                "nama_kolom" => 'mei_2022',
            ),
            array(
                "nama_header" => 'Mei 2022',
                "nama_kolom" => 'mei_2022',
            ),
            array(
                "nama_header" => 'Juni 2022',
                "nama_kolom" => 'juni_2022',
            ),
            array(
                "nama_header" => 'Juli 2022',
                "nama_kolom" => 'juli_2022',
            ),
            array(
                "nama_header" => 'Agustus 2022',
                "nama_kolom" => 'agustus_2022',
            ),
            array(
                "nama_header" => 'September 2022',
                "nama_kolom" => 'september_2022',
            ),
            array(
                "nama_header" => 'Oktober 2022',
                "nama_kolom" => 'oktober_2022',
            ),
            array(
                "nama_header" => 'November 2022',
                "nama_kolom" => 'november_2022',
            ),
            array(
                "nama_header" => 'Desember 2022',
                "nama_kolom" => 'desember_2022',
            ),
            array(
                "nama_header" => 'Blankspot',
                "nama_kolom" => 'blankspot',
            ),
            array(
                "nama_header" => 'Sinyal Lemah',
                "nama_kolom" => 'sinyal_lemah',
            ),
            array(
                "nama_header" => 'Sinyal Kuat',
                "nama_kolom" => 'sinyal_kuat',
            ),
            array(
                "nama_header" => 'Nama Desa',
                "nama_kolom" => 'nama_desa',
            ),
            array(
                "nama_header" => 'Latitude',
                "nama_kolom" => 'latitude',
            ),
            array(
                "nama_header" => 'Longitude',
                "nama_kolom" => 'longitude',
            ),
            array(
                "nama_header" => 'Keterangan',
                "nama_kolom" => 'keterangan',
            ),
            array(
                "nama_header" => 'Nama LSM Ormas',
                "nama_kolom" => 'nama_lsm_ormas',
            ),
            array(
                "nama_header" => 'Jumlah Aktif',
                "nama_kolom" => 'jumlah_aktif',
            ),
            array(
                "nama_header" => 'Jumlah Anak',
                "nama_kolom" => 'jumlah_anak',
            ),
            array(
                "nama_header" => 'Jumlah Perempuan',
                "nama_kolom" => 'jumlah_perempuan',
            ),
            array(
                "nama_header" => 'Jenis PMKS',
                "nama_kolom" => 'jenis_pmks',
            ),
            array(
                "nama_header" => 'Lapangan Usaha',
                "nama_kolom" => 'lapangan_usaha',
            ),
        );
        foreach ($data as $item) {
            PengaturanKolom::create([
                'nama_header' => $item['nama_header'],
                'nama_kolom' => $item['nama_kolom'],
            ]);
        }
    }
}
