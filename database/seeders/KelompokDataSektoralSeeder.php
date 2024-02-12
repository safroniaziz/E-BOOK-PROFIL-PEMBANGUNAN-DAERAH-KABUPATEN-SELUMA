<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KelompokDataSektoral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelompokDataSektoralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelompok_data_sektorals = array(
            array(
                "id" => 1,
                "kelompok_data" => "Luas Wilayah Dengan Ketinggian Tempat",
                "sumber_data" => "Badan Pusat Statistik (BPS) Kabupaten Seluma",
                "deskripsi_singkat" => "Luas wilayah Kabupaten Seluma menurut Undang-undang No. 3 tahun 2003 tentang pembentukan Kabupaten Muko-Muko, Kabupaten Seluma, dan Kabupaten Kaur, serta sesuai dengan letak lintang dan bujurnya adalah seluas +2.400,44 km2 atau 12,05 persen dari luas wilayah Propinsi Bengkulu yang seluas 19.919,33 km2.",
                "dokumen_pdf" => "dokumen_pdfs\/McuC67FDfm3zzOHkZyv3jq1uTQvNmNkpb2KQcg9L.pdf",
                "dokumen_word" => "dokumen_words\/BE3ng936AYMod1V0tyfn8qusydffoW3tbQi2QH2o.docx",
                "created_at" => "2024-01-31T21:05:22.000Z",
                "updated_at" => "2024-01-31T21:05:22.000Z"
            ),
            array(
                "id" => 2,
                "kelompok_data" => "Luas Wilayah Per Kecamatan di Kabupaten Seluma",
                "sumber_data" => "Undang-undang No. 3 tahun 2003",
                "deskripsi_singkat" => "Wilayah Kabupaten Seluma terbagi atas 14 Kecamatan terdiri dari 182 desa dan 20 Kelurahan.",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:13:21.000Z",
                "updated_at" => "2024-02-01T05:13:21.000Z"
            ),
            array(
                "id" => 3,
                "kelompok_data" => "Jumlah Desa, Kelurahan dan Nama Ibu kota Kecamatan di Kabupaten Seluma",
                "sumber_data" => "Dinas Kependudukan dan Catatan Sipil Kabupaten Seluma",
                "deskripsi_singkat" => "Berdasarkan data dari Dinas Kependudukan dan Catatan Sipil Kabupaten Seluma Jumlah penduduk Kabupaten Seluma dari tahun ke tahun mengalami peningkatan, hal ini dapat terlihat dari data sebelas tahun terakhir jumlah penduduk di Kabupaten Seluma.",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:14:13.000Z",
                "updated_at" => "2024-02-01T05:14:13.000Z"
            ),
            array(
                "id" => 4,
                "kelompok_data" => "Jumlah Penduduk Laki-laki dan Perempuan  di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "Kabupaten Seluma dengan luas 2.479,36 km2 didiami oleh penduduk sebanyak 214.245 jiwa, terdiri dari 103.938 jiwa atau 48,51% yaitu penduduk perempuan dan sebanyak 110.307 jiwa atau 51,49% yaitu penduduk laki-laki.",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:15:12.000Z",
                "updated_at" => "2024-02-01T05:15:12.000Z"
            ),
            array(
                "id" => 5,
                "kelompok_data" => "Jumlah Penduduk Menurut Jenis Kelamin Per Kecamatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:16:55.000Z",
                "updated_at" => "2024-02-01T05:16:55.000Z"
            ),
            array(
                "id" => 7,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut  Rata-rata Anggota Keluarga Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:17:55.000Z",
                "updated_at" => "2024-02-01T05:17:55.000Z"
            ),
            array(
                "id" => 9,
                "kelompok_data" => "Jumlah Penduduk menurut Kepala Keluarga  di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:38:51.000Z",
                "updated_at" => "2024-02-01T05:38:51.000Z"
            ),
            array(
                "id" => 11,
                "kelompok_data" => "Jumlah Penduduk Kabupaten Seluma Menurut Status Hubungan Dalam Keluarga (SHDK) dan Jenis Kelamin di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:39:45.000Z",
                "updated_at" => "2024-02-01T05:39:45.000Z"
            ),
            array(
                "id" => 13,
                "kelompok_data" => "Jumlah Penduduk Berdasarkan Kelompok Usia di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "Komposisi penduduk berdasarkan umur digunakan untuk mengelompokkan penduduk suatu daerah berdasarkan rentang usia tertentu. Pengelompokan ini biasanya ditunjukkan untuk menentukan jumlah penduduk dalam usia produktif (usia 15-64 tahun) dan usia non produktif.",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:41:02.000Z",
                "updated_at" => "2024-02-01T05:41:02.000Z"
            ),
            array(
                "id" => 14,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Kelompok Umur dan Jenis Kelamin Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:41:41.000Z",
                "updated_at" => "2024-02-01T05:41:41.000Z"
            ),
            array(
                "id" => 15,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Pendidikan  Yang Di Tamatkan dan Jenis Kelamin Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:42:21.000Z",
                "updated_at" => "2024-02-01T05:42:21.000Z"
            ),
            array(
                "id" => 16,
                "kelompok_data" => "Penduduk Kabupaten Seluma  Menurut Kelompok Umur Pra-Sekolah (0-6 Tahun)  Dan Jenis Kelamin Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:42:38.000Z",
                "updated_at" => "2024-02-01T05:42:38.000Z"
            ),
            array(
                "id" => 17,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut  Kelompok Umur Sekolah Dasar (7-12 Tahun)  Dan Jenis Kelamin Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:42:53.000Z",
                "updated_at" => "2024-02-01T05:42:53.000Z"
            ),
            array(
                "id" => 18,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut  Kelompok Umur SLTP (13-15 Tahun)  Dan Jenis Kelamin Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:43:08.000Z",
                "updated_at" => "2024-02-01T05:43:08.000Z"
            ),
            array(
                "id" => 19,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Kelompok Umur SLTA (16-18 Tahun) Dan Jenis Kelamin Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:43:27.000Z",
                "updated_at" => "2024-02-01T05:43:27.000Z"
            ),
            array(
                "id" => 20,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut  Kelompok Umur Perguruan Tinggi (19-22 Tahun)  \tDan Jenis Kelamin Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:44:00.000Z",
                "updated_at" => "2024-02-01T05:44:00.000Z"
            ),
            array(
                "id" => 21,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut  Jenis Pekerjaan dan Jenis Kelamin Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T05:44:25.000Z",
                "updated_at" => "2024-02-01T05:44:25.000Z"
            ),
            array(
                "id" => 22,
                "kelompok_data" => "Sepuluh Besar Jenis Pekerjaan  Penduduk Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:45:49.000Z",
                "updated_at" => "2024-02-01T06:45:49.000Z"
            ),
            array(
                "id" => 23,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Golongan Darah Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:46:04.000Z",
                "updated_at" => "2024-02-01T06:46:04.000Z"
            ),
            array(
                "id" => 24,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Penyandang Disabilitas dan Jenis Kelamin Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:46:17.000Z",
                "updated_at" => "2024-02-01T06:46:17.000Z"
            ),
            array(
                "id" => 26,
                "kelompok_data" => "Data Jumlah Penduduk Per Kecamatan menurut Agama  dan Aliran Kepercayaan di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "Agama yang dianut oleh penduduk di Kabupaten Seluma didominasi oleh penduduk beragama islam yaitu sebanyak 210,125 jiwa atau sebesar 98,34%, penduduk beragama kristen sebanyak 2,519 jiwa atau sebesar 1,18%, penduduk beragama khatolik sebanyak 282 jiwa atau sebanyak 0,13%, penduduk beragama Hindu 1,319 jiwa atau sebesar 0,62%.",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:47:06.000Z",
                "updated_at" => "2024-02-01T06:47:06.000Z"
            ),
            array(
                "id" => 27,
                "kelompok_data" => "Data Jumlah dan Persentase Penduduk Yang memiliki Akta Dan tidak memiliki Akta di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:47:29.000Z",
                "updated_at" => "2024-02-01T06:47:29.000Z"
            ),
            array(
                "id" => 28,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Kepemilikan Akta Kelahiran Anak (Usia 0-5 Tahun) Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:47:50.000Z",
                "updated_at" => "2024-02-01T06:47:50.000Z"
            ),
            array(
                "id" => 29,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Kepemilikan Akta Kelahiran Anak (Usia 0-18 Tahun) Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:48:11.000Z",
                "updated_at" => "2024-02-01T06:48:11.000Z"
            ),
            array(
                "id" => 30,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Kepemilikan Akta Perkawinan Perkecamatan Tahun 2022",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:48:28.000Z",
                "updated_at" => "2024-02-01T06:48:28.000Z"
            ),
            array(
                "id" => 31,
                "kelompok_data" => "Penduduk Kabupaten Seluma Menurut Kepemilikan  Akta Kematian Perkecamatan",
                "sumber_data" => "Dinas Kependudukan dan Pencatatan Sipil Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:48:40.000Z",
                "updated_at" => "2024-02-01T06:48:40.000Z"
            ),
            array(
                "id" => 32,
                "kelompok_data" => "Jumlah Pegawai Negeri Sipil Menurut Kelompok Jabatan Di Kabupaten Seluma Tahun 2019-2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "Data Pegawai Negeri Sipil (PNS) menurut kelompok jabatan di Kabupaten Seluma Tahun 2022 yaitu kelompok jabatan struktural berjumlah 485 orang atau sebesar 14,43%, kelompok jabatan fungsional umum berjumlah 770 orang atau sebesar 22,91%, dan kelompok pejabat fungsional tertentu sejumlah 2.106 orang atau 62,66%.",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:49:21.000Z",
                "updated_at" => "2024-02-01T06:49:21.000Z"
            ),
            array(
                "id" => 33,
                "kelompok_data" => "Jumlah Pegawai Negeri Sipil (PNS) Menurut Kelompok Jabatan Fungsional Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:49:48.000Z",
                "updated_at" => "2024-02-01T06:49:48.000Z"
            ),
            array(
                "id" => 34,
                "kelompok_data" => "Jumlah Pegawai Negeri Sipil (PNS) Menurut Tingkat Pendidikan  Di Kabupaten Seluma Tahun 2019-2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:50:30.000Z",
                "updated_at" => "2024-02-01T06:50:30.000Z"
            ),
            array(
                "id" => 35,
                "kelompok_data" => "Jumlah dan Persentase Pegawai Negeri Sipil (PNS)  Menurut Tingkat Pendidikan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:50:56.000Z",
                "updated_at" => "2024-02-01T06:50:56.000Z"
            ),
            array(
                "id" => 37,
                "kelompok_data" => "Data Pegawai Negeri Sipil Menurut Golongan Kepangkatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:51:30.000Z",
                "updated_at" => "2024-02-01T06:51:30.000Z"
            ),
            array(
                "id" => 38,
                "kelompok_data" => "Jumlah Pegawai Negeri Sipil (PNS) Fungsional Guru Menurut Tingkat Pendidikan Di Kabupaten Seluma Tahun 2021-2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:51:44.000Z",
                "updated_at" => "2024-02-01T06:51:44.000Z"
            ),
            array(
                "id" => 39,
                "kelompok_data" => "Jumlah Pegawai Negeri Sipil (PNS) Fungsional Lainnya  (Penyuluh Pertanian) Menurut Golongan Kepangkatan Di Kabupaten Seluma Tahun 2021-2022",
                "sumber_data" => ": Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:52:06.000Z",
                "updated_at" => "2024-02-01T06:52:06.000Z"
            ),
            array(
                "id" => 40,
                "kelompok_data" => "Jumlah Pegawai Negeri Sipil (PNS) Struktural dan Fungsional Umum Menurut Golongan Kepangkatan Di Kabupaten Seluma Tahun 2021-2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:52:26.000Z",
                "updated_at" => "2024-02-01T06:52:26.000Z"
            ),
            array(
                "id" => 41,
                "kelompok_data" => "Data Pegawai Negeri Sipil (PNS) Menurut Kelompok Umur  di Kabupaten Seluma Tahun 2019-2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:52:43.000Z",
                "updated_at" => "2024-02-01T06:52:43.000Z"
            ),
            array(
                "id" => 42,
                "kelompok_data" => "Data Pegawai Negeri Sipil (PNS) Menurut Kelompok Umur  di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:53:01.000Z",
                "updated_at" => "2024-02-01T06:53:01.000Z"
            ),
            array(
                "id" => 43,
                "kelompok_data" => "Jumlah Anggota Dewan Perwakilan Rakyat Daerah (DPRD)  Menurut Partai Politik Dan Jenis Kelamin Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Sekretariat Dewan Perwakilan Rakyat Daerah Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:53:19.000Z",
                "updated_at" => "2024-02-01T06:53:19.000Z"
            ),
            array(
                "id" => 44,
                "kelompok_data" => "Jumlah Dewan Perwakilan Rakyat Daerah (DPRD)  Menurut Partai Politik Dan Pendidikan Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Sekretariat Dewan Perwakilan Rakyat Daerah Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:53:36.000Z",
                "updated_at" => "2024-02-01T06:53:36.000Z"
            ),
            array(
                "id" => 45,
                "kelompok_data" => "Indikator Kinerja Pelayanan Di Rumah Sakit Umum Daerah Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten  Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:54:14.000Z",
                "updated_at" => "2024-02-01T06:54:14.000Z"
            ),
            array(
                "id" => 47,
                "kelompok_data" => "Jumlah Posbindu PTM* Menurut Kecamatan  Dan Puskesmas Di Kabupaten Seluma Tahun 2020-2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten  Seluma Tahun 2022 Keterangan :PTM*= Penyakit Tidak Menular",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:54:59.000Z",
                "updated_at" => "2024-02-01T06:54:59.000Z"
            ),
            array(
                "id" => 48,
                "kelompok_data" => "Jumlah Tenaga Medis Pada Fasilitas Kesehatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "Tenaga kesehatan termasuk yang memiliki ijazah pasca sarjana dan doktor \r\na) Pada penghitungan jumlah, nakes yang bertugas di lebih dari satu tempat hanya dihitung satu kali",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:55:17.000Z",
                "updated_at" => "2024-02-01T06:55:17.000Z"
            ),
            array(
                "id" => 49,
                "kelompok_data" => "Jumlah Tenaga Kesehatan Masyarakat, Kesehatan Lingkungan, Dan Gizi Di Fasilitas Kesehatan Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:55:45.000Z",
                "updated_at" => "2024-02-01T06:55:45.000Z"
            ),
            array(
                "id" => 50,
                "kelompok_data" => "Jumlah Tenaga Keperawatan Dan Kebidanan  Di Fasilitas Kesehatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:56:05.000Z",
                "updated_at" => "2024-02-01T06:56:05.000Z"
            ),
            array(
                "id" => 51,
                "kelompok_data" => "Jumlah Ahli Laboratorium Medik, Tenaga Teknik Biomedika, Keterapian Fisik,  Dan Keteknisan Medik Di Fasilitas Kesehatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "- Tenaga kesehatan termasuk yang memiliki ijazah pasca sarjana dan doktor\r\na. Pada penghitungan jumlah di tingkat kabupaten\/kota, nakes yang bertugas di lebih dari satu tempat hanya dihitung satu kali",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:56:30.000Z",
                "updated_at" => "2024-02-01T06:56:30.000Z"
            ),
            array(
                "id" => 52,
                "kelompok_data" => "Jumlah Tenaga Kefarmasian Di Fasilitas Kesehatan Di Fasilitas Kesehatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:56:47.000Z",
                "updated_at" => "2024-02-01T06:56:47.000Z"
            ),
            array(
                "id" => 53,
                "kelompok_data" => "Jumlah Tenaga Penunjang\/Pendukung Kesehatan Di Fasilitas Kesehatan Di Fasilitas Kesehatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:56:59.000Z",
                "updated_at" => "2024-02-01T06:56:59.000Z"
            ),
            array(
                "id" => 54,
                "kelompok_data" => "Jumlah Kematian Ibu Menurut Kecamatan Dan Puskesmas  Di Kabupaten SelumaTahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:57:14.000Z",
                "updated_at" => "2024-02-01T06:57:14.000Z"
            ),
            array(
                "id" => 55,
                "kelompok_data" => "Jumlah Kematian Ibu Menurut Penyebab, Kecamatan, Dan Puskesmas  Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:57:33.000Z",
                "updated_at" => "2024-02-01T06:57:33.000Z"
            ),
            array(
                "id" => 56,
                "kelompok_data" => "Jumlah Ibu Hamil Menurut Puskesmas  Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "-",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:58:15.000Z",
                "updated_at" => "2024-02-01T06:58:15.000Z"
            ),
            array(
                "id" => 57,
                "kelompok_data" => "Jumlah Ibu Bersalin\/Nifas Menurut Puskesmas  Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "-",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:58:41.000Z",
                "updated_at" => "2024-02-01T06:58:41.000Z"
            ),
            array(
                "id" => 58,
                "kelompok_data" => "Pasangan Usia Subur (PUS) Dengan Status 4 Terlalu (4T)  Dan Alki Yang Menjadi Peserta KB Aktif Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:59:21.000Z",
                "updated_at" => "2024-02-01T06:59:21.000Z"
            ),
            array(
                "id" => 59,
                "kelompok_data" => "Cakupan Dan Proporsi Peserta KB Pasca Persalinan Menurut Jenis Kontrasepsi, Kecamatan, Dan Puskesmas Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T06:59:50.000Z",
                "updated_at" => "2024-02-01T06:59:50.000Z"
            ),
            array(
                "id" => 60,
                "kelompok_data" => "Jumlah Bayi Lahir Hidup Menurut Jenis Kelamin Kecamatan  dan Puskesnas Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:00:05.000Z",
                "updated_at" => "2024-02-01T07:00:05.000Z"
            ),
            array(
                "id" => 61,
                "kelompok_data" => "Jumlah Pelayanan Kesehatan Bayi Menurut Kecamatan Dan Puskesmas Di Kabupaten Seluma 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:00:55.000Z",
                "updated_at" => "2024-02-01T07:00:55.000Z"
            ),
            array(
                "id" => 62,
                "kelompok_data" => "Jumlah Kasus Tuberkulosis Menurut Kecamatan, Dan Puskesmas Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "Di Kabupaten Seluma pada tahun 2019 jumlah kasus baru pengidap HIV yang dilaporkan sebanyak 7 orang, pada tahun 2020 menurun menjadi 4 kasus, dan pada tahun 2021 sebanyak 2 kasus, sedangkan tahun 2022 sebanyak 14 kasus HIV. Terdiri dari 10 orang laki-laki dan 4 orang perempuan",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:01:35.000Z",
                "updated_at" => "2024-02-01T07:01:35.000Z"
            ),
            array(
                "id" => 63,
                "kelompok_data" => "Jumlah Kasus HIV Menurut Jenis Kelamin  Dan Kelompok Umur Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "Jumlah kasus adalah seluruh kasus baru yang ada di wilayah kerja puskesmas \r\n termasuk kasus yang ditemukan di RS",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:02:14.000Z",
                "updated_at" => "2024-02-01T07:02:14.000Z"
            ),
            array(
                "id" => 64,
                "kelompok_data" => "Jumlah Kasus Demam Berdarah Dengue (DBD) Menurut Jenis Kelamin, Kecamatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "Selain kasus Demam Berdarah Dengue (DBD) penyakit menular lainnya adalah Diabetes Melitus (DM), Tahun 2019 tercatat 1.200 kasus, Tahun 2020 tercatat sebanyak 1.596 kasus, Tahun 2021 tercatat 1.742 kasus dan pada Tahun 2022 tercatat 1.787 kasus Diabetes Melitus (DM).",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:02:49.000Z",
                "updated_at" => "2024-02-01T07:02:49.000Z"
            ),
            array(
                "id" => 65,
                "kelompok_data" => "umlah Penderita Diabetes Melitus (DM)  Per Kecamatan dan Puskesmas Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:03:19.000Z",
                "updated_at" => "2024-02-01T07:03:19.000Z"
            ),
            array(
                "id" => 66,
                "kelompok_data" => "Pelayanan Kesehatan Penderita Hipertensi Menurut Kecamatan, Dan Puskesmas Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:03:43.000Z",
                "updated_at" => "2024-02-01T07:03:43.000Z"
            ),
            array(
                "id" => 67,
                "kelompok_data" => "Jumlah Pelayanan Kesehatan Orang Dengan Gangguan Jiwa (ODGJ) Berat Menurut Kecamatan dan Puskesmas Tahun 2022",
                "sumber_data" => "Dinas Kesehatan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:04:03.000Z",
                "updated_at" => "2024-02-01T07:04:03.000Z"
            ),
            array(
                "id" => 68,
                "kelompok_data" => "Daerah Pesisir Menurut Kecamatan dan  Desa\/Kelurahan di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Perikanan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "Kabupaten Seluma memiliki wilayah daratan dan lautan dengan panjang pantai ±76,8 km, lebar 4 mil dan luas wilayah laut seluas 48.640 km2. Dari 14 kecamatan yang berada di Kabupaten Seluma ada 7 Kecamatan pesisir",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:04:52.000Z",
                "updated_at" => "2024-02-01T07:04:52.000Z"
            ),
            array(
                "id" => 69,
                "kelompok_data" => "Bahari di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Perikanan Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:05:14.000Z",
                "updated_at" => "2024-02-01T07:05:14.000Z"
            ),
            array(
                "id" => 70,
                "kelompok_data" => "Jenis Perikanan Tahun 2022",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:05:33.000Z",
                "updated_at" => "2024-02-01T07:05:33.000Z"
            ),
            array(
                "id" => 71,
                "kelompok_data" => "Jumlah Perahu\/ Kapal Penangkap Ikan Menurut Jenis dan  Kecamatan di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "=",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:05:58.000Z",
                "updated_at" => "2024-02-01T07:05:58.000Z"
            ),
            array(
                "id" => 72,
                "kelompok_data" => "Produksi (ton) Perikanan Budidaya di Kabupaten Seluma Menurut Jenis Perikanan Budidaya, 2022",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:06:22.000Z",
                "updated_at" => "2024-02-01T07:06:22.000Z"
            ),
            array(
                "id" => 73,
                "kelompok_data" => "Jumlah Alat Penangkap Ikan Perairan Laut di Kabupaten Seluma, 2022",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:06:37.000Z",
                "updated_at" => "2024-02-01T07:06:37.000Z"
            ),
            array(
                "id" => 74,
                "kelompok_data" => "Jumlah Sekolah menurut jenjang pendidikan  di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "-",
                "deskripsi_singkat" => "Untuk mewujudkan komitmen tersebut Pemerintah Kabupaten Seluma telah melakukan upaya pembangunan dibidang pendidikan dari jenjang PAUD\/RA, SD\/MI, SMP\/MTS dan SMA\/SMK\/MA.",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:07:08.000Z",
                "updated_at" => "2024-02-01T07:07:08.000Z"
            ),
            array(
                "id" => 75,
                "kelompok_data" => "Jumlah Sekolah, Murid Dan Guru Pendidikan Anak Usia Dini (PAUD) Di Kabupaten Seluma Tahun 2022\/2023",
                "sumber_data" => "Dinas Pendidikan dan Kebudayaan Kabupaten Seluma Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:07:27.000Z",
                "updated_at" => "2024-02-01T07:07:27.000Z"
            ),
            array(
                "id" => 76,
                "kelompok_data" => "Jumlah Sekolah, Murid, dan Guru Sekolah Madrasah Tsanawiyah (MTS) Di Kabupaten Seluma Tahun 2022\/2023",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:08:30.000Z",
                "updated_at" => "2024-02-01T07:08:30.000Z"
            ),
            array(
                "id" => 77,
                "kelompok_data" => "Jumlah Sekolah, Murid, dan Guru Sekolah Menengah Atas (SMA) Di Kabupaten Seluma Tahun Ajaran 2022\/2023",
                "sumber_data" => "Sumber : Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:08:47.000Z",
                "updated_at" => "2024-02-01T07:08:47.000Z"
            ),
            array(
                "id" => 78,
                "kelompok_data" => "Jumlah Sekolah, Murid, dan Guru  Sekolah Menengah Kejuruan (SMK) Di Kabupaten Seluma Tahun Ajaran 2022\/2023",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:09:00.000Z",
                "updated_at" => "2024-02-01T07:09:00.000Z"
            ),
            array(
                "id" => 79,
                "kelompok_data" => "Jumlah Sekolah, Murid, dan Guru Sekolah Madrasah Aliyah (MA) Di Kabupaten Seluma Tahun Ajaran 2022\/2023",
                "sumber_data" => "-Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:09:21.000Z",
                "updated_at" => "2024-02-01T07:09:21.000Z"
            ),
            array(
                "id" => 80,
                "kelompok_data" => "Jumlah Koleksi Buku Perpustakaan Berdasarkan Judul Dan Eksemplar 2022",
                "sumber_data" => "Dinas Perpustakaan dan Kearsipan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:09:42.000Z",
                "updated_at" => "2024-02-01T07:09:42.000Z"
            ),
            array(
                "id" => 81,
                "kelompok_data" => "Data Jumlah Perpustakaan Dikabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Perpustakaan dan Kearsipan Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:09:59.000Z",
                "updated_at" => "2024-02-01T07:09:59.000Z"
            ),
            array(
                "id" => 82,
                "kelompok_data" => "Data Jumlah Pencari Kerja terdaftar Menurut Pendidikan Dan Jenis Kelamin Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Ketenagakerjaan dan Transmigrasi Kab. Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:10:12.000Z",
                "updated_at" => "2024-02-01T07:10:12.000Z"
            ),
            array(
                "id" => 83,
                "kelompok_data" => "Data Luas Panen Tanaman Padi Sawah Per Bulan Tahun 2022",
                "sumber_data" => "Dinas Pertanian Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:11:02.000Z",
                "updated_at" => "2024-02-01T07:11:02.000Z"
            ),
            array(
                "id" => 84,
                "kelompok_data" => "Jumlah Desa\/Kelurahan Blankspot, Sinyal Lemah dan Sinyal Kuat Menurut Kecamatan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Komunikasi, Informatika, Persandian dan Statistik Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:11:44.000Z",
                "updated_at" => "2024-02-01T07:11:44.000Z"
            ),
            array(
                "id" => 85,
                "kelompok_data" => "Titik Lokasi Blankspot dan Sinyal Lemah Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Komunikasi, Informatika, Persandian dan Statistik Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:11:55.000Z",
                "updated_at" => "2024-02-01T07:11:55.000Z"
            ),
            array(
                "id" => 86,
                "kelompok_data" => "Data Ormas\/LSM Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Badan Kesatuan Bangsa dan Politik Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:12:21.000Z",
                "updated_at" => "2024-02-01T07:12:21.000Z"
            ),
            array(
                "id" => 87,
                "kelompok_data" => "Data Kegiatan LSM\/Ormas Tahun 2022",
                "sumber_data" => "Badan Kesatuan Bangsa dan Politik Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:12:33.000Z",
                "updated_at" => "2024-02-01T07:12:33.000Z"
            ),
            array(
                "id" => 88,
                "kelompok_data" => "Data Jumlah Kasus Kekerasan Terhadap Anak dan Perempuan Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:13:03.000Z",
                "updated_at" => "2024-02-01T07:13:03.000Z"
            ),
            array(
                "id" => 89,
                "kelompok_data" => "Rekapitulasi Data Penyandang Masalah Kesejahteraan Sosial (PMKS) Di Kabupaten Seluma Tahun 2022",
                "sumber_data" => "Dinas Sosial Kabupaten Seluma Tahun 2022",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:13:15.000Z",
                "updated_at" => "2024-02-01T07:13:15.000Z"
            ),
            array(
                "id" => 90,
                "kelompok_data" => "Laju Pertumbuhan Produk Domestik Regional Bruto Atas Dasar Harga Konstan 2010 Menurut Lapangan Usaha di Kabupaten Seluma (persen), 2017–2022",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:14:02.000Z",
                "updated_at" => "2024-02-01T07:14:02.000Z"
            ),
            array(
                "id" => 91,
                "kelompok_data" => "Produk Domestik Regional Bruto Atas Dasar Harga Berlaku  Menurut Lapangan Usaha di Kabupaten Seluma (miliar rupiah), 2017–2022",
                "sumber_data" => "Kabupaten Seluma Dalam Angka Tahun 2023",
                "deskripsi_singkat" => "-",
                "dokumen_pdf" => null,
                "dokumen_word" => null,
                "created_at" => "2024-02-01T07:14:39.000Z",
                "updated_at" => "2024-02-01T07:14:39.000Z"
            )
        );

        foreach ($kelompok_data_sektorals as $data_sektoral) {
            $kelompokDataSektoral = new KelompokDataSektoral();
            $kelompokDataSektoral->id = $data_sektoral['id'];
            $kelompokDataSektoral->kelompok_data = $data_sektoral['kelompok_data'];
            $kelompokDataSektoral->sumber_data = $data_sektoral['sumber_data'];
            $kelompokDataSektoral->deskripsi_singkat = $data_sektoral['deskripsi_singkat'];
            $kelompokDataSektoral->dokumen_pdf = $data_sektoral['dokumen_pdf'];
            $kelompokDataSektoral->dokumen_word = $data_sektoral['dokumen_word'];
            $kelompokDataSektoral->created_at = $data_sektoral['created_at'];
            $kelompokDataSektoral->updated_at = $data_sektoral['updated_at'];
            $kelompokDataSektoral->save();
        }

    }
}
