<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::find(1);
        $image = Images::find(1);
        $imageable = $image->imageable;
        $postsImages = $posts->images;

        return view('index')->with([
            'postsImages' => $postsImages,
            'imageable' => $imageable
        ]);
    }

    public function getComments()
    {
        $post = Posts::find(1);
        $comments = $post->comments();
        return view('one_to_many')->with([
            'comments' => $comments
        ]);
    }
}
