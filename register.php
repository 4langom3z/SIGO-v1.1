<?php
include_once "includes/init.php";
include_once "includes/register.inc.php";
?>

<div class="row">
<div class="col-md-12">
<?php display_message(); ?>
</div>
</div>

<html lang="pt">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
    
<style>
header{
padding: 10px;
position:absolute;
color: #fff;
font-size: 25px;
}
a:link
{
text-decoration: none;    
}
</style>

<header><a href="login.php" style="color:#fff">SIGO</a></header>
    
<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680"  style="margin-top:-100px">
<div class="card card-4">
<div class="card-body">
<h2 class="title">Cadastre-se</h2>

                    
<form role="form" method="post" name="registration_form">
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label class="label">Nome</label>    
<input type="text" name="first_name" id="first_name" class="input--style-4" tabindex="1" required>
</div>
</div>
<div class="col-2">
<div class="input-group"><label class="label">Sobrenome</label>
<input type="text" name="last_name" id="Sobrenome" class="input--style-4"  tabindex="2" required>    
</div>
</div>
</div>    
<div class="row row-space">
<div class="col-2">
<div class="col-3">
<div class="input-group"><label class="label">Como deseja ser chamado?</label>
<input type="text" name="display_name" id="display_name" class="input--style-4"  tabindex="3" required>   
</div>
</div>
</div>
<div class="col-2">
<div class="input-group">
<label class="label">Email</label>
<input type="email" name="email" id="email" class="input--style-4"  tabindex="4" required>
</div>
</div>    
</div>
    
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label class="label">Senha</label>
<input type="password" name="password" id="password" class="input--style-4"  tabindex="5" required>    
</div>
</div>
<div class="col-2">
<div class="input-group">
<label class="label">Confirmar senha</label>
<input type="password" name="password" id="password" class="input--style-4"  tabindex="5" required>    
</div>
</div>
</div>    
    
<div class="row row-space">
<div class="col-2">
    <br>
<label class="radio-container m-r-45"> Concordo
<input type="checkbox" required>
<span class="checkmark"></span>
</label>    
</div>
<div class="col-2">
Ao clicar em <b>Cadastrar</b>, você <b>Concorda</b> com os <a href="#" data-toggle="modal" data-target="#t_and_c_m">Termos e Condições</a> do site, incluindo os Cookies que serão utilizados.
</div>
</div>
    
<div class="p-t-15">
<button class="btn btn--radius-2 btn--blue" type="submit">Cadastrar</button>
<a href="login.php"><button class="btn btn--radius-2 btn--green" type="button">Login</button></a>
</div>
</form>
</div>
</div>
</div>
</div>
    

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>
<script src="js/global.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>



<script>
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>

