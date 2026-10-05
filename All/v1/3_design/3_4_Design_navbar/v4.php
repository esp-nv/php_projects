<!DOCTYPE html>
<html>

<head>
	<title>Bootstrap Navbar</title>
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/
bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>

</head>

<body>
	<nav class="navbar navbar-expand-md 
				bg-primary navbar-dark">
		<div class="container">
			<h1>
				<a href="#" class="navbar-brand">
					Bootstrap Navbar
				</a>
			</h1>
			<button class="navbar-toggler"
					data-toggle="collapse"
					data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav ml-auto text-center ">
					<li class="nav-item">
						<a class="nav-link active" href="#"> Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> Contact Us </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> About </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> Topics </a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</body>

</html>
