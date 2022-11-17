<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fpw";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Falha na conexão " . mysqli_connect_error());
  }else{
    //echo "Conexão realizada com sucesso";
  }


// $sql = "INSERT INTO itens (item)
// VALUES ('Fogão')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
?>