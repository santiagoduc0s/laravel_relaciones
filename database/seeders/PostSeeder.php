<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 1;
        $post->category_id = 1;
        $post->title = 'Las cosas que dijo la bianchi';
        $post->content = 'Contenido de la noticia';
        $post->save();

        $post = new Post();
        $post->user_id = 1;
        $post->category_id = 2;
        $post->title = 'Aumenta el PIB en el primer trimeste del año';
        $post->content = 'Contenido de la noticia';
        $post->save();
    }
}
