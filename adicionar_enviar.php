<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['nome'])){
	$nome = $_POST['nome'];
	$contato->adicionar($nome);
	header("Location: index.php");
}
?>