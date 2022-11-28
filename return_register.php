<?php
session_start();
include_once("connection.php");
$itemId = $_POST['cpItem'];
$userId = $_POST['cpId'];
$data = $_POST['cpData'];

$sql_return = "UPDATE itens SET 
emprestado = 0,
userId = Null,
dataEmprestimo = Null
WHERE itemId = '$itemId'";
$data = mysqli_query($conn, $sql_return);

if ($conn->query($sql_return) === TRUE) {
    $_SESSION['msg'] = "<p style='color: green'>Item devolvido com sucesso</p>";
    header("Location: itens.php");
}else{
    $_SESSION['msg'] = "<p style='color: red'>Falha ao devolver o item</p>";
    header("Location: itens.php");
}
?>
