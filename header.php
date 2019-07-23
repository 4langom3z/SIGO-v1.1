<?php
include_once "includes/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="images/icons/sigo.png" rel="icon" type="image/x-icon" />

	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">SIGO</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
                        
<!--					<li><a href="index.php">Home</a></li> -->						
                        
						<?php if(!logged_in()) : ?>
							<li><a href="login.php">Login</a></li>
						<?php else : ?>
							<li><a href="admin.php">Ofícios</a></li>
                        	<li><a href="setores.php">Setores</a></li>
							<li><a href="logout.php">Sair</a></li>
						<?php endif; ?>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>