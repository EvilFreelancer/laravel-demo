<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::query()->get();
        return response()->view('welcome', ['text' => 'Hello controller!', 'users' => $users]);
    }

    public function user(Request $request, string $user_id)
    {
        $user     = User::query()->findOrFail($user_id);
        $messages = $user->messages()->get();

        return response()->view('user.messages', compact('user', 'messages'));
    }
}
