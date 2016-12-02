<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
    public function getSingle($slug){
        //fetch from the databases baseon slug
        $post = Post::where('slug',$slug)->first(); //get find all macth & first stop at the first match line
        //return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }
}
