<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LuasWilayahDenganKetinggianTempat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserTableSeeder ::class);
        $this->call(PengaturanKolomTableSeeder ::class);
        $this->call(KelompokDataSektoralSeeder::class);
        $this->call(KelompokDetailTableSeeder::class);
        $this->call(LuasWilayahPerKecamatanSeeder::class);
        $this->call(JumlahDesaSeeder::class);
        $this->call(JumlahPendudukPerJenisKelamin::class);
        $this->call(JumlahPendudukPerKecamatan::class);
        $this->call(JumlahPendudukPerRataAnggotaKeluarga::class);
        $this->call(JumlahPendudukPerStatusHubungan::class);
        $this->call(JumlahPendudukPerKK::class);
        $this->call(JumlahPendudukPerKelompokUsia::class);
        $this->call(JumlahPendudukPerKelompokUsiaDanJK::class);
        $this->call(JumlahPendudukPerPendidikanTamatDanJK::class);
        $this->call(JumlahPendudukPerKelompokUmurPraSekolah::class);
        $this->call(JumlahPendudukPerKelompokUmurSD::class);
        $this->call(JumlahPendudukPerKelompokUmurSLTP::class);
        $this->call(JumlahPendudukPerKelompokUmurSLTA::class);
        $this->call(JumlahPendudukPerKelompokUmurPT::class);
        $this->call(JumlahPendudukPerPekerjaanDanJK::class);
        $this->call(SepuluhBesarPekerjaanPendudukSeeder::class);
        $this->call(JumlahPendudukPerGolonganDarah::class);
        $this->call(JumlahPendudukPerPenyandangDisabilitas::class);
        $this->call(JumlahPendudukPerAgama::class);
        $this->call(JumlahPendudukPerAkta::class);
        $this->call(JumlahPendudukPerAkta5Tahun::class);
        $this->call(JumlahPendudukPerAkta18Tahun::class);
        $this->call(JumlahPendudukPerAktaPerkawinan::class);
        $this->call(JumlahPendudukPerAktaKematian::class);
        $this->call(JumlahPNSPerKelompokJabatan::class);
        $this->call(JumlahPNSPerJabFung::class);
        $this->call(JumlahPNSPerTingkatPendidikan::class);
        $this->call(JumlahPNSPerTingkatPendidikan2022::class);
        $this->call(JumlahPNSPerGolonganKepangkatan::class);
        $this->call(JumlahPNSPerFungsionalGuru::class);
        $this->call(JumlahPNSPerFungsionalLainnya::class);
        $this->call(JumlahPNSPerStruktural::class);
        $this->call(JumlahPNSPerKelompokUmur::class);
        $this->call(JumlahPNSPerKelompokUmur2022::class);
        $this->call(JumlahDPRDPerPartaiDanJK::class);
        $this->call(JumlahDPRDPerPartaiDanPendidikan::class);
        $this->call(IndikatorKinerjaPelayananRS::class);
        $this->call(JumlahPosbintuPTMPerKecamatan::class);
    }
}
