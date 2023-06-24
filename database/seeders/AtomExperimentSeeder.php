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
            'level' => 15,
            'description' => 'Sinar Katode bergerak lurus apabila tidak ada pengaruh dari medan listrik maupun medan magnet dari katoda ke anoda',
            'src' => 'js\atom-experiment\sinar-katoda-a.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 16,
            'description' => 'Sinar katoda berbelok apabila didekatkan pada batang magnet atau medan listrik',
            'src' => 'js\atom-experiment\sinar-katoda-b.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 17,
            'description' => 'Ketika sisi magnet yang lain didekatkan, sinar membelok ke arah yang berlawanan',
            'src' => 'js\atom-experiment\sinar-katoda-c.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Katoda',
            'level' => 18,
            'description' => 'Pemasangan kincir/baling-baling pada tabung sinar katode dimaksudkan umuk membuktikan bahwa sinar katode bukan sekedar cahaya biasa tetapi merupakan partikel yang memiliki massa',
            'src' => 'js\atom-experiment\sinar-katoda-e.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Alfa',
            'level' => 23,
            'description' => 'Sinar alfa banyak diteruskan menunjukan atom sebagian besar adalah ruang kosong',
            'src' => 'js\atom-experiment\sinar-alfa-a.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Alfa',
            'level' => 24,
            'description' => 'Sinar alfa sedikiti yang dipantulkan menandakan sinar alfa menabrak inti atom',
            'src' => 'js\atom-experiment\sinar-alfa-b.js',
        ]);
        AtomExperiment::Create([
            'title' => 'Alat Sinar Alfa',
            'level' => 25,
            'description' => 'Sinar alfa sedikit yang dibelokkan menandakan sinar alfa di tolak inti atom yang bermuatan positif',
            'src' => 'js\atom-experiment\sinar-alfa-c.js',
        ]);
    }
}
