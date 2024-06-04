<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Recebendo dados do formulário
// Recebendo dados do formulário e validando
$nome = $_POST['nm_editora_edi'];
$nmendereco = $_POST['nm_endereco_edi'];
$nrendereco = $_POST['nr_endereco_edi'];
$nrcnpj = $_POST['nr_cnpj_edi'];
$nrtelefone = $_POST['nr_telefone_edi'];
 
include 'conexao.php';
 
//Dados para inserir os dados
$insert = "INSERT INTO tb_editora VALUES (NULL, '$nome', '$nmendereco', '$nrendereco', '$nrcnpj', '$nrtelefone')";
 
//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);
 
if ($query) {
    echo "Inserido com sucesso";
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
 
 
?>
 