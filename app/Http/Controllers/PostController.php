<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts()
    {
        //
        $posts = Post::get(['id','title', 'description', 'image']);

        return inertia('Posts/Index', ['posts' => $posts]);
    }


}