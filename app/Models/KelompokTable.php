<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelompokTable extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the tableDetails for the KelompokTable
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tableDetails(): HasMany
    {
        return $this->hasMany(TableDetail::class, 'kelompok_table_id', 'id');
    }
}
