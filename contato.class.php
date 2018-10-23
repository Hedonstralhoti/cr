<meta charset="utf-8">
<?php
class Contato {

	private $pdo;

	public function __construct() {

		$this->pdo = new PDO("mysql:dbname=cadastro;localhost","root", "");
	}

	public function adicionar($nome){
		$sql = "INSERT INTO pessoa (nome) VALUES (:nome)";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql-> execute();

	}

	public function getAll() {
		$sql = "SELECT * FROM pessoa";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0){
			return $sql->fetchAll();
		} else {
			return array();
		}
	}
}