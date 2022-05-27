<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class GuestController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('guests.index', compact('posts'));
    }
}
