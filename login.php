<style>
body{
background-image: url(images/hrpa.png);
background-position: center;
background-size:cover;
background-repeat: no-repeat;
}
</style>
<?php
include_once "header.php";
include_once "includes/login.inc.php";

if(logged_in()) {
    redirect("admin.php");
}
?>
<meta name="viewport" content="width=device-width, user-scalable=no">
<div class="container">
    <?php display_message(); ?>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Login</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu sua senha?</a></div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" method="post" role="form">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email">
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Senha">
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                              <input id="remember" type="checkbox" name="remember" value="1">Lembrar
                            </label>
                        </div>
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-4 controls">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                        </div>
                    </div>
                </form> 


                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            Não possui uma conta? 
                            <a href="register.php">Cadastre-se</a>
                        </div>
                    </div>
                </div>    
            </div>                     
        </div>  
    </div>
</div>

<?php
include_once "footer.php";
?>