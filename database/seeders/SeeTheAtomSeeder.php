<?php

namespace Database\Seeders;

use App\Models\SeeTheAtom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeeTheAtomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeeTheAtom::Create([
            'title' => 'Atom Dalton',
            'level' => 4,
            'description' => 'See the Atom',
            'src' => 'seeDalton.js',
        ]);
        SeeTheAtom::Create([
            'title' => 'Atom Thomson',
            'level' => 11,
            'description' => 'See the Atom',
            'src' => 'seeThomson.js',
        ]);
    }
}
