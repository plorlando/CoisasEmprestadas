<?php
    // FONTE: https://www.youtube.com/watch?v=4tBeeMcw2sM
    // https://www.youtube.com/watch?v=wFfwt_Rbp1o&t=675s
    

session_start();

    include_once("connection.php");
    $item = $_POST['cpItem'];
    //echo "$nome_usuario - $email_usuario";
    
    $sql = "INSERT INTO itens (item) VALUES ('$item')";
    $data = mysqli_query($conn, $sql);

    if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "<p style='color: green'>Item cadastrado com sucesso</p>";
        header("Location: itens.php");
    }else{
        $_SESSION['msg'] = "<p style='color: red'>Item cadastrado com sucesso</p>";
        header("Location: itens.php");
    }
    
    // if(mysqli_affected_rows($conn) != 0){
    //             echo "
    //                 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/CoisasEmprestadas/cadastro_itens.php'>
    //                 <script type="text/javascript">
    //                     alert("Usuario cadastrado com Sucesso.");
    //                 </script>
    //             ";    
    //         }else{
    //             echo "
    //                 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/CoisasEmprestadas/cadastro_itens.php'>
    //                 <script type="text/javascript">
    //                     alert("O Item não foi cadastrado com Sucesso.");
    //                 </script>
    //             ";    
    //         }
?>