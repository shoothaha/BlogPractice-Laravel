@extends('blogviews.main')

@section('title', "| $post->titles")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post -> titles }}</h1>
			<p>{{ $post -> body }}</p>
		</div>
	</div>

@endsection