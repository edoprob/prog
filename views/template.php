<?php echo "\$_SESSION = ";print_r($_SESSION);echo '<hr/>'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<script src="assets/jquery.min.js"></script>
	<script src="assets/popper.min.js"></script>
	<script src="assets/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12" style="padding: 0;margin: 0;">
				<div class="menu">
					<ul class="menu-nav">
						<li><img src="assets/img/globe.png" style="width:70px;margin-right: 30px;"></li>
						<a href="home"><li>Home</li></a>
						<a href="projects"><li>Projects</li></a>
						<a href="about"><li>About</li></a>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<?php $this->LoadView($viewName, $viewData); ?>

</body>
</html>