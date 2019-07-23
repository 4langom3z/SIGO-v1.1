<?
$id=$_POST['id'];
$status=$_POST['status'];
$setor=$_POST['nome'];
$assunto=$_POST['assunto'];

date_default_timezone_set('America/Belem');
$data=date("d/m/Y");
$hora=date("H:i:s");
$nome=$_POST['setor'];

try {
include_once "includes/banco.php";        
$sql = "UPDATE setores SET nome='$nome' WHERE id=$id";
$stmt = $mysqli->prepare($sql);
$stmt->execute();
header("Location: setores.php?save=sucess");}
catch(PDOException $e)
{echo $sql . "<br>" . $e->getMessage();}
$conn = null;
?>