<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function card($postId)
    {
        $post = Post::findOrFail($postId);
        return view('card', compact('post'));
    }

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

    public function edit($postId)
    {
        $post = Post::findOrFail($postId);
        return view('edit', compact('post'));
    }

    public function update($postId, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($postId);

        if (auth()->user()->id == $post->user_id) {
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
            return redirect()->route('post.getall');
        }

        return back();
    }

    public function delete($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        return back();
    }
}
