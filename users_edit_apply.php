<?php
    // FONTE: https://www.youtube.com/watch?v=4tBeeMcw2sM
    // https://www.youtube.com/watch?v=wFfwt_Rbp1o&t=675s
    

    session_start();

    include_once("connection.php");
    $id = filter_input(INPUT_POST, 'cpId', FILTER_SANITIZE_NUMBER_INT);
    $user = filter_input(INPUT_POST, 'cpUser', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'cpNome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'cpEmail', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'cpSenha', FILTER_SANITIZE_STRING);

    $sql_edit_user = "UPDATE users SET
    user = '$user',
    userName = '$nome',
    userEmail = '$email',
    userPass = md5('$senha')
    WHERE userId = '$id'";

    $data = mysqli_query($conn, $sql_edit_user);

    if (mysqli_affected_rows($conn)) {
        $_SESSION['msg'] = "<p style='color: green'>Usuário editado com sucesso</p>";
        header("Location: users.php");
    }else{
        $_SESSION['msg'] = "<p style='color: red'>Falha ao editar o usuário</p>";
        header("Location: users_edit.php?id=$id");
    }
?>