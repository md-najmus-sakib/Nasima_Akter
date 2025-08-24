<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'image' => 'assets/image/project-' . $this->faker->numberBetween(1, 5) . '.jpg',
            'demo_url' => $this->faker->url(),
            'github_url' => 'https://github.com/' . $this->faker->userName() . '/' . $this->faker->slug(2),
            'technologies' => $this->faker->randomElements(['Laravel', 'Vue.js', 'React', 'PHP', 'JavaScript', 'Bootstrap', 'Tailwind'], 3),
            'start_date' => $this->faker->dateTimeBetween('-2 years', '-6 months'),
            'end_date' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'is_featured' => $this->faker->boolean(30), // 30% chance of being featured
        ];
    }
}
