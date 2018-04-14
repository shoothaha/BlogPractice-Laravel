@extends('blogviews.main')


@section('title', '| Homepage')

@section('content') 

	<div class="row">
		<div class="col-md-12">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach ($posts as $post)

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>{{ $post->titles }}</h2>
				<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

				<p>{{ substr($post->body, 0, 150) }}{{ strlen($post->body) > 150 ? '...' : "" }}</p>

				<a href="{{ route('PublicViews.blogs', $post->id) }}" class="btn btn-primary">Read More</a>
				

				
				{{-- 	<a href="{{ url('blog/'.$post -> slug) }}" class="btn btn-primary">Read More</a>  --}}			
				<hr>
			</div>
		</div>

	@endforeach

	<div class="text-center">
		{!! $posts->links() !!}
	</div>
@endsection