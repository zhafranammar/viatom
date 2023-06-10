<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materi;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::Create([
            'title' => 'Materi 1',
            'level' => 2,
            'description' => 'Description for Materi 1',
            'src' => 'assets/pdf/materi-1.pdf',
        ]);
        Materi::Create([
            'title' => 'Materi 2',
            'level' => 9,
            'description' => 'Description for Materi 2',
            'src' => 'assets/pdf/materi-2.pdf',
        ]);
    }
}
