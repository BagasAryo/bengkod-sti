<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail_periksa extends Model
{
    protected $fillable = [
        'id_periksa',
        'id_obat'
    ];

    // detail pemeriksaan hanya terkait satu pemeriksaan dan satu obat
    public function periksa(): BelongsTo
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}
