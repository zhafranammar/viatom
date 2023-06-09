<?php

namespace Database\Seeders;

use App\Models\BuildTheAtom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildTheAtomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BuildTheAtom::Create([
            'title' => 'Atom Dalton',
            'level' => 4,
            'description' => 'Description for Build The Atom 1',
            'src' => 'js\build-the-atom\dalton.js',
        ]);
        BuildTheAtom::Create([
            'title' => 'Atom Thomson',
            'level' => 10,
            'description' => 'Description for Build The Atom 2',
            'src' => 'js\build-the-atom\thomson.js',
        ]);
        BuildTheAtom::Create([
            'title' => 'Atom Rutherford',
            'level' => 27,
            'description' => 'Description for Build The Atom 3',
            'src' => 'js\build-the-atom\rutherford.js',
        ]);
        BuildTheAtom::Create([
            'title' => 'Atom Bohr',
            'level' => 33,
            'description' => 'Description for Build The Atom 4',
            'src' => 'js\build-the-atom\bohr.js',
        ]);
    }
}
