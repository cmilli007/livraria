<?php
//Recebendo dados do formulario
$id_user = $_POST ['id']
$nm_usuario = $_POST['nm_usuario'];
$nm_setor = $_POST['setor'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//Inserindo dados no banco

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_user VALUES (NULL,'$nm_usuario','$nm_setor','$login','$senha')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

echo "Inserido com Sucesso";

?>