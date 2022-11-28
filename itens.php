<?php
  include "connection.php";
  include "login_verify.php";
  include "top.php";
?>
<section>
<header>
  <h2>Itens</h2>
  <h4><?php echo "Olá, " . $_SESSION['user'];?></h4>
</header>

  <!--FORMULÁRIO DE CADASTRO DE ITENS-->
  <div id="cadastro_itens">
    <form method="post" action="cadastro_itens.php">
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
  </div>
<br>
    
    <?php
    include "connection.php";
    
    // PAGINAÇÂO
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT); // recebe a página atual

    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1; // defina qual pagina o usuário está
    $qnt_result_pg = 4;  // define o numero de registros por página
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg; // calcula o inicio da paginação

    $sql_itens = "SELECT itemId, item, i.userId, dataEmprestimo, u.user FROM itens i 
                  LEFT JOIN users u ON i.userId = u.userId LIMIT $inicio, $qnt_result_pg";
    $data_itens = mysqli_query($conn, $sql_itens);
 
    while($row_item = mysqli_fetch_assoc($data_itens)) {
        echo "<b>Código do Item: </b>" . $row_item['itemId'] . ". " . $row_item['item'] . "<br>";
        echo "<b>Emprestado para: </b>" . $row_item['user'] . " , <b>Data do Empréstimo: </b>" . $row_item['dataEmprestimo'] . "<br><hr>";
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

<?php 
include "bottom.php";
?>