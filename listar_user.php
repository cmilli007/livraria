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
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
 
</head>
<body>
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
                    <li class="nav-item"><a class="nav-link text-light" href="cadastro_editora.html">Cadastrar Editora</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="c_cliente.php">Relatório Cliente</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="cadastro_livraria.php">Relatório Editora</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="listar_user.php">Relatório Usuário</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="index.html">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Setor</th>
      <th scope="col">Login</th>
    </tr>
  </thead>
  <tbody>
    
<?php
$select = "SELECT * FROM tb_user";

$query = mysqli_query($conexao, $select);

while ($result = mysqli_fetch_array($query)) { 
?>

<tr>
      <th scope="row"><td><?php echo $result['id_user']; ?> </td></th>
      <td><?php echo $result['nm_usuario']; ?> </td>
      <td><?php echo $result['nm_setor']; ?> </td>
      <td><?php echo $result['login']; ?> </td>
      <td>  <a href=""><i class="fa-solid fa-pencil"></i></a>  
<a href=""><i class="fa-solid fa-trash"></i></a></td>
    
    </tr>
  
<?php } ?>

    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>