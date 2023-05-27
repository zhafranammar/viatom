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
            'title' => 'Menyusun Alat Sinar Katoda',
            'level' => 5,
            'description' => 'Description experiment 1',
            'src' => 'js\atom-experiment\sinar-katoda-a.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 12,
            'description' => 'Description experiment 2',
            'src' => 'js\atom-experiment\sinar-katoda-b.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 17,
            'description' => 'Description experiment 3',
            'src' => 'js\atom-experiment\sinar-katoda-c.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 18,
            'description' => 'Description experiment 4',
            'src' => 'js\atom-experiment\sinar-katoda-d.js',
        ]);
    }
}
