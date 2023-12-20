<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@astegol.com',
            'username' => 'johndoe',
            'gender' => 'Laki-laki',
            'birthday' => '1990-01-01',
            'password' => '$2y$10$0HlHXoSOQnPU2mn8C1PGwuDbk5Tah0Epc3whtyU502v8Y3g50U/5K',
            'active' => 1,
            'verif_key' => 'AROxpBVLraKWPvPKFRGLSH6X3gW1BCzAnzdbMZjH4tlwUqn4fPqWchjXSfIONFIUEddWSQZNlL0ZYvsxsB9xc7dzQegmWNoKC9jF'
        ]);
    }
}
