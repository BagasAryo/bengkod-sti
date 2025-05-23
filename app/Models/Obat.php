<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Obat extends Model
{
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga'
    ];

    // satu obat bisa ada banyak detail pemeriksaan
    public function obat(): HasMany
    {
        return $this->hasMany(Detail_periksa::class, 'id_obat');
    }
}
