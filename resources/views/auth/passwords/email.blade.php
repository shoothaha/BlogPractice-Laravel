@extends('blogviews.main')

@section('title', '| Password Reset')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<h4>Reset Password</h4>

				<div class="panel-body">

					@if (session('status'))

						<div class="alert alert-success">
							{{ session('status') }}
						</div>

					@endif

					{!! Form::open(['url' => 'password/email', 'method' => 'POST']) !!}

						{{ Form::label('email', 'Your Email Address:') }}
						{{ Form::email('email', null, ['class' => 'form-control']) }}
						<hr>
						{{ Form::submit('Send Link', ['class' => 'btn btn-primary']) }}

					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>

@endsection