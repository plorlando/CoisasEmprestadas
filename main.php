<?php
    include "connection.php";
    include "login_verify.php";
    include "top.php";

    $sql_main = "SELECT *, u.userName FROM itens i 
                LEFT JOIN users u ON i.userId = u.userId
                WHERE emprestado = 1";
    $data_main = mysqli_query($conn, $sql_main);
?>
<section>
      <header>
        <h2>Página Principal</h2>
        <h4><?php echo "Olá, " . $_SESSION['user'];?></h4>
      </header>
      

      

      <?php
      echo "<table>";
      echo "<caption><strong>Itens Emprestados</strong></caption>";
      echo "<tr>";
          echo "<th>Item</th>";
          echo "<th>Data do Empréstimo</th>";
          echo "<th>Nome do Usuário</th>";
      echo "</tr>";
      
      while($results = mysqli_fetch_array($data_main)){
          echo "<tr><td>".$results['item']."</td>";
          echo "<td>".$results['dataEmprestimo']."</td>";
          echo "<td>".$results['userName']."</td>";
      }
      ?>



<?php 
include "bottom.php";
?>