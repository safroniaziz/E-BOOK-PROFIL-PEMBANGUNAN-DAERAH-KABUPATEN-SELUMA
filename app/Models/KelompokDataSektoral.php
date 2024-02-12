<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelompokDataSektoral extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the details for the KelompokDataSektoral
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kelompokDetails(): HasMany
    {
        return $this->hasMany(KelompokDetail::class, 'kelompok_data_sektoral_id', 'id');
    }

    public function pengaturanKoloms()
    {
        return $this->belongsToMany(PengaturanKolom::class, 'kelompok_data_sektoral_kolom');
    }
}
