<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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

    public function storePost(PostRequest $postRequest)
    {
        $validatedData = $postRequest->validated();

        $image = $validatedData['image'];
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->storeAs('fake_images', $imageName);

        $validatedData['image'] = $imagePath;

        Post::create($validatedData);

        return redirect('post');
    }

}