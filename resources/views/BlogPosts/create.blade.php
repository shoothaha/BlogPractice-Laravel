@extends('blogviews.main')

@section('title', '| Create New Post')

@section('stylesheet')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

			    {{ Form::label('titles', 'Title:') }}
			    {{ Form::text('titles', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
				<br>

				{{ Form::label('slug', 'Short Title: ') }}
				{{ Form::text('slug', null, ['class'=>'form-control', 'required'=>'', 'minlenth'=>'5', 'maxlength'=>'50']) }}
				<br>	
				
			    {{ Form::label('body', 'Post Body:') }}
			    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

			    {{ Form::submit('Submit Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 10px')) }}

			{!! Form::close() !!}

		</div>
	</div>


@endsection

@section('script')

	{!! Html::script('js/parsley.min.js') !!}

@endsection