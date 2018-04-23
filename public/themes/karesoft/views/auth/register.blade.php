@extends('karesoft::layout.blog.main')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">{{ trans('default.register')}}</div>
					<div class="panel-body">

						{!! Form::open(['url' => 'register', 'class' => 'form-horizontal']) !!}

							<div class="form-group">
								{!! Form::label('username', trans('default.username'), ['class' => 'col-md-4 control-label']) !!}
								<div class="col-md-6">
									{!! Form::text('username', null, ['class' => 'form-control']) !!}
								</div>
							</div>

							<div class="form-group">
								{!! Form::label('email', trans('default.email'), ['class' => 'col-md-4 control-label']) !!}
								<div class="col-md-6">
									{!! Form::email('email', null, ['class' => 'form-control']) !!}
								</div>
							</div>

							<div class="form-group">
								{!! Form::label('password', trans('default.password'), ['class' => 'col-md-4 control-label']) !!}
								<div class="col-md-6">
									{!! Form::password('password', ['class' => 'form-control']) !!}
								</div>
							</div>

							<div class="form-group">
								{!! Form::label('password_confirmation', trans('default.repassword'), ['class' => 'col-md-4 control-label']) !!}
								<div class="col-md-6">
									{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit(trans('default.register'), ['class' => 'btn btn-primary']) !!}
								</div>
							</div>

						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
