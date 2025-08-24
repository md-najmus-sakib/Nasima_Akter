<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'HTML',
                'description' => 'Markup language for creating web pages',
                'proficiency' => 90,
                'category' => 'Frontend',
                'icon' => 'fab fa-html5'
            ],
            [
                'name' => 'CSS',
                'description' => 'Stylesheet language for styling web pages',
                'proficiency' => 85,
                'category' => 'Frontend',
                'icon' => 'fab fa-css3-alt'
            ],
            [
                'name' => 'JavaScript',
                'description' => 'Programming language for web development',
                'proficiency' => 80,
                'category' => 'Frontend',
                'icon' => 'fab fa-js-square'
            ],
            [
                'name' => 'PHP',
                'description' => 'Server-side scripting language',
                'proficiency' => 75,
                'category' => 'Backend',
                'icon' => 'fab fa-php'
            ],
            [
                'name' => 'Laravel',
                'description' => 'PHP web application framework',
                'proficiency' => 70,
                'category' => 'Backend',
                'icon' => 'fab fa-laravel'
            ],
            [
                'name' => 'Bootstrap',
                'description' => 'CSS framework for responsive design',
                'proficiency' => 85,
                'category' => 'Frontend',
                'icon' => 'fab fa-bootstrap'
            ]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
