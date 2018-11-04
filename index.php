<link rel="stylesheet" type="text/css" href="Style.css">
<meta charset="utf-8">
<?php
include 'contato.class.php';

$contato = new Contato();

?>

<h1>Cadastro de Pessoa</h1>

<table class="tabela" border="1" width="500">
	<tr>
		<th>ID</th>
		<th>NOME</th>
	</tr>
	<?php
	$lista = $contato->getAll();
	foreach($lista as $item):

	?>
		<tr>
			<td><?php echo $item['ID']; ?></td>
			<td><?php echo $item['NOME']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<div class="adicionar">
	<a href="adicionar.php">ADICIONAR PESSOA</a>
</div>