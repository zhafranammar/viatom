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
            'question' => 'This is question 1',
            'level' => 6,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 2',
            'level' => 7,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 3',
            'level' => 12,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 4',
            'level' => 13,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 5',
            'level' => 21,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 6',
            'level' => 22,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 7',
            'level' => 29,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 8',
            'level' => 30,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 9',
            'level' => 35,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 10',
            'level' => 36,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',
        ]);
        Quiz::Create([
            'question' => 'This is question 11',
            'level' => 39,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',

        ]);
        Quiz::Create([
            'question' => 'This is question 12',
            'level' => 40,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',

        ]);
        Quiz::Create([
            'question' => 'This is question 13',
            'level' => 43,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',

        ]);
        Quiz::Create([
            'question' => 'This is question 14',
            'level' => 44,
            'option_true' => 'Option A',
            'option_false_1' => 'Option B',
            'option_false_2' => 'Option C',
            'option_false_3' => 'Option D',

        ]);
    }
}
