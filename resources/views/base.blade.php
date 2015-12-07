<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPCH - @yield('title') </title>
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand p3" href="#">
					<img src="{{ asset('images/icon_FAMED.png')}}" alt="">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				@if(Auth::guest())
					<ul class="nav navbar-nav navbar-right">
						<li>
							<form method="POST" class="navbar-form navbar-right" action="{{ route('login') }}">
							    {!! csrf_field() !!}
							    <div class="form-group">
							        <input type="text" name="dni" placeholder="@lang('auth.login.title_user')" class="form-control" value="{{ old('dni') }}">
							    </div>
							    <div class="form-group">
							        <input type="password" name="password" placeholder="@lang('auth.login.title_pass')" class="form-control">
							    </div>
							    <button type="submit" class="btn btn-success">@lang('auth.login.boton_login')</button>
							</form>
						</li>
	              		<li><a href="{{ route('register') }}">@lang('auth.login.register')</a></li>
	           		</ul>
				@else
					<ul class="nav navbar-nav navbar-right">
	              		<li><a href="{{ route('logout') }}">@lang('auth.login.logout')</a></li>
	           		</ul>
				@endif
			</div><!--/.navbar-collapse -->
		</div>
	</nav>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	@yield('banner')

	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			@yield('content')
		</div>

		@section('footer')
	</div> <!-- /container -->

	<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>