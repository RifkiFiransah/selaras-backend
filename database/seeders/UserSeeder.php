<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'no_hp' => '08123xxx',
            'profile' => 'profile.png',
            'tanggal_lahir' => '2004-11-12',
            'jenis_kelamin' => 'pria'
        ]);
    }
}
