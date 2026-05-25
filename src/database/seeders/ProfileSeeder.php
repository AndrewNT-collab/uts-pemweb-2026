<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Andrew Novan Then',
                'nim' => '20240801024',
                'major' => 'Teknik Informatika',
                'university' => 'Universitas Esa Unggul',
                'about' => 'Website ini dibuat sebagai portfolio personal sekaligus media showcase untuk menampilkan project akhir saya, yaitu Endfield Factory Blueprint System. Project ini dikembangkan menggunakan Laravel, Filament, Docker, dan MariaDB sebagai implementasi sistem berbasis web modern.',
                'photo' => 'profile.jpg',
            ]
        );
    }
}