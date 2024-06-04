<?php include 'conexao.php'?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-escuro">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-book-open-reader"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="c_cliente.html">Cadastro de Cliente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro_livraria.html">Cadastro Editora</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Relatórios
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" style="color: black;"  href="listar_user.php">Lista de Usuarios</a></li>
                <li><a class="dropdown-item" style="color: black;" href="listar_cliente.php">Lista de Clientes</a></li>
                <li><a class="dropdown-item"style="color: black;"  href="listar_editora.php">Lista de Editoras</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<body>
<div class="container">
    <h2>Lista de Editoras</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">N° Endereço</th>
      <th scope="col">N° Cnpj</th>
      <th scope="col">N° Telefone</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include 'conexao.php';
    $select = "SELECT * FROM tb_editora";
    $query = mysqli_query($conexao,$select);
    while ($result =  mysqli_fetch_array($query)) { 
      ?>

<tr>
      <td><?php echo $result['cd_editora']; ?> </td>
      <td><?php echo $result['nm_editora_edi']; ?> </td>
      <td><?php echo $result['nm_enderec_edi']; ?> </td>
      <td><?php echo $result['nr_endereco_edi']; ?> </td>
      <td><?php echo $result['nr_cnpj_edi']; ?> </td>
      <td><?php echo $result['nr_telefone_edi']; ?> </td>
    </tr>
<?php } ?>
 
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>

