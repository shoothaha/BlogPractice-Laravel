@extends('blogviews.main')

@section('title', '| Password Reset')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<h4>Reset Password</h4>

				<div class="panel-body">

					{{-- not reset password?? --}}

					{!! Form::open(['url' => '/', 'method' => 'GET']) !!}


						{{ Form::hidden('token', $token) }}

						{{ Form::label('email', 'Your Email Address:') }}
						{{ Form::email('email', $email, ['class' => 'form-control']) }}

						{{ Form::label('password', 'New Password:') }}
						{{ Form::password('password', ['class' => 'form-control']) }}

						{{ Form::label('password_confirmation', 'Re-Enter the Password') }}
						{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
						<hr>
						{{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>

@endsection