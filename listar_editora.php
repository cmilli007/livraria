<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <!--Link CSS do BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!--Link CSS do Meu CSS-->
    <link rel="stylesheet" href="style.css">
      <!--Link CSS do Font Awesome para Icones-->
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
    
  </head>
<body class="body2">
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
            <a class="nav-link" href="C_cliente.html">Cadastro de Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_livraria_html">Cadastro Editora</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Relatórios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" style="color: black;"  href="listar_user.php">Lista de Usuarios</a></li>
              <li><a class="dropdown-item" style="color: black;"listar_cliente.php">Lista de Clientes</a></li>
              <li><a class="dropdown-item"style="color: black;"  href="listar_editora.php">Lista de Editoras</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">

    <h2>Listar usuarios</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Setor</th>
      <th scope="col">Login</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'conexao.php';
    $select = "SELECT * FROM tb_user";
    $query = mysqli_query($conexao,$select);
    while ($result =  mysqli_fetch_array($query)) { ?>
<tr>
      <td scope="row"><?php echo $result['id_user']; ?></td>
      <td> <?php echo $result['nm_user']; ?></td>
      <td><?php echo $result['setor']; ?></td>
      <td><?php echo $result['login']; ?></td>
    </tr>

<?php } ?>
    
 </tbody>
</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>