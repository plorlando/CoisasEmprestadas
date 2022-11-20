<?php
    // FONTE: https://www.youtube.com/watch?v=4tBeeMcw2sM
    // https://www.youtube.com/watch?v=wFfwt_Rbp1o&t=675s
    
    session_start();

    include_once("connection.php");
    $user = $_POST['cpUser'];
    $nome = $_POST['cpNome'];
    $email = $_POST['cpEmail'];
    $senha = $_POST['cpSenha'];
    
    $sql_new_user = "INSERT INTO users (user, userName, userEmail, userPass) VALUES ('$user', '$nome', '$email', md5('$senha'))";
    $data = mysqli_query($conn, $sql_new_user);

    if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "<p style='color: green'>Usuário cadastrado com sucesso</p>";
        header("Location: users.php");
    }else{
        $_SESSION['msg'] = "<p style='color: red'>Falha ao cadastrar o usuário</p>";
        header("Location: users.php");
    }
?>