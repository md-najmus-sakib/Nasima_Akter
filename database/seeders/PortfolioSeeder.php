<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'name' => 'Nasima Akter',
            'title' => 'Web Developer & Designer',
            'bio' => 'I am a passionate web developer with expertise in modern web technologies. I love creating beautiful and functional websites that provide great user experiences.',
            'email' => 'nasima@example.com',
            'phone' => '+8801234567890',
            'location' => 'Dhaka, Bangladesh',
            'profile_image' => 'assets/image/my-image.jpg',
            'cv_link' => '#',
            'social_links' => [
                'facebook' => 'https://facebook.com/nasima',
                'linkedin' => 'https://linkedin.com/in/nasima',
                'github' => 'https://github.com/nasima',
                'twitter' => 'https://twitter.com/nasima'
            ]
        ]);
    }
}
