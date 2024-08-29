<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::find(1);
        $postsImages = $posts->images;

        return view('index')->with([
            'postsImages' => $postsImages
        ]);
    }
}
