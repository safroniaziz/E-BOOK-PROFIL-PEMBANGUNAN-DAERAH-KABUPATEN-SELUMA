<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelompokDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the kelompokDataSektoral that owns the KelompokDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelompokDataSektoral(): BelongsTo
    {
        return $this->belongsTo(KelompokDataSektoral::class, 'kelompok_data_sektoral_id', 'id');
    }
}
