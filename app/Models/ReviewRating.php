<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRating extends Model
{
    use HasFactory;

    protected $table = "review_ratings";
    protected $primaryKey = "id_review";

    protected $fillable = [
        'no_plat',
        'id_user',
        'id_sewa',
        'rating',
        'deskripsi',
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function Mobil()
    {
        return $this->belongsTo(Mobil::class, 'no_plat');
    }
    public function Penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'id_sewa');
    }
}
