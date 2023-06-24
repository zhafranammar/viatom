<?php

namespace Database\Seeders;

use App\Models\Scene;
use Illuminate\Console\Scheduling\Schedule;
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
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 3,
            'type' => 'see-the-atom',
        ]);
        Scene::Create([
            'level' => 4,
            'type' => 'build-the-atom',
        ]);

        Scene::Create([
            'level' => 5,
            'type' => 'quiz',
        ]);
        Scene::Create([
            'level' => 6,
            'type' => 'quiz',
        ]);

        Scene::Create([
            'level' => 7,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 8,
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 9,
            'type' => 'see-the-atom',
        ]);
        Scene::Create([
            'level' => 10,
            'type' => 'build-the-atom',
        ]);

        Scene::Create([
            'level' => 11,
            'type' => 'quiz',
        ]);
        Scene::Create([
            'level' => 12,
            'type' => 'quiz',
        ]);

        Scene::Create([
            'level' => 13,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 14,
            'type' => 'video',
        ]);

        Scene::Create([
            'level' => 15,
            'type' => 'atom-experiment',
        ]);
        Scene::Create([
            'level' => 16,
            'type' => 'atom-experiment',
        ]);
        Scene::Create([
            'level' => 17,
            'type' => 'atom-experiment',
        ]);
        Scene::Create([
            'level' => 18,
            'type' => 'atom-experiment',
        ]);

        Scene::Create([
            'level' => 19,
            'type' => 'quiz',
        ]);
        Scene::Create([
            'level' => 20,
            'type' => 'quiz',
        ]);

        Scene::Create([
            'level' => 21,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 22,
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 23,
            'type' => 'atom-experiment',
        ]);
        Scene::Create([
            'level' => 24,
            'type' => 'atom-experiment',
        ]);
        Scene::Create([
            'level' => 25,
            'type' => 'atom-experiment',
        ]);
        Scene::Create([
            'level' => 26,
            'type' => 'see-the-atom',
        ]);
        Scene::Create([
            'level' => 27,
            'type' => 'build-the-atom',
        ]);

        Scene::Create([
            'level' => 28,
            'type' => 'quiz',
        ]);
        Scene::Create([
            'level' => 29,
            'type' => 'quiz',
        ]);

        Scene::Create([
            'level' => 30,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 31,
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 32,
            'type' => 'see-the-atom',
        ]);
        Scene::Create([
            'level' => 33,
            'type' => 'build-the-atom',
        ]);


        Scene::Create([
            'level' => 34,
            'type' => 'quiz',
        ]);
        Scene::Create([
            'level' => 35,
            'type' => 'quiz',
        ]);

        Scene::Create([
            'level' => 36,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 37,
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 38,
            'type' => 'quiz',
        ]);
        Scene::Create([
            'level' => 39,
            'type' => 'quiz',
        ]);

        Scene::Create([
            'level' => 40,
            'type' => 'materi',
        ]);
        Scene::Create([
            'level' => 41,
            'type' => 'video',
        ]);
        Scene::Create([
            'level' => 42,
            'type' => 'quiz',
        ]);
        Scene::Create([
            'level' => 43,
            'type' => 'quiz',
        ]);

        Scene::Create([
            'level' => 44,
            'type' => 'materi',
        ]);
    }
}
