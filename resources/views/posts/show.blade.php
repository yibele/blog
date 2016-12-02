@extends('main')

@section('title','| View Post')

@section('body')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<p class="lead">{{ $post->body }}</p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Create At:</label>
					<p>{{$post->created_at}}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{$post->updated_at}}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('blog.single',$post->slug) }}">{{route('blog.single',$post->slug)}}</a><p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!!Html::linkRoute('post.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block'))!!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route'=>['post.destroy',$post->id],'method'=>'DELETE']) !!}
						{!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>
					<div class="row">
					<div class="col-sm-12">
						<a href="{{route('post.index')}}" class="btn btn-default btn-block defaul-spacing">
							<< Show All Posts
						</a>
					</div>



					</div>
				</div>


			</div>
		</div>
	</div>

@endsection
