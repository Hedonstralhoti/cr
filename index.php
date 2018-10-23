<meta charset="utf-8">
<?php
include 'contato.class.php';

$contato = new Contato();


?>
<h1> Nome </h1>
<a href="adicionar.php">Adicionar NOVO CONTATO</a>
<table border="1" width="500">
	<tr>
		<th>ID</th>
		<th>NOME</th>
	</tr>
	<?php
	$lista = $contato->getAll();
	foreach($lista as $item):

	?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>