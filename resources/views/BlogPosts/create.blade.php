@extends('blogviews.main')

@section('title', '| Create New Post')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(['route' => 'posts.store']) !!}
			    {{ Form::label('titles', 'Title:') }}
			    {{ Form::text('titles', null, array('class' => 'form-control')) }}

			    {{ Form::label('body', 'Post Body:') }}
			    {{ Form::textarea('body', null, array('class' => 'form-control')) }}

			    {{ Form::submit('Submit Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 10px')) }}
			{!! Form::close() !!}

		</div>
	</div>


@endsection