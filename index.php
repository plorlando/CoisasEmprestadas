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
        <h2>TABELA</h2>
      </header>
      
      <section>
        <div>  
          <table>
            Tabela com a lista de itens emprestados...
          </table>
        </div>
  
        <div>
          <nav>
            <ul type="circle">
              <li><a href="emprestimo.php">Registrar um novo empréstimo</a></li>
              <li><a href="cadastro_itens.php">Cadastro de Itens</a></li>
              <li><a href="dados_usuario.php">Meus dados</a></li>
              <li><a href="login.php">Logout</a></li>
            </ul>
          </nav>
        </div>
      </section>
  
    <?php echo '<p>PHP CODE</p>'; 
  
    ?> 
  </body>
</html>