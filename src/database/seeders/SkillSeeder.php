<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Laravel',
            'Filament',
            'MySQL',
            'Tailwind CSS',
            'Docker',
            'REST API',
            'GitHub',
            'VS Code',
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate([
                'name' => $skill,
            ]);
        }
    }
}