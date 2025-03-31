<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal',
        'keluhan',
        'diagnosis'
    ];

    // pemeriksaan ini milik satu pasien
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_pasien');
    }

    // pemeriksaan ini dilakukan oleh satu dokter
    public function dokter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }

    public function detailPeriksa(): HasMany
    {
        return $this->hasMany(Detail_periksa::class, 'id_periksa');
    }
}
