<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Webapp Consumo Hogar</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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
			<a class="navbar-brand" href="#">Project name</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container-fluid" style="margin-top: 50px">

	<div class="row">

		<div class="col-fixed-80">
			<button class="btn btn-block btn-success">HOME</button>
			<br>
			<button class="btn btn-block btn-success">FACTURA</button>
			<br>
			<button class="btn btn-block btn-success">GREEN</button>
			<br>
		</div>

		<div id='content-load' class="col-xs-12 col-offset-80">
			<p>Col 2</p>
		</div>


	</div>

</div><!-- /.container -->


<style type="text/css">

	.col-fixed-80 {
		margin-top: 15px;
		margin-left: 15px;
		text-align: center;
		width: 80px;
		position: fixed;
		height: 100%;
	}

	.col-offset-80 {
		padding-left: 110px; /* 80 + 15 padding-left + 15 padding-right*/
	}

</style>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

	$('document').ready(function () {
		$('#content-load').load("main.php");
	})

</script>
</body>
</html>
