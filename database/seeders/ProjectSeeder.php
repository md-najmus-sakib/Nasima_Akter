<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Portfolio Website',
                'description' => 'A responsive personal portfolio website built with Laravel and Bootstrap to showcase my skills and projects.',
                'image' => 'assets/image/portfolio-project.jpg',
                'demo_url' => 'https://nasima-portfolio.com',
                'github_url' => 'https://github.com/nasima/portfolio',
                'technologies' => ['Laravel', 'Bootstrap', 'PHP', 'HTML', 'CSS', 'JavaScript'],
                'start_date' => '2024-01-15',
                'end_date' => '2024-02-28',
                'is_featured' => true
            ],
            [
                'title' => 'E-commerce Platform',
                'description' => 'A full-stack e-commerce web application with user authentication, product management, and payment integration.',
                'image' => 'assets/image/ecommerce-project.jpg',
                'demo_url' => 'https://nasima-shop.com',
                'github_url' => 'https://github.com/nasima/ecommerce',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe API', 'Bootstrap'],
                'start_date' => '2024-03-01',
                'end_date' => '2024-05-15',
                'is_featured' => true
            ],
            [
                'title' => 'Task Management App',
                'description' => 'A simple task management application to help users organize their daily tasks and improve productivity.',
                'image' => 'assets/image/task-app-project.jpg',
                'demo_url' => 'https://nasima-tasks.com',
                'github_url' => 'https://github.com/nasima/task-manager',
                'technologies' => ['Laravel', 'Livewire', 'Alpine.js', 'Tailwind CSS'],
                'start_date' => '2024-06-01',
                'end_date' => '2024-07-20',
                'is_featured' => false
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
