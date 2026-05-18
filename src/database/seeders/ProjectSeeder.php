<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::updateOrCreate(
            [
                'slug' => 'endfield-factory-blueprint-system',
            ],
            [
                'title' => 'Endfield Factory Blueprint System',

                'short_description' =>
                    'Website blueprint crafting berbasis Laravel untuk membantu pengguna memahami alur produksi item.',

                'problem_analysis' =>
                    'Pengguna kesulitan memahami hubungan antara bahan crafting, mesin produksi, dan hasil item karena informasi masih tersebar.',

                'system_requirements' =>
                    'Laravel, Docker, MariaDB, VS Code, Ubuntu WSL',

                'tech_stack' =>
                    'Laravel, Filament, MariaDB, Docker, Tailwind CSS',

                'progress_status' => 'Development',
            ]
        );
    }
}