@extends('layouts.master')

@section('content')
<div class="col-sm-24">
	<div class="col-sm-offset-2 col-sm-8 box animated zoomInRight">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Welkom! - Inloggen</h3>
			</div>
			<div class="panel-body"> 
				<form role="form" method="POST" action="{{ url('/inloggen') }}">

					{{ csrf_field() }}

					<div class="col-sm-12">	
						<div class="center-block logo-big"></div>
					</div>

					<div class="col-sm-12">

						<div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-user"></i></span>
								<input id="username" type="text" placeholder="Gebruikersnaam" class="form-control" name="username" value="{{ old('username') }}">
							</div>

							@if ($errors->has('username'))
							<span class="help-block">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-key"></i></span>
								<input id="password" type="password" placeholder="Wachtwoord" class="form-control" name="password">
							</div>

							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>

					</div>

					<div class="col-sm-8">
						<div class="checkbox checkbox-spacing">
							<input type="checkbox" id="flat-checkbox-1" checked>
							<label for="flat-checkbox-1">Ingelogd blijven</label>
						</div>

						<button type="submit" class="btn btn-info btn-margin">
							<i class="icon-login"></i>
							Inloggen
						</button>

						<a type="submit" id="submit" name="submit" class="btn btn-info btn-margin" role="button" href="{{ url('/registreren') }}">
							<span class="icon-user-add"></span>
							Registeren
						</a>
						<a type="submit" id="submit" name="submit" class="btn btn-info btn-margin" role="button" href="{{ url('/wachtwoord/herstel') }}">
							<span class="icon-help"></span>
							Wachtwoord vergeten
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
