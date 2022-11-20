<?php
session_start();
include_once "connection.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM users WHERE userId = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="estilo.css" rel="stylesheet">
  <title>Edição de usuários</title>
</head>

<body>
    <h2>Editar Usuário</h2>
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

  <!--FORMULÁRIO DE EDIÇÃO de USUARIOS-->
  <div id="cadastro">
    <form method="post"  action="users_edit_apply.php"?>
      <p>
        <input name="cpId" type="hidden" value="<?php echo $row_usuario['userId'] ?>"/>
      </p>

      <p>
        <label for="cpUser">Usuário</label>
        <input id="cpUser" name="cpUser" required="required" type="text" placeholder="digite seu usuário" value="<?php echo $row_usuario['user'] ?>"/>
      </p>

      <p>
        <label for="cpNome">Nome Completo</label>
        <input id="cpNome" name="cpNome" required="required" type="text" placeholder="digite seu nome" value="<?php echo $row_usuario['userName'] ?>"/>
      </p>

      <p>
        <label for="cpEmail">E-mail</label>
        <input id="cpEmail" name="cpEmail" required="required" type="email" placeholder="ex. nome@dominio.com.br"  value="<?php echo $row_usuario['userEmail'] ?>"/>
      </p>

      <p>
        <label for="cpSenha">Senha</label>
        <input id="cpSenha" name="cpSenha" required="required" type="password" placeholder="ex. 1234"  value="<?php echo $row_usuario['userPass'] ?>"/>
      </p>

      <p>
        <label for="cpConfSenha">Redigite a Senha</label>
        <input id="cpConfSenha" name="cpConfSenha" required="required" type="password" placeholder="ex. 1234" />
      </p>
      <p>
        <input type="submit" value="Editar" />
      </p>
    </form>
   
  </div>
</body>

</html>