<?php 
session_start();
include 'connection.php';

if(empty($_POST['cpUser']) || empty($_POST['cpSenha'])) {
    header('Location: index.php');
    exit();
}

$user = $_POST['cpUser'];
$pass = $_POST['cpSenha'];

$sql_check_user = "SELECT userId, user, userName FROM users WHERE user = '$user' and userPass = md5('$pass')";
$result = mysqli_query($conn, $sql_check_user);
$row = mysqli_num_rows($result);

$now = date("d/m/Y H:i:s");
setcookie("user", $result['userName'], time()+60*60*24);
setcookie("last_access", $now, time()+60*60*24);

if($row == 1) {
    $_SESSION['user'] = $user;
    header('Location: main.php');
    exit();
} else {
    $_SESSION['not_authenticated'] = true;
    header('Location: index.php');
    exit();
}
?> 