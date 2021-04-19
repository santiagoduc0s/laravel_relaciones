<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        return $user->address;

//        $profile = Profile::find(1);
//        return $profile->user;

//        $post = Post::find(1);
//        return $post->category;

//        $category = Category::find(1);
//        return $category->posts;

//        $video = Video::first();
//        return $video->user;
    }
}
