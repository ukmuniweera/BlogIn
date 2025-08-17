<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function getall()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        return view('allPosts', compact('posts'));
    }

    public function edit()
    {
        return view('post.edit', compact('postId'));
    }

    public function delete($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        return back();
    }
}
