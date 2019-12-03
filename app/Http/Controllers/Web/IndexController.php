<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return response()->view('welcome', ['posts' => $posts]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\User                $user
     *
     * @return \Illuminate\Http\Response
     */
    public function user(Request $request, User $user)
    {
        $posts    = $user->posts;
        $messages = $user->messages;

        return response()->view('user', compact('user', 'posts', 'messages'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post         $post
     *
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request, Post $post)
    {
        $messages = $post->messages;

        return response()->view('post', compact('post', 'messages'));
    }
}
