<?php
include "connection.php";
include "login_verify.php";
include "top.php";
$user = $_SESSION['user'];
$query = mysqli_query($conn, "SELECT userName, userId FROM users WHERE user = '$user'");
$user = mysqli_fetch_assoc($query);

date_default_timezone_set("America/Sao_Paulo");
$currentDate = date("d/m/Y");

?>
<section>
        <header>
        <h2>Devolução de Empréstimo</h2>
        <h4><?php echo "Olá, " . $_SESSION['user'];?></h4>
      </header>
    
        <form method="post" action="return_register.php">
            <table>
                <h2>Insira os dados do item emprestado</h2>

                <tr>
                    <td><label for="cpItem">Item</label></td>
                    <td>
                        <select id="cpItem" name="cpItem" required="required" size="">
                        <?php
                            $res = mysqli_query($conn, "SELECT itemId, item, emprestado FROM itens 
                            WHERE emprestado = 1");
                            while($row = mysqli_fetch_assoc($res)) {
                                echo"<option value=".$row['itemId'].">".$row['item']."</option>";
                            }
                        ?>
                        </select>   
                    </td>
                </tr>
                <tr>
                    <td><label for="cpNome">Nome completo</label></td>
                    <td><input id="cpNome" name="cpNome" required="required" type="text" placeholder="Digite seu nome" value="<?php echo $user['userName'];?>" disabled /></td>
                </tr>
                <tr>
                    <td><label for="cpData">Data de devolução</label></td>
                    <td><input type="date" name="cpData" value="<?=date("Y-m-d");?>"></td>
                </tr>
                
                
                    <input id="cpId" name="cpId" type="hidden"  value="<?php echo $user['userId'];?>" />
                
            </table>
            <input type="submit" value="Registrar Devolução"/>
        </form>
        <br>
        <div class="container"></div>
        <p class="link">
            Não encontrou o que procurava? Cadastre um novo item aqui:
            <a href="cadastro_itens.php"><strong>Cadastro de Itens</strong></a><br>
        </p>
        
        <a href="dados_usuario.php">Meus dados</a><br>
        <a href="logout.php">Logout</a>

<?php
include "bottom.php";
?>