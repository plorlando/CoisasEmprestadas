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
  <!--FORMULÁRIO DE CADASTRO DE ITENS-->
  <div id="cadastro_itens">
    <form method="post" action="">
      <h1>Cadastro de Itens</h1>

      <p>
        <label for="cpItem">Item</label>
        <input id="cpItem" name="cpItem" required="required" type="text" placeholder="Item" />
      </p>

      <p>
        <input type="submit" value="Cadastrar" />
      </p>
    </form>
    <p class="link">
      <a href="index.php"> Voltar ao menu principal</a>
    </p>
  </div>
</body>
</html>