<?php
include "conexao.php";

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];

try {
  $pdo->prepare("INSERT INTO fornecedor(nome, cnpj) values ('{$nome}', '{$cnpj}')")
    ->execute();
  echo "true";
} catch (PDOException $e) {
  echo $e->getMessage();
}