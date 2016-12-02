@extends('main');

@section('title','| All Posts');

@section('body')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('post.index') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">
				Create New Post
			</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!--end of the row-->
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					@foreach ($post as $v)
						<tr>
							<th>{{$v->id}}</th>
							<td>{{$v->title}}</td>
							<td>{{substr($v->body,0,50)}}{{ strlen($v->body)>50 ? "...":"" }}</td> <!--take first 50 stirng to the td-->
							<td>{{$v->created_at}}</td>
							<td>
								<a href="{{ route('post.show',$v->id) }}" class="btn btn-default btn-sm">
									View
								</a>
								<a href="{{ route('post.edit',$v->id) }}" class="btn btn-default btn-sm">
									Edit
								</a>
							</td>
						</tr>
						
					@endforeach

				</tbody>
			</table>
			<div class="text-center">
				{!! $post->links(); !!}
			</div>
		</div>

	</div>

@stop


