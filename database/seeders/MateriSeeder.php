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
            'level' => 1,
            'title' => 'Materi Atom Dalton',
            'description' => 'Materi Atom Dalton',
            'src' => 'assets\pdf\[1]-Teori-Atom-Dalton.pdf'
        ]);
        Materi::Create([
            'level' => 6,
            'title' => 'Materi Atom Thomson',
            'description' => 'Materi Atom Thomson',
            'src' => 'assets\pdf\[2]-Teori-Atom-Thomson.pdf'
        ]);
        Materi::Create([
            'level' => 11,
            'title' => 'Materi Percobaan Sinar Katoda dan Tetes Minyak Milikan',
            'description' => 'Materi Percobaan Sinar Katoda dan Tetes Minyak Milikan',
            'src' => 'assets\pdf\[3]-Percobaan Sinar Katoda _ Minyak Milikan.pdf'
        ]);
        Materi::Create([
            'level' => 18,
            'title' => 'Materi Atom Rutherford',
            'description' => 'Materi Atom Rutherford',
            'src' => 'assets\pdf\[4]-Teori_Atom_Rutherford.pdf'
        ]);
        Materi::Create([
            'level' => 25,
            'title' => 'Materi Atom Bohr',
            'description' => 'Materi Atom Bohr',
            'src' => 'assets\pdf\[5]-Teori Atom Bohr.pdf'
        ]);
        Materi::Create([
            'level' => 30,
            'title' => 'Materi Notasi Atom',
            'description' => 'Materi Notasi Atom',
            'src' => 'assets\pdf\[6]-Notasi Atom.pdf'
        ]);
        Materi::Create([
            'level' => 33,
            'title' => 'Materi Isoton, Isobar, Isotop',
            'description' => 'Materi Isoton, Isobar, Isotop',
            'src' => 'assets\pdf\[7]-Isotop, Isobar, Isoton.pdf'
        ]);
    }
}
