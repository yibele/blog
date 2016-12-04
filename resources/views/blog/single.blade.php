@extends('main')
@section('title','| '.$post->title)
@section('body')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <hr>
            <h4>Posted In:{{ $post->category->name }}</h4>

        </div>
    </div>

@stop
