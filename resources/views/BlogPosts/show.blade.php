@extends('blogviews.main')

@section('title', '|View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post -> titles }}</h1>

			<p class="lead">{{ $post -> body }}</p>
		</div>

		<div class="col-md-4">
			<div class="well" style="background-color: #D4FCE7">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('d-M-Y, H:i:s',  strtotime($post -> created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('d-M-Y, H:i:s',  strtotime($post -> updated_at)) }}</dd>
				</dl>
				<hr>

				<div class="dl-horizontal">
					<dt>Slug URL:</dt>
					<dd><a href="{{ url('blog/'.$post -> slug) }}">{{ url('blog/'.$post -> slug) }}</a></dd>
				</div>
				<hr>

				<div class="row">
					<div class="col-md-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post -> id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>

					<div class="col-md-6">

						{!! Form::open(array('route' => ['posts.destroy', $post->id], 'method' => 'DELETE')) !!}

						{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}

						{!! Form::close() !!}
					</div>
				</div>
				<hr>
				{{ Html::linkRoute('posts.index', 'Back to all posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing', 'style' => 'background-color: #9BC5FE']) }}
			</div>
		</div>
	</div>

@endsection