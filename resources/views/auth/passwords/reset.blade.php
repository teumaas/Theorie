@extends('layouts.master')

@section('title', 'Wachtwoord opnieuw instellen')

@section('content')
<div class="container">
	<div class="row">				
		<div class="col-sm-24">
			<div class="col-sm-offset-2 col-sm-8 box animated zoomInRight">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Welkom! - @yield('title')</h3>
					</div>
					<div class="panel-body"> 
						<form role="form" method="POST" action="{{ url('/wachtwoord/herstel') }}">

							<input type="hidden" name="token" value="{{ $token }}">

							<div class="col-sm-12">	
								<div class="center-block logo-big"></div>
							</div>

							<div class="col-sm-12">								
								<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
									<div class="input-group">
										<span class="info-green input-group-addon"><i class="icon-mail"></i></span>
										<input id="email" type="text" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}">
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
										<input id="password" type="password" placeholder="Wachtwoord" class="form-control" name="password" value="{{ old('password') }}">
									</div>

									@if ($errors->has('wachtwoord'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>

								<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
									<div class="input-group">
										<span class="info-green input-group-addon"><i class="icon-key"></i></span>
										<input id="password_confirmation" type="password" placeholder="Herhaal wachtwoord" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
									</div>

									@if ($errors->has('wachtwoord'))
									<span class="help-block">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="col-sm-7">										
								<button type="submit" class="btn btn-info">
									<i class="icon-arrows-ccw"></i> Herstel wachtwoord!
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection