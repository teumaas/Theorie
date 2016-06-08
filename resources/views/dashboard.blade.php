@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-24">
			<div class="col-sm-offset-2 col-sm-8 box animated fadeIn">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Welkom! - Dashboard!</h3>
					</div>
					<div class="panel-body"> 
						<form id="div1"method="post">
							<div class="col-sm-12">
								<div class="col-sm-6">
									<div class="thumbnail thumbnail-noborder">
										<img class="thumbnail-imgs undrag" src="{!! asset('assets/images/icons/cogwheel.svg') !!}">
										<div class="caption text-center">
											<h3 class="undrag">Vragen oefenen</h3>
										</div>																	

										<select name="selecter_basic" class="caption selecter_1 info-green">
											<option class="undrag" value="1">Gevaarherkenning</option>
											<option class="undrag" value="2">Wet- en regelkennis</option>
											<option class="undrag" value="3">Inzicht</option>
										</select>

										<div class="text-center btn-spacing">
											<a class="btn btn-info btn-block" role="button" href="#">
												Start
												<span class="icon-right-open"></span>
											</a>
										</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="thumbnail thumbnail-noborder">
										<img class="thumbnail-imgs undrag" src="{!! asset('assets/images/icons/documentation.svg') !!}">
										<div class="caption text-center">
											<h3 class="undrag">Examens</h3>
										</div>

										<select name="selecter_basic" class="undrag caption selecter_1 info-green">
											<option value="1">Examen 1</option>
											<option value="2">Examen 2</option>
											<option value="3">Examen 3</option>
											<option value="4">Examen 4</option>
											<option value="5">Examen 5</option>
											<option value="6">Examen 6</option>
											<option value="7">Examen 7</option>
											<option value="8">Examen 8</option>
											<option value="9">Examen 9</option>
											<option value="10">Examen 10</option>
											<option value="11">Examen 11</option>
											<option value="12">Examen 12</option>
										</select>

										<div class="text-center btn-spacing">
											<a class="btn btn-info btn-block" role="button" href="#">
												Start
												<span class="icon-right-open"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
