<?php
//Recebendo dados do formulario

$nome = $_POST['login'];
$senha = $_POST['senha'];

//incluindo arquivo de conexão
include 'conexao.php';

//selecionar os dados no banco de dados
$select = "SELECT * FROM tb_user WHERE login = '$nm_usuario'";

$query = mysqli_query($conexao,$select);

$result =  mysqli_fetch_array($query);

//Dados do banco armazenado na variavel
$name_banco = $result['login'];
$senha_banco =  $result['senha'];

//Comparanção para acessar o sistema
if ($nome == $name_banco  &&  $senha == $senha_banco) {
   
    header('location: c_cliente.html');

 }else{

    echo "<script>alert('Usuário Invalido'); history.back();</script>";

 }
?>

