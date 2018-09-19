<?php echo "\$_SESSION = ";print_r($_SESSION);echo '<hr/>'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>EdoProg</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/bootstrap.min.css">
	<script src="<?php echo BASE_URL; ?>assets/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/popper.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12" style="padding: 0;margin: 0;">
				<div class="menu">
					<ul class="menu-nav">
						<li><img src="<?php echo BASE_URL; ?>assets/img/globe.png" style="width:70px;margin-right: 30px;"></li>
						<a href="<?php echo BASE_URL; ?>home"><li>Home</li></a>
						<a href="<?php echo BASE_URL; ?>projects"><li>Projects</li></a>
						<a href="<?php echo BASE_URL; ?>about"><li>About</li></a>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<br/>

	<?php $this->LoadView($viewName, $viewData); ?>

</body>
</html>