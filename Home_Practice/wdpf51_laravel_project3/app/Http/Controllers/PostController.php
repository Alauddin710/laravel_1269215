<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // one to many
        $posts = Post::all();
        // $comments = $post->comments;
        //return response()->json($post);
        // dd($comments);

        return view('post.index', compact('posts'));
    }
}
