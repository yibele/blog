<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
    public function getIndex(){
        $post = Post::orderBy('id','desc')->paginate(10);
        return view('blog.index')->withPost($post);
    }

    public function getSingle($slug){
        //fetch from the databases baseon slug
        $post = Post::where('slug',$slug)->first(); //get find all macth & first stop at the first match line
        //return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }

}
