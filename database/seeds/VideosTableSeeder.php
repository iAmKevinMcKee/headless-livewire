<?php

use App\Video;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'vimeo_id' => '396617270',
        ]);

        Video::create([
            'vimeo_id' => '398003880',
        ]);

        Video::create([
            'vimeo_id' => '396766334',
        ]);
    }
}
