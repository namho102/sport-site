<html>
	<head>
		<title>Super League</title>
		
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="/css/style.css"/>
		
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">SuperLeauge</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						
						<button type="submit" class="btn btn-default search"><span class="oi oi-magnifying-glass"></span></button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/">Home</a></li>
						<li><a href="/news">News</a></li>
						<li><a href="/matches">Scores/Fixtures</a></li>
						<li><a href="/standing">Standing</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
			
		@yield('content')
	
	</body>
</html>