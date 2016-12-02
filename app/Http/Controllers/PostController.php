<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a varible and store all the blog postsi in it from the databases
        $posts = Post::orderBy('id','desc')->paginate(10);
        //return a view and pass in the above variable
        return view('posts.index')->withPost($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
                'title'=> 'required|max:255',
                'body' => 'required'
            ));

        //store the databases
        $post = new Post;  //create a new row of databases;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        Session::flash('success','The blog post was successfully save!');//flash||put

        //redirect to another pages
        return redirect()->route('post.show',$post->id);
        //post/show/{id}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);//only can find in primaryId

        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the databases and save it as a var
        $post = Post::find($id);
        //return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate the data
        $this->validate($request,array(
                'title'=> 'required|max:255',
                'body' => 'required'
            ));

        //save the data to the form
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        //set flash data with success message
        Session::flash('success','This post was successfully saved');
        //redirect with flash data to post.show
        return redirect()->route('post.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();
        Session::flash('success','The post was successfully deleted.');
        return redirect()->route('post.index');
    }
}
