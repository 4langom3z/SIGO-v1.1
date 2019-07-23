<?php
include_once "header.php";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no">

<? 
$id=$_GET[id];

$sql = "SELECT * FROM setores WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc()
?>

<center>
<form method="post" action="editando_setor.php" enctype="multipart/form-data" style="width:300px;margin-top:20%">    
<input type="hidden" name="id" value="<? echo $id ?>">    
<div class="form-group">
<input type="text" class="form-control" name="setor" placeholder="Setor" value="<? echo $row[nome] ?>">
</div>    
<a href="setores.php" class="btn btn-success">Voltar</a>
<button type="submit" class="btn btn-primary">Alterar</button>
</form>
</center>


<?php
include_once "footer.php";
?>