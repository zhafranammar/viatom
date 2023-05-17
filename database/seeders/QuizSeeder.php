<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::Create([
            'level' => 6,
            'question' => 'Pernyataan yang benar mengenai atom adalah',
            'option_true' => 'Atom terdiri dari inti atom dan elektron',
            'option_false_1' => 'Atom terdiri dari inti atom dan proton',
            'option_false_2' => 'Atom terdiri dari inti atom dan neutron',
            'option_false_3' => 'Atom terdiri dari inti atom dan elektron',
        ]);
        Quiz::Create([
            'level' => 13,
            'question' => 'Pernyataan yang benar mengenai elektron adalah',
            'option_true' => 'Elektron bermuatan negatif',
            'option_false_1' => 'Elektron bermuatan positif',
            'option_false_2' => 'Elektron bermuatan netral',
            'option_false_3' => 'Elektron bermuatan negatif',
        ]);
    }
}
