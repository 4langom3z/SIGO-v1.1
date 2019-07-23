<?php
include_once "includes/banco.php";
include_once "header.php";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<div class="jumbotron">    
<? if($_GET['save']=="sucess"){echo"<div class='alert alert-success' role='alert'>Salvo!</div>";}?>
<h3 class="text-center"> Setores </h3>
</div>

<?
$cancelado = "<button type='button' class='btn btn-xs btn-pill btn-secondary'>Cancelado</button>";
$salvo = "<button type='button' class='btn btn-xs btn-pill btn-success'>Ok</button>";
$pendente = "<button type='button' class='btn btn-xs btn-pill btn-warning'>Pendente</button>";
//<button type="button" class="btn btn-xs btn-pill btn-primary">Primary</button>
//<button type="button" class="btn btn-xs btn-pill btn-info">Info</button>
//<button type="button" class="btn btn-xs btn-pill btn-danger">Danger</button>
//<button type="button" class="btn btn-xs btn-pill btn-link">Link</button>
?>

<div class="container">
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Cadastrar setor</button></center>
<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">  
<div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
<div class="modal-body">
<form method="post" action="cadastra_setor.php" enctype="multipart/form-data">    
<div class="form-group">
<input type="text" class="form-control" id="nome" name="nome" placeholder="Setor">
</div>
</div>
<div class="modal-footer">
<input type="submit" class="btn btn-success">    
</form>
<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
</div>        
</div>
</div>
</div>  
</div>

<br>

<div class="container mt-3">
      
<?php
$itens_por_pagina = 10;
$pagina = intval($_GET['pagina']);
$sql_code = "select * from setores LIMIT $pagina, $itens_por_pagina";
$execute = $mysqli->query($sql_code) or die($mysqli->error);
$produto = $execute->fetch_assoc();
$num = $execute->num_rows;
$num_total = $mysqli->query("select * from setores")->num_rows;
$num_paginas = ceil($num_total/$itens_por_pagina)+1;
?>

<?php if($num > 0){ ?>
<input class="form-control" id="myInput" type="text" placeholder="Buscar..">  
<table class="table table-hover">
    
<thead><tr><th scope="col">ID</th> <th scope="col">Setor</th></tr></thead>
    
<tbody id="myTable">
<?php do{ ?>    
<tr <? if($produto[status] == 'cancelado'){echo "style='background-color:lightgray'";} ?> >
<th scope='row'><? echo $produto[id] ?></th><td><? echo $produto[nome]; ?></td>
<td><a href='editar_setor.php?id=<? echo $produto[id]?>'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>
</tr>
<?php } while($produto = $execute->fetch_assoc()); ?>
</tbody>
</table>

<nav>
<ul class="pagination">
<li><a href="setores.php?pagina=0" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
<?php 
for($i=0;$i<$num_paginas;$i++){
$estilo = "";
if($pagina == $i)
$estilo = "class=\"active\"";
?>
<li <?php echo $estilo; ?> ><a href="setores.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
<?php } ?>
<li><a href="setores.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
</ul>
</nav>
<?php } ?>
<script>
$(document).ready(function(){
$("#myInput").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#myTable tr").filter(function() {$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)});
});
});
</script>
<?php include_once "footer.php"; ?>    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>