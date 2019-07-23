<?php
$arquivo = $_FILES['arquivo'];
if ($_FILES['arquivo']['size'] > 0){
$_UP['pasta'] = 'uploads/';
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
$_UP['extensoes'] = array('pdf', 'doc', 'docx');
$_UP['renomeia'] = false;
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
if ($_FILES['arquivo']['error'] != 0) {die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);exit;}
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {echo "Por favor, envie arquivos com as seguintes extensões: pdf, doc ou docx";exit;}
if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";exit;}
if ($_UP['renomeia'] == true) { $nome_final = md5(time()).'.'.$extensao;} else {$nome_final = md5(time()).'.'.$extensao;}
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) 
{echo "Upload efetuado com sucesso!";echo '<a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';}
else{echo "Não foi possível enviar o arquivo, tente novamente";}   
}
?>

<?
date_default_timezone_set('America/Belem');
$data=date("d/m/Y");
$hora=date("H:i:s");
$oficio=$_POST['oficio'];
$setor=$_POST['setor'];
$assunto=$_POST['assunto'];
try{
include_once "includes/banco.php";
$sql = "INSERT INTO oficios(data,hora,oficio,setor,assunto,anexo) VALUES('$data','$hora','$oficio','$setor','$assunto','$nome_final')";
$stmt = $mysqli->prepare($sql);
$stmt->execute();
header("Location: admin.php?save=sucess");
}
catch(PDOException $e)
{echo $sql . "<br>" . $e->getMessage();}
$conn = null;
?>