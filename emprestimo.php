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
  <h1>REGISTRO DE EMPRÉSTIMO
  </h1>
  <br>

  <form method="post" action="">
    <h2>Insira os dados do item emprestado</h2>
    <p>certamente precisamos substituir os campos abaixo por campos de seleção de
      itens e de usuários</p>
    <p>
      <label for="cpItem">Item</label>
      <input id="cpItem" name="cpItem" required="required" type="text" placeholder="Item" />
    </p>
    <p>
      <label for="cpNome">Nome Completo</label>
      <input id="cpNome" name="cpNome" required="required" type="text" placeholder="nome" />
    </p>

    <p>
      <label for="cpData">Data de empréstimo</label>
      <input id="cpData" name="cpData" required="required" type="date" placeholder="00/00/0000" />
    </p>
    
    <p>
      <label for="cpDevolucao">Data de devolução</label>
      <input id="cpDevolucao" name="cpDevolucao" required="required" type="date" placeholder="00/00/0000" />
    </p>

    <p>
      <input type="submit" value="Registrar" />
    </p>

  </form>

  <br>
  <div class="container">



  </div>
  <p class="link">
    Não encontrou o item que queria emprestar, cadastre um novo
    <a href="cadastro_itens.php">Cadastro de Itens</a><br>
  </p>
  <a href="index.php"> Voltar ao menu principal</a><br>
  <a href="dados_usuario.php">Meus dados</a><br>
  <a href="login.php">Logout</a>
</body>


</html>