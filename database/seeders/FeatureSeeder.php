<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::Create([
            'name' => 'Adventure',
            'slug' => 'adventure',
            'description' => 'Description for Adventure',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'Learning Material',
            'slug' => 'learning-material',
            'description' => 'Description for Learning Material',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'Build The Atom',
            'slug' => 'build-the-atom',
            'description' => 'Description for Build The Atom',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'See the Atom',
            'slug' => 'see-the-atom',
            'description' => 'Description for See the Atom',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'Atom Experiment',
            'slug' => 'atom-experiment',
            'description' => 'Description for Atom Experiment',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'Mini Games',
            'slug' => 'mini-games',
            'description' => 'Description for Mini Games',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'Discussion',
            'slug' => 'discussion',
            'description' => 'Description for Discussion',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'Quiz',
            'slug' => 'quiz',
            'description' => 'Description for Quiz',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
        Feature::Create([
            'name' => 'Exam',
            'slug' => 'exam',
            'description' => 'Description for Exam',
            // 'src' => 'https://picsum.photos/200/300',
        ]);
    }
}
