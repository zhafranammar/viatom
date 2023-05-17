<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // call feature seeder
        $this->call(FeatureSeeder::class);
        $this->call(SceneSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(MateriSeeder::class);
        $this->call(BuildTheAtomSeeder::class);
        $this->call(SeeTheAtomSeeder::class);
        $this->call(AtomExperimentSeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(MiniGameSeeder::class);
    }
}
