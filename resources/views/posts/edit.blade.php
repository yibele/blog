@extends('main')

@section('title','| Edit Blog Post')

@section('body')

	<div class="row">

	{!! Form::model($post, ['route'=>['post.update',$post->id],'method'=>'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title','Title') }}
			{{ Form::text('title',null,['class'=>'form-control input-lg']) }}
			{{ Form::label('slug','Slug',['class'=>'form-spacing-top']) }}
			{{ Form::text('slug',null,['class'=>'form-control ']) }}
			{{ Form::label('body','Body',['class'=>'form-spacing-top']) }}
			{{ Form::textarea('body',null,['class'=>'form-control']) }}
			</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{$post->created_at}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{$post->updated_at}}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!!Html::linkRoute('post.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block'))!!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block'])}}

						</div>

				</div>


			</div>
		</div>
		{!! Form::close() !!}
	</div><!--end of .row (form)

@stop
