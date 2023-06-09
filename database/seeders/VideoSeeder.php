<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::Create([
            'title' => 'Video Opening',
            'level' => 1,
            'video_url' => 'https://www.youtube.com/embed/PP4-4I-Crek',
        ]);
        Video::Create([
            'title' => 'Video Materi Atom Dalton',
            'level' => 2,
            'video_url' => 'https://www.youtube.com/embed/VjAqGWleH4s',
        ]);
        Video::Create([
            'title' => 'Video Materi Atom Thomson',
            'level' => 8,
            'video_url' => 'https://www.youtube.com/embed/0BQU_KQaOgI',
        ]);
        Video::Create([
            'title' => 'Video Materi Percobaan Sinar Katoda dan Tetes Minyak Milikan',
            'level' => 14,
            'video_url' => 'https://www.youtube.com/embed/1X7fZoDs9KU',
        ]);
        Video::Create([
            'title' => 'Video Materi Atom Rutherford',
            'level' => 22,
            'video_url' => 'https://www.youtube.com/embed/1X7fZoDs9KU',
        ]);
        Video::Create([
            'title' => 'Video Materi Atom Bohr',
            'level' => 31,
            'video_url' => 'https://www.youtube.com/embed/1X7fZoDs9KU',
        ]);
        Video::Create([
            'title' => 'Video Materi Notasi Atom',
            'level' => 37,
            'video_url' => 'https://www.youtube.com/embed/RTMm7oJl7BE',
        ]);
        Video::Create([
            'title' => 'Video Materi Isoton, Isobar, Isotop',
            'level' => 41,
            'video_url' => 'https://www.youtube.com/embed/EfcfpdfYnmI',
        ]);
    }
}
