<?php
session_start()
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
    <h1>Sistema de Controle de Coisas Emprestadas</h1>
    <br>
    <form method="post" action="login.php">
        <h2>Login</h2>

        <?php
        if(isset($_SESSION['not_authenticated'])):
        ?>
        <div class="notification is-danger">
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['not_authenticated']);
        ?>


        <p> 
            <label for="cpUser">Usuário</label>
            <input id="cpUser" name="cpUser" required="required" type="text" placeholder="digite seu usuário"/>
        </p>
           
        <p> 
            <label for="cpSenha">Senha</label>  
            <input id="cpSenha" name="cpSenha" required="required" type="password" placeholder="digite sua senha"/> 
        </p>
                   
        <p> 
            <input type="submit" value="Logar" /> 
        </p>
           
        <p class="link">
            Ainda não tem conta?
            <a href="users_new.php">Cadastre-se</a>
        </p>
    </form>
    
    <br>
    <div class="container">
    </div>
</body>


</html>

