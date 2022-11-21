<?php
include "login_verify.php";
?>

<!DOCTYPE html>
<html lang="pt-br"> 
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Coisas Emprestadas</title>
  </head>
  
  <body>
    <form method="post" action="">
      <header>
        <h2>Página Principal</h2>
        <h4><?php echo "Olá " . $_SESSION['user'];?></h4>
      </header>
      
      <!-- Side navigation -->
      <div class="sidenav">
        <nav>
          <a href="lend.php">Registrar um novo empréstimo</a>
          <a href="cadastro_itens.php">Cadastro de Itens</a>
          <a href="dados_usuario.php">Meus dados</a>
          <a href="logout.php">Logout</a> 
        </nav>
      </div>
      <section>

          <!-- Page content -->
          <div class="main">
            <table>
            Tabela com a lista de itens emprestados...
          </table>

      </section>
    
  </body>
</html>