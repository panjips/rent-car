<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "admin";
    protected $table = "admins";
    protected $primaryKey = "id_admin";
    protected $fillable = [
        "nama_depan",
        "nama_akhir",
        "email",
        "username",
        "jenis_kelamin",
        "tanggal_lahir",
        "password",
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
