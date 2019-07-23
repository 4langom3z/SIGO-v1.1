<?php
include_once "includes/banco.php";

$nome = $_POST['nome'];
$sql = "INSERT INTO setores (nome) VALUES ('$nome')";
if ($mysqli->query($sql) === TRUE) {echo "New record created successfully";} 
else {echo "Error: " . $sql . "<br>" . $mysqli->error;}
$mysqli->close();
header("Location: setores.php?save=sucess");    
?>