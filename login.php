<?php 
include 'connection.php';

if(empty($_POST['cpUser']) || empty($_POST['cpSenha'])) {
    header('Location: index.php');
    exit();
}

$user = $_POST['cpUser'];
$pass = $_POST['cpSenha'];

$sql_check_user = "SELECT userId, user FROM users WHERE user = '$user' and userPass = md5('$pass')";
$result = mysqli_query($conn, $sql_check_user);
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['user'] = $user;
    header('Location: main.php');
    exit();
} else {
    header('Location: index.php');
}
?> 