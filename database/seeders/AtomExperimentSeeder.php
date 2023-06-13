<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AtomExperiment;

class AtomExperimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 16,
            'description' => 'Description experiment 1',
            'src' => 'js\atom-experiment\sinar-katoda-a.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 17,
            'description' => 'Description experiment 2',
            'src' => 'js\atom-experiment\sinar-katoda-b.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 18,
            'description' => 'Description experiment 3',
            'src' => 'js\atom-experiment\sinar-katoda-c.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 19,
            'description' => 'Description experiment 4',
            'src' => 'js\atom-experiment\sinar-katoda-d.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 20,
            'description' => 'Description experiment 5',
            'src' => 'js\atom-experiment\sinar-katoda-e.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Alfa',
            'level' => 25,
            'description' => 'Description experiment 6',
            'src' => 'js\atom-experiment\sinar-alfa-a.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Alfa',
            'level' => 26,
            'description' => 'Description experiment 7',
            'src' => 'js\atom-experiment\sinar-alfa-b.js',
        ]);
    }
}
