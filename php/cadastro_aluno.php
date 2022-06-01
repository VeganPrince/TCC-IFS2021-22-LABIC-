

<?php

class Aluno{

 private $nome_aluno;
 
}
$servername = "localhost";
$username = "root";
$password = "A2522a//";
$dbname = "labic";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO aluno (nomealuno, email_aluno, cpf_aluno, cel_aluno, nasc_aluno, senha_aluno, estado_aluno, cidade_aluno, bairro_aluno, cep_aluno, rua_aluno, numcasa_aluno, banco_aluno, tipoconta_aluno, agencia_aluno, conta_aluno)
  VALUES ()";
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
