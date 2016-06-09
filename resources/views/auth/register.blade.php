@extends('layouts.master')

@section('title', 'Registeren')

@section('content')
<div class="col-sm-24">
	<div class="col-sm-offset-2 col-sm-8 box animated zoomInRight">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Welkom! - @yield('title')</h3>
			</div>
			<div class="panel-body"> 
				<form role="form" method="POST" action="{{ url('/registreren') }}">
					{{ csrf_field() }}

					<div class="col-sm-12">	
						<div class="center-block logo-big"></div>
					</div>

					<div class="col-sm-12">																				
						<div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-brush"></i></span>
								<input id="firstname" type="text" placeholder="Voornaam" class="form-control" name="firstname" value="{{ old('firstname') }}" autocomplete="off">
							</div>

							@if ($errors->has('username'))
							<span class="help-block">
								<strong>{{ $errors->first('firstname') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-clipboard"></i></span>
								<input id="lastname" type="text" placeholder="Achternaam" class="form-control" name="lastname" value="{{ old('lastname') }}" autocomplete="off">
							</div>

							@if ($errors->has('lastname'))
							<span class="help-block">
								<strong>{{ $errors->first('lastname') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-user"></i></span>
								<input id="username" type="text" placeholder="Gebruikersnaam" class="form-control" name="username" value="{{ old('username') }}" autocomplete="off">
							</div>

							@if ($errors->has('lastname'))
							<span class="help-block">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-mail"></i></span>
								<input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" autocomplete="off">
							</div>

							@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-key"></i></span>
								<input id="password" type="password" placeholder="Wachtwoord" class="form-control" name="password" value="{{ old('password') }}" autocomplete="off">
							</div>

							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-key"></i></span>
								<input id="password_confirmation" type="password" placeholder="Herhaal wachtwoord" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="off">
							</div>

							@if ($errors->has('password_confirmation'))
							<span class="help-block">
								<strong>{{ $errors->first('password_confirmation') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="col-sm-7">
						<a type="submit" id="submit" name="submit" class="btn btn-info" role="button" href="{{ url('/inloggen') }}">
							<span class="icon-back"></span>
							Terug
						</a>

						<button type="submit" class="btn btn-info">								
							<i class="icon-user-add"></i>
							Registreren
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection


