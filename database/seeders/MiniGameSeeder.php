<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MiniGame;

class MiniGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MiniGame::Create([
            'title' => 'Mini Game 1',
            'level' => 7,
            'description' => 'Description for Mini Game 1',
            'src' => 'miniGame1.js'
        ]);
        MiniGame::Create([
            'title' => 'Mini Game 2',
            'level' => 14,
            'description' => 'Description for Mini Game 2',
            'src' => 'miniGame2.js'
        ]);
    }
}
