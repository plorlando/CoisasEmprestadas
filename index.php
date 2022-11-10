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
        <h1>INDEX</h1>
      </header>
      
      <!-- Side navigation -->
      <div class="sidenav">
        <nav>
          <a href="emprestimo.php">Registrar um novo empréstimo</a>
          <a href="cadastro_itens.php">Cadastro de Itens</a>
          <a href="dados_usuario.php">Meus dados</a>
          <a href="login.php">Logout</a> 
        </nav>
      </div>
      <section>

          <!-- Page content -->
          <div class="main">
            <table>
            Tabela com a lista de itens emprestados...
          </table>

      </section>
    <?php echo '<p>PHP CODE</p>'; 
    include 'connection.php';
    if($_con === FALSE) {
      echo "Não foi possível conectar à base de dados" . mysql_error();
          exit;
      }else{
          echo "Conexão bem sucedida";
      }


    ?> 
  </body>
</html>