@extends('layouts.master')

@section('title', 'Wachtwoord wijzigen')

@section('content')
<div class="col-sm-24">
	<div class="col-sm-offset-2 col-sm-8 box animated zoomInRight">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>
			<div class="panel-body"> 
				<form role="form" method="POST" action="{{ url('/wachtwoord/change') }}">
					{{ csrf_field() }}

					<div class="col-sm-12">
												
						<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-key"></i></span>
								<input id="password" type="password" placeholder="Huidig wachtwoord" class="form-control" name="password" value="{{ old('password') }}">
							</div>

							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="input-group">
								<span class="info-green input-group-addon"><i class="icon-key"></i></span>
								<input id="password" type="password" placeholder="Nieuw wachtwoord" class="form-control" name="password" value="{{ old('password') }}">
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
								<input id="password_confirmation" type="password" placeholder="Herhaal nieuw wachtwoord" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
							</div>

							@if ($errors->has('password_confirmation'))
							<span class="help-block">
								<strong>{{ $errors->first('password_confirmation') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="col-sm-7">
						<a type="submit" id="submit" name="submit" class="btn btn-info" role="button" href="{{ url('/')}}">
							<span class="icon-back"></span>
							Terug
						</a>

						<button type="submit" class="btn btn-info">								
							<i class="icon-pencil"></i>
							Opslaan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection