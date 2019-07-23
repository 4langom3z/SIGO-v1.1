<?php
include_once "header.php";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no">

<? 
$id=$_GET[id];

$sql = "SELECT * FROM oficios WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc()
?>

<center>
<form method="post" action="editando.php" enctype="multipart/form-data" style="width:300px;margin-top:150px">    
<input type="hidden" name="id" value="<? echo $id ?>">
<div class="form-check">
<? 
$status = $row[status];
?>    

<input class="form-check-input" type="checkbox" name="status" id="gridRadios1" value="cancelado" <? if('cancelado' == $status){echo"checked";} ?>
>
<label class="form-check-label" for="gridRadios1">
<a class="btn btn-xs btn-pill btn-danger">Cancelar Oficio</a>
</label>
</div>
    
<hr> 
<div class="form-group">
<select class="form-control" id="sel1" name="setor" >
    <option><? echo $row[setor] ?> </option>
    <option>TI - Tecnologia da Informação</option>
    <option>RH - Recursos Humanos</option>
    <option>DP - Departamento Pessoal</option>
    <option>CP - Departamento de Compras</option>
    <option>AX - Almoxarifado</option>
</select>
</div>
<div class="form-group">
<input type="text" class="form-control" name="assunto" placeholder="Assunto" value="<? echo $row[assunto] ?>">
</div>    
    
<div class="form-group">
<input type="file" name="arquivo" id = "arquivo">  
</div>

<a href="admin.php" class="btn btn-success">Voltar</a>
<button type="submit" class="btn btn-primary">Alterar</button>
</form>
</center>


<?php
include_once "footer.php";
?>