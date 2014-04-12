<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Challenge App</title>
		<link rel="stylesheet" href="stylesheets/app.css" />
		<script src="bower_components/modernizr/modernizr.js"></script>
	</head>
	<body>
		<ul class="side-nav">
			<li><a href="#">Link 1</a></li>
			<li><a href="#">Link 2</a></li>
			<li><a href="#">Link 3</a></li>
			<li><a href="#">Link 4</a></li>
		</ul>
		<div id="content">
			<div><?= $content_for_layout ?></div>
		</div>
	</body>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/foundation/js/foundation.min.js"></script>
	<script src="js/app.js"></script>
</html>