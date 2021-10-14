
<?php
session_start();
require 'config.php';

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    
} else {
    header("Location: login.php");
}

?>
<?php
require 'config.php';
require 'dao/UsuarioDAOMysql.php';

$usuarioDao = new UsuarioDAOMysql($pdo);
$lista = $usuarioDao->findAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Th</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="estilo.css">

    <style>
        .nav {
            background-image: linear-gradient(rgb(179, 77, 77), rgb(31, 16, 167))
            
        }

        .navbar  {
            background-image: linear-gradient(rgb(199, 86, 86), rgb(30, 18, 143))
            
        }

        .nav {
            color:ghostwhite
        }

        
    </style>
</head>
<body class="container-fluid">
    
    <header class="nav">
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
              <ul class="navbar-nav">
                
               <li class="nav-item">
                <a class="a1" href="adicionar.php" style="border:2px solid red; border-radius: 5px; color:white;" >ADICIONAR USUÁRIO</a>
                </li>
                
               
    
              </ul>
              
              
            
            
          </nav>
          <a href="sair.php" style="border:2px solid red; border-radius: 5px; color:white; height:30px; margin-top: 5px; " >SAIR</a>
    </header>


    <div>
        
    
    

<table border="1" width="100%"  style="color:white;">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php
    foreach($lista as $usuario): ?>
    <tr style="color:white;">
        <td> <?=$usuario->getId();?></td>
        <td><?=$usuario->getNome();?></td>
        <td><?=$usuario->getEmail();?></td>
        <td>
            <a href="editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
            <a href="excluir.php?id=<?=$usuario->getId();?> "onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    </div>
    

   
      
</body>
</html>