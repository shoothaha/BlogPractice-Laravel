@extends('blogviews.main')

@section('title', '|Edit Post')

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
			<div class="col-md-8">
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('titles', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

				{{ Form::label('body', 'Post Body:', ['class' => 'form-spacing-top']) }}
				{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
			</div>

			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created At:</dt>
						<dd>{{ date('d-M-Y, H:i:s',  strtotime($post -> created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
						<dt>Last Updated:</dt>
						<dd>{{ date('d-M-Y, H:i:s',  strtotime($post -> updated_at)) }}</dd>
					</dl>
					<hr>

					<div class="row">
						<div class="col-md-6">

							{{ Form::submit('Save Change', ['class' => 'btn btn-success btn-block']) }}
							
						</div>

						<div class="col-md-6">
							{!! Html::linkRoute('posts.show', 'Cancle', array($post -> id), array('class' => 'btn btn-danger btn-block')) !!}
						</div>
					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</div>

@endsection

@section('script')

	{!! Html::script('js/parsley.min.js') !!}

@endsection