<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = "penyewaans";
    protected $primaryKey = "id_sewa";

    protected $fillable = [
        'no_plat',
        'id_user',
        'tanggal_mulai',
        'tanggal_selesai',
        'tanggal_pengembalian',
        'titik_antar',
        'titik_jemput',
        'status',
        'total_harga',
        'jaminan',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function Mobil()
    {
        return $this->belongsTo(Mobil::class, 'no_plat');
    }
}
