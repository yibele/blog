@extends('main')
@section('title','| Blog')
@section('body')
    <div class="row">
        <div class="col-md-8 ">
            <h1>Blog</h1>
            <hr>
        </div>
    </div>
    @foreach($post as $v)
    <div class="row">
        <div class="col-md-8 col-md-offste-2">
            <h2>{{$v->title}}</h2>
            <h5>Published: {{$v->create_at}}</h5>

            <p>{{substr($v->body,0,250)}}{{ strlen($v->body)>250 ? "...":""}}</p>

            <a href="{{route('blog.single',$v->slug)}}" class="btn btn-primary">Read More</a>
        </div>

    </div>
@endforeach
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            {!! $post->links() !!}
        </div>
    </div>
</div>


@endsection
