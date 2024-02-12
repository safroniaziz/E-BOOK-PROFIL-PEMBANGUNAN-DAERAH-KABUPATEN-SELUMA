<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TableDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the kelompokTable that owns the TableDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelompokTable(): BelongsTo
    {
        return $this->belongsTo(User::class, 'kelompok_table_id', 'id');
    }
}
