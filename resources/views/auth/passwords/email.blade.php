@extends('layouts.master')

@section('content')				
<div class="col-sm-24">
	<div class="col-sm-offset-2 col-sm-8 box animated zoomInRight">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Welkom! - Stuur een wachtwoord reset</h3>
			</div>
			<div class="panel-body"> 
				<form role="form" method="POST" action="{{ url('/wachtwoord/email') }}">

					{{ csrf_field() }}

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
					</div>

					<div class="col-sm-7">
						<a type="submit" id="submit" name="submit" class="btn btn-info" role="button" href="{{ url('inloggen') }}">
							<span class="icon-back"></span>
							Terug
						</a>

						<button type="submit" class="btn btn-info">
							<i class="icon-arrows-ccw"></i> Verstuur mail!
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection