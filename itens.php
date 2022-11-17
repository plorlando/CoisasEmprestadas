<?php
session_start();
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
  <!--FORMULÁRIO DE CADASTRO DE ITENS-->
  <div id="cadastro_itens">
    <form method="post" action="cadastro_itens.php">
      <h1>Itens</h1>
      <?php
        if(isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
      ?>
      <p>
        <label for="cpItem">Cadastrar novo Item</label>
        <input id="cpItem" name="cpItem" required="required" type="text" placeholder="Digite o Item" />
      </p>

      <p>
        <input type="submit" value="Cadastrar" />
      </p>
    </form>
    <hr>
    
    <?php
    include "connection.php";
    

    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT); // recebe a página atual

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1; // defina qual pagina o usuário está
    $qnt_result_pg = 2;  // define o numero de registros por página
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg; // calcula o inicio da paginação

    $sql_itens = "SELECT * FROM itens LIMIT $inicio, $qnt_result_pg";
    $data_itens = mysqli_query($conn, $sql_itens);
 
    while($row_item = mysqli_fetch_assoc($data_itens)) {
        echo $row_item['itemId'] . ". " . $row_item['item'] . "<br><hr>";
    }

    $result_pg = "SELECT COUNT(itemId) as num_result FROM itens";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    //echo $row_pg['num_result'];
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    // limitar os links antes e depois
    $max_links = 2;
    echo "<a href='itens.php?pagina=1'>Primeira</a>";

    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        
        if($pag_ant >= 1) {
            echo "<a href='itens.php?pagina=$pag_ant'>$pag_ant</a>";
        }
    }
    echo "$pagina";

    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){

        if($pag_dep <= $quantidade_pg) {
            echo "<a href='itens.php?pagina=$pag_dep'>$pag_dep</a>";
        }
        
    }

    echo "<a href='itens.php?pagina=$quantidade_pg'>Última</a>";
    ?>

    <p class="link">
      <a href="index.php"> Voltar ao menu principal</a>
    </p>
  </div>
</body>
</html>