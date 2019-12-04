<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Message;
use App\Models\Post;
use App\Models\Tag;
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
        $posts     = $user->posts;
        $messages  = $user->messages;
        $companies = $user->companies()->withPivot('title')->get();

        return response()->view('user', compact('user', 'posts', 'messages', 'companies'));
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
        // $users    = $post->messagesUsers()->get();
        // dd($users);

        return response()->view('post', compact('post', 'messages'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Company      $company
     *
     * @return \Illuminate\Http\Response
     */
    public function company(Request $request, Company $company)
    {
        return response()->view('company', compact('company'));
    }
}
