<?php
include "connection.php";
include "login_verify.php";
$user = $_SESSION['user'];
$query = mysqli_query($conn, "SELECT userName, userId FROM users WHERE user = '$user'");
$user = mysqli_fetch_assoc($query);

date_default_timezone_set("America/Sao_Paulo");
$currentDate = date("d/m/Y");

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
        <h1>REGISTRO DE EMPRÉSTIMO</h1>
    
        <form method="post" action="lend_register.php">
            <table>
                <h2>Insira os dados do item emprestado</h2>

                <tr>
                    <td><label for="cpItem">Item:</label></td>
                    <td>
                        <select id="cpItem" name="cpItem" required="required" size="">
                        <?php
                            $res = mysqli_query($conn, "SELECT itemId, item, emprestado FROM itens 
                            WHERE emprestado = 0");
                            while($row = mysqli_fetch_assoc($res)) {
                                echo"<option value=".$row['itemId'].">".$row['item']."</option>";
                            }
                        ?>
                        </select>   
                    </td>
                </tr>
                <tr>
                    <td><label for="cpNome">Nome completo:</label></td>
                    <td><input id="cpNome" name="cpNome" required="required" type="text" placeholder="Digite seu nome" value="<?php echo $user['userName'];?>" disabled /></td>
                </tr>
                <tr>
                    <td><input id="cpId" name="cpId" type="hidden"  value="<?php echo $user['userId'];?>" /></td>
                </tr>
                <tr>
                    <td><label for="cpData">Data de empréstimo:</label></td>
                    <td><input type="date" name="cpData" value="<?=date("Y-m-d");?>"></td>
                </tr>
                <!-- <tr>
                    <td><label for="cpDevolucao">Data de devolução:</label></td>
                    <td><input id="cpDevolucao" name="cpDevolucao" required="required" type="date" placeholder="00/00/0000"/></td>
                </tr> -->
                <tr>
                    <td>
                        <input type="submit" value="Registrar Empréstimo"/>
                        <!-- <input type="reset" value="Limpar"/> -->
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <div class="container"></div>
        <p class="link">
            Não encontrou o que procurava? Cadastre um novo item aqui:
            <a href="cadastro_itens.php"><strong>Cadastro de Itens</strong></a><br>
        </p>
        <a href="main.php">Voltar ao menu principal</a><br>
        <a href="dados_usuario.php">Meus dados</a><br>
        <a href="logout.php">Logout</a>
    </body>
</html>