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
            'level' => 4,
            'title' => 'Materi Atom Thomson',
            'description' => 'Materi Atom Thomson',
            'src' => 'assets\pdf\[2]-Teori-Atom-Thomson.pdf'
        ]);
        Materi::Create([
            'level' => 7,
            'title' => 'Materi Percobaan Sinar Katoda dan Tetes Minyak Milikan',
            'description' => 'Materi Percobaan Sinar Katoda dan Tetes Minyak Milikan',
            'src' => 'assets\pdf\[3]-Percobaan Sinar Katoda _ Minyak Milikan.pdf'
        ]);
        Materi::Create([
            'level' => 13,
            'title' => 'Materi Atom Rutherford',
            'description' => 'Materi Atom Rutherford',
            'src' => 'public\assets\pdf\[4]-Teori Atom Rutherford.pdf'
        ]);
        Materi::Create([
            'level' => 18,
            'title' => 'Materi Atom Bohr',
            'description' => 'Materi Atom Bohr',
            'src' => 'assets\pdf\[5]-Teori Atom Bohr.pdf'
        ]);
        Materi::Create([
            'level' => 21,
            'title' => 'Materi Notasi Atom',
            'description' => 'Materi Notasi Atom',
            'src' => 'assets\pdf\[6]-Notasi Atom.pdf'
        ]);
        Materi::Create([
            'level' => 22,
            'title' => 'Materi Isoton, Isobar, Isotop',
            'description' => 'Materi Isoton, Isobar, Isotop',
            'src' => 'assets\pdf\[7]-Isotop, Isobar, Isoton.pdf'
        ]);
    }
}
