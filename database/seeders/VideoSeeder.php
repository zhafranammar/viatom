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
            'title' => 'Video 1',
            'level' => 1,
            'video_url' => 'https://www.youtube.com/embed/1X7fZoDs9KU',
            'thumbnail_url' => 'https://picsum.photos/200/300',
        ]);
        Video::Create([
            'title' => 'Video 2',
            'level' => 8,
            'video_url' => 'https://www.youtube.com/embed/1X7fZoDs9KU',
            'thumbnail_url' => 'https://picsum.photos/200/300',
        ]);
    }
}
