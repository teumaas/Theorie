@extends('layouts.master')

@section('content')
				<div class="col-sm-24">
					<div class="col-sm-offset-2 col-sm-8 box animated zoomInRight">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Welkom! - Wachtwoord vergeten</h3>
							</div>
							<div class="panel-body"> 
								<form id="div1"method="post">
								
									<div class="col-sm-12">	
										<div class="center-block logo-big"></div>
									</div>
								
									<div class="col-sm-12">
										<div class="form-group">
											<div class="input-group"><span class="info-green input-group-addon"><i class="icon-mail"></i></span>
													<input type="text" name="email" placeholder="E-mail" id="email" class="form-control"/>
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<a class="btn btn-info" role="button" href="{{ url('/') }}">
											<span class="icon-back"></span>
											Terug
										</a>
										
										<a type="submit" id="submit" name="submit" class="btn btn-info" role="button" href="#">
											<span class="icon-arrows-ccw"></span>
											Reset!
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
@endsection