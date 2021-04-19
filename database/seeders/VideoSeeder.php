<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = new Video();
        $video->user_id = 1;
        $video->title = 'Mi biografia';
        $video->description = 'descripcion del video de mi biografia';
        $video->route = 'video/usuario/video2.mp4';
        $video->save();

        $video = new Video();
        $video->user_id = 1;
        $video->title = 'Mi primer dia en el trabajo';
        $video->description = 'descripcion del video';
        $video->route = 'video/usuario/video2.mp4';
        $video->save();
    }
}
