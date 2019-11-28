<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return response()->view('welcome', ['text' => 'Hello controller!']);
    }

    public function test(string $date)
    {
        return response()->view('welcome', ['text' => $date]);
    }
}
