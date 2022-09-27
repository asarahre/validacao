<?php
include "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha1 = $_POST["senha1"];

try {
  $pdo->prepare("INSERT INTO usuario(nome, email, senha) values ('{$nome}', '{$email}', '{$senha1}')")
    ->execute();
  echo "true";
} catch (PDOException $e) {
  echo $e->getMessage();
}