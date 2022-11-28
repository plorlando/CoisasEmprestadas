<!DOCTYPE html>
<html lang="pt-br"> 
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Coisas Emprestadas</title>
  </head>
  <body>
    <div class="topnav">
        <nav>
            <a href="main.php">Início</a>
            <a href="lend.php">Empréstimo</a>
            <a href="return.php">Devolução</a>
            <a href="itens.php">Itens</a>
            <div class="dropdown">
              <button class="dropbtn" onclick="myFunction()">Usuários <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content" id="myDropdown">
                <a href="users.php">Lista de Usuários</a>
                <a href="users_new.php">Novo Usuário</a>
              </div>    
            </div>
            <div class="topnav-right">
              <a href="logout.php">Logout</a> 
            </div>
        </nav>
    </div>