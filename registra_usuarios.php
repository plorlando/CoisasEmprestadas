<?php
    // FONTE: https://www.youtube.com/watch?v=4tBeeMcw2sM
    // https://www.youtube.com/watch?v=wFfwt_Rbp1o&t=675s
    
    session_start();

    include_once("connection.php");
    $nome = $_POST['cpNome'];
    $email = $_POST['cpEmail'];
    $senha = $_POST['cpSenha'];
    
    $sql = "INSERT INTO usuarios (userName, userEmail, userPass) VALUES ('$nome', '$email', '$senha')";
    $data = mysqli_query($conn, $sql);

    if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "<p style='color: green'>Item cadastrado com sucesso</p>";
        header("Location: itens.php");
    }else{
        $_SESSION['msg'] = "<p style='color: red'>Item cadastrado com sucesso</p>";
        header("Location: itens.php");
    }
?>