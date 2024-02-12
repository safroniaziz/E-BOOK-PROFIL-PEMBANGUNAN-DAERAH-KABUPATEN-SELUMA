<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanKolom extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kelompokDataSektorals()
    {
        return $this->belongsToMany(KelompokDataSektoral::class, 'kelompok_data_sektoral_kolom');
    }
}
