<?php
//recebendo dados do formulário
//array variável que consegue receber mais de uma informação, armazena em índices
//variável só recebe um valor por vez
 
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$login = $_POST['login'];
$senha = $_POST['senha'];
 
 
include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$setor','$login','$senha')";

//inserindo os dados no banco de dados utilizando a função mysqli

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";
 
 
 
?>