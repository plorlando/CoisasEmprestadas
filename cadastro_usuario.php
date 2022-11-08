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
  <!--FORMULÁRIO DE CADASTRO de USUARIOS-->
  <div id="cadastro">
    <form method="post" action="">
      <h1>Cadastro</h1>

      <p>
        <label for="cpNome">Nome Completo</label>
        <input id="cpNome" name="cpNome" required="required" type="text" placeholder="nome" />
      </p>

      <p>
        <label for="cpEmail">E-mail</label>
        <input id="cpEmail" name="cpEmail" required="required" type="email" placeholder="contato@htmlecsspro.com" />
      </p>

      <p>
        <label for="cpSenha">Senha</label>
        <input id="cpSenha" name="cpSenha" required="required" type="password" placeholder="ex. 1234" />
      </p>

      <p>
        <label for="cpConfSenha">Redigite a Senha</label>
        <input id="cpConfSenha" name="cpConfSenha" required="required" type="password" placeholder="ex. 1234" />
      </p>
      <p>
        <input type="submit" value="Cadastrar" />
      </p>

      <p class="link">
        Já tem conta?
        <a href="login.php"> Ir para Login </a>
      </p>
    </form>
  </div>
</body>

</html>