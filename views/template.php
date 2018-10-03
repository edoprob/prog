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
	<div class="container-fluid" style="margin:0;background: #77BC8F;">
		<div class="row">
			<div class="col" style="max-width:130px;">
				<img class="logo" src="<?php echo BASE_URL; ?>assets/img/globe.png">
			</div>
			<div class="col" style="padding-right:0;">
				<ul class="menu-nav" style="padding:0;">
					<a href="<?php echo BASE_URL; ?>home"><li>Home</li></a>
					<a href="<?php echo BASE_URL; ?>projects"><li>Projects</li></a>
					<a href="<?php echo BASE_URL; ?>about"><li>About</li></a>
				</ul>
			</div>
		</div>
	</div>
	<br/>

	<?php $this->LoadView($viewName, $viewData); ?>

</body>
</html>