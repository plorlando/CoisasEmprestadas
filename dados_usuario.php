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
    <!--FORMULÁRIO DE ALTERAÇÃO DE DADOS DOS USUÁRIOS-->
    <div id="cadastro">
        <form method="post" action="recebidos_usuario.php"> 
            <h1>Cadastro de usuário</h1> 
            <table>
                <tr>
                    <td><label for="cpNome">Nome completo:</label></td>
                    <td><input id="cpNome" name="cpNome" required="required" type="text" placeholder="Digite seu nome"/></td>
                </tr>
                <tr>
                    <td><label for="cpEmail">E-mail:</label></td>
                    <td><input id="cpEmail" name="cpEmail" required="required" type="email" placeholder="nome@email.com"/> </td>
                </tr>
                <tr>
                    <td><label for="cpSenha">Senha:</label></td>
                    <td><input id="cpSenha" name="cpSenha" required="required" type="password" placeholder="Ex.:1234"/></td>
                </tr>
                <tr>
                    <td><label for="cpConfSenha">Confirmação de senha:</label></td>
                    <td><input id="cpConfSenha" name="cpConfSenha" required="required" type="password" placeholder="Ex.:1234"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Cadastrar"/>
                        <input type="reset" value="Limpar"/>
                    </td>
                </tr>
            </table>
            <p class="link">  
                <a href="main.php">Voltar ao menu principal</a>
            </p>
        </form>
    </div>
</body>
</html>
    