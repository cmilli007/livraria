<?php
//recebendo dados do formulário
//array variável que consegue receber mais de uma informação, armazena em índices
//variável só recebe um valor por vez
 
$cliente = $_POST['cliente'];
$endereço = $_POST['endereço'];
$nr_endereço = $_POST['nr_endereço'];
$nr_cpf = $_POST['cpf'];
$nr_cnpj = $_POST['cnpj'];
$nr_telefone = $_POST['Telefone'];
 
 
include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_cliente VALUES (NULL,'$cliente','$endereço','$nr_endereço','$nr_cpf' '$nr_cnpj', '$nr_telefone')";


?>