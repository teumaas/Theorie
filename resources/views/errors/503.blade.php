@extends('layouts.master')

@section('title', 'We will be back soon!')

@section('content')
<div class="col-sm-24">
	<div class="col-sm-offset-2 col-sm-8 box animated zoomInRight">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>
			<div class="panel-body"> 
				<h1 class="text-center">503!<h1>
			</div>
		</div>
	</div>
</div>
@endsection
