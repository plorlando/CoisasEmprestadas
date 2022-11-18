<?php
    session_start();
    include "connection.php";
    $sql_usuarios = "SELECT userId, userName, userEmail FROM usuarios";
    $data_usuarios = mysqli_query($conn, $sql_usuarios);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="estilo.css" rel="stylesheet">
  <title>Usuários</title>
</head>

<body>
    <h2>Usuários Cadastrados</h2>
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Nome</th>";
        echo "<th>Email</th>";
        echo "<th>Ações</th>";
    echo "</tr>";
    
    while($results = mysqli_fetch_array($data_usuarios)){
        echo "<tr><td>".$results['userId']."</td>";
        echo "<td>".$results['userName']."</td>";
        echo "<td>".$results['userEmail']."</td>";
        echo "<td>"."<a href='editar_usuario.php?id=".$results['userId']."'>Editar</a></td></tr>";
    }
    
    
    // PAGINAÇÂO
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT); // recebe a página atual
    
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1; // defina qual pagina o usuário está
    $qnt_result_pg = 1;  // define o numero de registros por página
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg; // calcula o inicio da paginação

    $sql_usuarios2 = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
    $data_usuarios2 = mysqli_query($conn, $sql_usuarios2);
    
    // ta aqui o problema
    while($row_usuarios = mysqli_fetch_assoc($data_usuarios2)) {
        echo $row_usuarios['userId'] . ". " . $row_usuarios['userName'] . "<br><hr>";
    }
    
    $result_pg_usuarios = "SELECT COUNT(userId) as num_result_usuarios FROM usuarios";
    $resultado_pg_usuarios = mysqli_query($conn, $result_pg_usuarios);
    $row_pg = mysqli_fetch_assoc($resultado_pg_usuarios);
    //echo $row_pg['num_result'];
    $quantidade_pg = ceil($row_pg['num_result_usuarios'] / $qnt_result_pg);

    // limitar os links antes e depois
    $max_links = 2;
    echo "<a href='usuarios.php?pagina=1'>Primeira</a>";

    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        if($pag_ant >= 1) {
            echo "<a href='usuarios.php?pagina=$pag_ant'>$pag_ant</a>";
        }
    }
    echo "$pagina";

    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){

        if($pag_dep <= $quantidade_pg) {
            echo "<a href='usuarios.php?pagina=$pag_dep'>$pag_dep</a>";
        }
        
    }

    echo "<a href='usuarios.php?pagina=$quantidade_pg'>Última</a>";
    
    echo "</table>";




    ?>
    
</body>