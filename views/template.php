
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

<!-- Info of core -->

	<?php global $_info; ?>	

	<div class="container"><br/>
		<div class="dropdown info-core">
			<button style="min-width:150px;" type="button" class="btn btn-light btn-sm" data-toggle="dropdown">Info of core</button>
			<div class="dropdown-menu">
				<span><?php echo $_info['version']; ?></span><br/>
				<span><?php echo $_info['bootstrap']; ?></span><br/>
				<span><?php echo $_info['database']; ?></span><hr/>

				<span>$_SESSION = <?php print_r($_SESSION); ?></span><br/>
				<span>URL = <?php print_r($_info['url']); ?></span><hr/>

				<span>Controller: <?php echo $_info['controller']; ?></span><br/>
				<span>Action: <?php echo $_info['action']; ?></span><br/>
				<span>Params: <?php print_r($_info['params']); ?></span>
			</div>
		</div><br/><br/>
	</div>

<!-- Nav menu -->

	<div class="container-fluid" style="min-width:360px;margin:0;background: #77BC8F;">
		<div class="row">
			<div class="col" style="max-width:130px;">
				<img class="logo" src="<?php echo BASE_URL; ?>assets/img/globe.png">
			</div>
			<div class="col" style="padding-right:0;">
				<ul class="menu-nav" style="padding:0;">
					<a href="<?php echo BASE_URL; ?>home"><li>Home</li></a>
					<a href="<?php echo BASE_URL; ?>projects"><li>Projetos</li></a>
					<a href="<?php echo BASE_URL; ?>about"><li>Sobre</li></a>
				</ul>
			</div>
		</div>
	</div>
	<br/>

<!-- Content -->

	<?php $this->LoadView($viewName, $viewData); ?>

</body>
</html>