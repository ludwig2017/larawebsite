<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LaraWebsite</title>
		<link rel="stylesheet" href="css/app.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="css/fonts/font-awesome.min.css">
	</head>
<body>
	@include('inc.navbar')

	<div class="container">
	
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@if(Request::is('/'))
					@include('inc.sidebar')
				@elseif(Request::is('about'))
					@include('inc.sidebar')
				@elseif(Request::is('contact'))
					@include('inc.sidebar')
				@else
					
				@endif
			</div>
		</div>
	</div>
	
	<footer id="footer" class="text-center">
		<p>Copyright &copy; 2017 mDynaSite. All Rights Reserved. Website Design by: Laravel and Bootsrap</p>
		<p style="color: #fff000;">Super Senior Web / App / Software Developer: Ludwig Bethnicer Cagas-Napigkit</p>
	</footer>
</body>
</html>