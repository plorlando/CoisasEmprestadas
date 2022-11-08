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
    <form method="post" action="">
        <h2>Login</h2>
        <p> 
            <label for="cpUser">Usuário</label>
            <input id="cpUser" name="cpUser" required="required" type="text" placeholder="digite seu usuário"/>
        </p>
           
        <p> 
            <label for="cpSenha">Senha</label>
            <input id="cpSenha" name="cpSenha" required="required" type="password" placeholder="digite sua senha"/> 
        </p>
           
        <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
        </p>
           
        <p> 
            <input type="submit" value="Logar" /> 
        </p>
           
        <p class="link">
            Ainda não tem conta?
            <a href="cadastro_usuario.php">Cadastre-se</a>
        </p>
    </form>
    
    <br>
    <div class="container">
    </div>
</body>


</html>

