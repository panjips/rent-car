<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'keterangan',
        'gambar',
        'merek',
        'nama',
        'transmisi',
        'bahan_bakar',
        'harga_sewa',
        'warna',
        'status',
    ];


    public function Penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }
}
