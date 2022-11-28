<?php
include "connection.php";
include "login_verify.php";
include "top.php";

date_default_timezone_set("America/Sao_Paulo");
$currentDate = date("d/m/Y");

?>
<section>
    <header>
        <h2>Cadastro de Usuário</h2>
    </header> 
    
    <div id="cadastro">
        <form method="post" action="users_apply.php"> 
            
            <table>
                <tr>
                    <td><label for="cpUser">Usuário</label></td>
                    <td><input id="cpUser" name="cpUser" required="required" type="text" placeholder="digite seu usuário" /></td>
                </tr>
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
                <a href="main.php">Voltar</a>
            </p>
        </form>
    </div>
</body>
</html>
    