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

	<?php $this->LoadView($viewName, $viewData); ?>

</body>
</html>