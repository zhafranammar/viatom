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
            'level' => 3,
            'description' => 'See the Atom',
            'src' => 'https://mywebar.com/p/viatom-atom-dalton',
        ]);
        SeeTheAtom::Create([
            'title' => 'Atom Thomson',
            'level' => 9,
            'description' => 'See the Atom',
            'src' => 'https://mywebar.com/p/viatom-atom-thomson',
        ]);
        SeeTheAtom::Create([
            'title' => 'Atom Rutherford',
            'level' => 26,
            'description' => 'See the Atom',
            'src' => 'https://mywebar.com/p/viatom-atom-rutherford',
        ]);
        SeeTheAtom::Create([
            'title' => 'Atom Bohr',
            'level' => 32,
            'description' => 'See the Atom',
            'src' => 'https://mywebar.com/p/viatom-atom-bohr',
        ]);
    }
}
