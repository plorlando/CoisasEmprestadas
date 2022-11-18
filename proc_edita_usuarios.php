<?php
    // FONTE: https://www.youtube.com/watch?v=4tBeeMcw2sM
    // https://www.youtube.com/watch?v=wFfwt_Rbp1o&t=675s
    

    session_start();

    include_once("connection.php");
    $id = filter_input(INPUT_POST, 'cpId', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'cpNome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'cpEmail', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'cpSenha', FILTER_SANITIZE_STRING);

    $sql = "UPDATE usuarios SET
    userName = '$nome',
    userEmail = '$email',
    userPass = '$senha'
    WHERE userId = '$id'";

    $data = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn)) {
        $_SESSION['msg'] = "<p style='color: green'>Usuário editado com sucesso</p>";
        header("Location: usuarios.php");
    }else{
        $_SESSION['msg'] = "<p style='color: red'>Falha ao editar o usuário</p>";
        header("Location: editar_usuario.php?id=$id");
    }

?>