<?php
include "connection.php";
include "login_verify.php";
include "top.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM users WHERE userId = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);


date_default_timezone_set("America/Sao_Paulo");
$currentDate = date("d/m/Y");

?>
<section>
    <header>
        <h2>Editar Usuário</h2>
        <h4><?php echo "Olá, " . $_SESSION['user'];?></h4>
    </header>
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