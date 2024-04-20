<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(10)->get(); // Get the latest 10 posts
        return view('home', compact('posts'));
    }
}
