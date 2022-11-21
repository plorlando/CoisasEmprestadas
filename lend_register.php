<?php
session_start();
include_once("connection.php");
$itemId = $_POST['cpItem'];
$userId = $_POST['cpId'];
$data = $_POST['cpData'];

$sql_lend = "UPDATE itens SET 
emprestado = 1,
userId = '$userId',
dataEmprestimo = '$data'
WHERE itemId = '$itemId'";
$data = mysqli_query($conn, $sql_lend);


if ($conn->query($sql_lend) === TRUE) {
    $_SESSION['msg'] = "<p style='color: green'>Item emprestado com sucesso</p>";
    header("Location: itens.php");
}else{
    $_SESSION['msg'] = "<p style='color: red'>Falha ao empres o item</p>";
    header("Location: itens.php");
}
?>
