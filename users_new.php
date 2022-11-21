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
    <form method="post"  action="users_apply.php"?>
      <h2>Cadastro de Usuário</h2>
      <p>
        <label for="cpUser">Usuário</label>
        <input id="cpUser" name="cpUser" required="required" type="text" placeholder="digite seu usuário" />
      </p>

      <p>
        <label for="cpNome">Nome Completo</label>
        <input id="cpNome" name="cpNome" required="required" type="text" placeholder="digite seu nome" />
      </p>

      <p>
        <label for="cpEmail">E-mail</label>
        <input id="cpEmail" name="cpEmail" required="required" type="email" placeholder="ex. nome@dominio.com.br" />
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
        <a href="index.php"> Ir para Login </a>
      </p>
    </form>
  </div>
</body>

</html>