<?php
try {
  $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","root123");
} catch(PDOException $e) {
  die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nomeCampus = $_POST['nomeCampus'];
$cepCampus = $_POST['cepCampus'];

try {
  $sql = "INSERT INTO campus (nomeCampus, CEP) VALUES ('$nomeCampus', '$cepCampus')";
  $conexao->exec($sql);
  echo "Campus adicionado com sucesso!";
} catch(PDOException $e) {
  die("Ocorreu um erro " . $e->getMessage());
}

header('Location: CadastroDeCampus.php');
?>