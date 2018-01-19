<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Get welcome page
    public function  welcome(){
        // Select last five posts from database
        $posts = Post::orderBy('id', 'desc')->limit(5)->get();

        return view('welcome')->withPosts($posts);
    }
}
