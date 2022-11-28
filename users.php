<?php
    include "connection.php";
    include "login_verify.php";
    include "top.php";
    $sql_users = "SELECT userId, userName, userEmail, user FROM users";
    $data_users = mysqli_query($conn, $sql_users);

?>
<section>
    <header>
    <h2>Usuários Cadastrados</h2>
    <h4><?php echo "Olá, " . $_SESSION['user'];?></h4>
    </header>
    <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Usuário</th>";
        echo "<th>Nome</th>";
        echo "<th>Email</th>";
        echo "<th>Ações</th>";
    echo "</tr>";
    
    while($results = mysqli_fetch_array($data_users)){
        echo "<td>".$results['user']."</td>";
        echo "<td>".$results['userName']."</td>";
        echo "<td>".$results['userEmail']."</td>";
        echo "<td>"."<a href='users_edit.php?id=".$results['userId']."'>Editar</a></td></tr>";
    }

    ?>



<?php 
include "bottom.php";
?>