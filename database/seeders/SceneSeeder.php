<?php

namespace Database\Seeders;

use App\Models\Scene;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SceneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scene::Create([
            'level' => 1,
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 2,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 3,
            'type' => 'build-the-atom',
        ]);
        Scene::Create([
            'level' => 4,
            'type' => 'see-the-atom',
        ]);
        Scene::Create([
            'level' => 5,
            'type' => 'atom-experiment',
        ]);
        Scene::Create([
            'level' => 6,
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 7,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 8,
            'type' => 'build-the-atom',
        ]);
        Scene::Create([
            'level' => 9,
            'type' => 'see-the-atom',
        ]);
        Scene::Create([
            'level' => 10,
            'type' => 'atom-experiment',
        ]);
    }
}