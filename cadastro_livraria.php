<?php include 'conexao.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
 
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <h1 class="navbar-brand text-light">Livraria</h1>
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="menu" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav nav-menu ">
                    <li class="nav-item"><a class="nav-link text-light" href="c_cliente.html" activate>Cadastrar Cliente</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="cadastro_livraria.html">Cadastrar Editora</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="listar_cliente.php">Relatório Cliente</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="cadastro_livraia.php">Relatório Editora</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="listar_user.php">Relatório Usuário</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="index.html">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container tag pt-5">
    <h1 class="text-light mt-5">Lista de Editoras</h1>
    <h4 class="text-light mb-5 mt-3">Lista de todas as editoras que fazem parceria com a nossa livraria</h4>
  <table class="table tag table-dark mt-3">
    <thead class="">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Editora</th>
        <th scope="col">Endereço</th>
        <th scope="col">Número do Endereço</th>
        <th scope="col">Bairro</th>
        <th scope="col">Telefone</th>
        <th scope="col">Gerente</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $select = "SELECT * from tb_editora";
    $query = mysqli_query($conexao,$select);
    while ($result = mysqli_fetch_array($query)) {;
    ?>
      <tr>
        <th scope="row"> <?php echo $result['cd_editora']; ?> </th>
        <td> <?php echo $result['nm_editora']; ?> </td>
        <td> <?php echo $result['nm_endereco']; ?> </td>
        <td> <?php echo $result['nr_endereco']; ?> </td>
        <td> <?php echo $result['nm_bairro']; ?> </td>
        <td> <?php echo $result['nr_telefone']; ?> </td>
        <td> <?php echo $result['nm_gerente']; ?> </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>

