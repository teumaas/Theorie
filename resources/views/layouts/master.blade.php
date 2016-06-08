<!DOCTYPE html>
<html>
    <head>
				
		@include('layouts.meta')
	
        <title>Theorie</title>
		
		@include('layouts.css')
		
    </head>
	
    <body>
		@if (Auth::user())
		<nav class="navbar navbar-default animated fadeIn" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-3" data-toggle="collapse" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand logo" href="{{ url('/') }}"></a>
				</div>
				<div id="bs-example-navbar-collapse-3" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<span class="icon-user"></span> Welkom, {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}!
								<b class="caret"></b>
							</a>
							
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#">Statistieken</a>
								</li>
						
								<li>
									<a href="{{ url('/wachtwoord/veranderen') }}">Verander wachtwoord</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a class="icon-logout" href="{{ url('/uitloggen') }}">Uitloggen</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		@endif
		
		<div class="container">
            <div class="row">
				@yield('content')
			</div>
        </div>
		
		@include('layouts.footer')
		
		@include('layouts.scripts')
		
	</body>
</html>