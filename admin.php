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
<?
if($_GET['save']=="sucess"){echo"<div class='alert alert-success' role='alert'>Salvo!</div>";}
?>
<h3 class="text-center"> Ofícios </h3>
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
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Cadastrar ofício</button></center>
<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">  
<div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
<div class="modal-body">
<form method="post" action="recebe_upload.php" enctype="multipart/form-data">    
<div class="form-group">
<select class="form-control" id="sel1" name="setor" required>
    <option value="" disabled selected>Selecione um Setor </option>
    <option>TI - Tecnologia da Informação</option>
    <option>RH - Recursos Humanos</option>
    <option>DP - Departamento Pessoal</option>
    <option>CP - Departamento de Compras</option>
    <option>AX - Almoxarifado</option>
</select>
</div>
<div class="form-group">
<input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
</div>
<input type="file" name="arquivo" id = "arquivo">    
</div>
<div class="modal-footer">
<input type="submit" class="btn btn-success" value="Salvar">    
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
    
    
if($pagina == '1'){$pagina = '10';}
else if($pagina == '2'){$pagina = '10';}
    
    
$sql_code = "select * from oficios ORDER BY id DESC LIMIT $pagina, $itens_por_pagina";
$execute = $mysqli->query($sql_code) or die($mysqli->error);
$produto = $execute->fetch_assoc();
$num = $execute->num_rows;
$num_total = $mysqli->query("select * from oficios")->num_rows;
$num_paginas = ceil($num_total/$itens_por_pagina);
?>

<?php if($num > 0){ ?>
<input class="form-control" id="myInput" type="text" placeholder="Buscar..">  
<table class="table table-hover">
    
<thead>
<tr>
<th scope="col">Ofício</th> <th scope="col">Data</th><th scope="col">Hora</th><th scope="col">Setor</th><th scope="col">Assunto</th><th scope="col">Arquivo</th><th scope="col">Editar</th>
</tr>
</thead>
    
<tbody id="myTable">
<?php do{ ?>
    
<tr <? if($produto[status] == 'cancelado'){echo "style='background-color:lightgray'";} ?> >
<th scope='row'><? echo $produto[id] ?>/2019</th><td><? echo $produto[data]; ?></td><td><? echo $produto[hora]?></td><td><? echo $produto[setor] ?></td><td><? echo $produto[assunto]?></td>
<? if($produto[anexo] <> '' and $produto[status] <> 'cancelado'){echo"<td><a href='uploads/$produto[anexo]' target='_blank'><button type='button' class='btn btn-xs btn-pill btn-success'>Salvo</button></a></td>";}
if($produto[anexo] == '' and $produto[status] <> 'cancelado'){echo"<td><button type='button' class='btn btn-xs btn-pill btn-warning'>Pendente</button></td>";}
if($produto[status] == 'cancelado' and $produto[anexo] == '' or $produto[status] == 'cancelado' and $produto[anexo] <> ''){echo"<td><button type='button' class='btn btn-xs btn-pill btn-secondary'>Cancelado</button></td>
</td>";}    
?>
<td><a href='editar.php?id=<? echo $produto[id]?>'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>
</tr>
<?php } while($produto = $execute->fetch_assoc()); ?>
</tbody>
</table>

<nav>
<ul class="pagination">
<li><a href="admin.php?pagina=0" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
<?php 
for($i=0;$i<$num_paginas;$i++){
$estilo = "";
if($pagina == $i)
$estilo = "class=\"active\"";
?>
<li <?php echo $estilo; ?> ><a href="admin.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
<?php } ?>
<li><a href="admin.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
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