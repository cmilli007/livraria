<?php
//recebendo dados do formulário
//array variável que consegue receber mais de uma informação, armazena em índices
//variável só recebe um valor por vez
 
$cliente = $_POST['cliente'];
$email = $_POST['email'];
$endereço = $_POST['endereço'];
$nr_endereço = $_POST['nr_endereço'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$Telefone = $_POST['Telefone'];
 
 
include 'cnx.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_cliente VALUES (NULL,'$cliente','$email','$endereço','$nr_endereço','$cpf' '$cnpj', '$Telefone')";

//inserindo os dados no banco de dados utilizando a função mysqli

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";
 
 
 
?>