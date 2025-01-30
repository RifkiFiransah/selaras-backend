<?php

namespace Database\Seeders;

use App\Models\Mitra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mitra::create([
            'name' => 'mitra',
            'email' => 'mitra@gmail.com',
            'password' => bcrypt('mitra123'),
            'toko' => 'mitra toko',
            'no_hp' => '08123xxxx',
            'logo' => 'images.png'
        ]);
    }
}
