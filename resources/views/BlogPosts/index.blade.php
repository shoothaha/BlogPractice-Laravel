@extends('blogviews.main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-9">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-3">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing"> Create New Blog Post</a>
		</div>
		<div class="col-md-12"><hr></div>
	</div>

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

					@foreach ($posts as $post)
						
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->titles }}</td>
							<td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? '...' : ''}}</td>
							<td>{{ date('M j, Y H:m', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm" style="background-color: #B8FF8C">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm" style="background-color: #C0B6FE">Edit</a></td>
						</tr>

					@endforeach
				</tbody>
			</table>

			<div class="text-center">
				{!! $posts->links() !!}
			</div>

		</div>
	</div>

@endsection