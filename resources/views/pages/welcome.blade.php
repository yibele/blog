@extends('main')
@section('title','| HomePage')
@section('body')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to My Blog</h1>
        <p class="lead">Thank you so much for visiting. This is my test website built with Laravel.Plaes read my popular post!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">popular post</a></p>
      </div>
  </div><!--end of header .row-->
  <div class="row">
    <div class="col-md-8" >
     <div class="post">
       <h3>Post Title</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt porttitor est vitae feugiat. Morbi id eleifend neque. Sed cursus ante eu odio finibus, nec vulputate nunc ornare. </p>
       <a href="#" class="btn btn-primary">Read More</a>
     </div>
     <hr>
     <div class="post">
       <h3>Post Title</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt porttitor est vitae feugiat. Morbi id eleifend neque. Sed cursus ante eu odio finibus, nec vulputate nunc ornare. </p>
       <a href="#" class="btn btn-primary">Read More</a>
     </div>
     <hr>
     <div class="post">
       <h3>Post Title</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt porttitor est vitae feugiat. Morbi id eleifend neque. Sed cursus ante eu odio finibus, nec vulputate nunc ornare. </p>
       <a href="#" class="btn btn-primary">Read More</a>
     </div>
     <hr>
    </div>
    <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
    </div>

  </div>
</div><!--end of .container-->

@endsection

