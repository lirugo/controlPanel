<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function getIndex(){
        // Get data from database
        $posts = Post::paginate(10);

        // Return view
        return view('blog.index')->withPosts($posts);
    }
    public function getSingle($slug){
        // Fetch from tha database on slug
        $post = Post::where('slug', '=', $slug)->first();

        // Return view and pass in the Post object
        return view('blog.single')->withPost($post);
    }
}
