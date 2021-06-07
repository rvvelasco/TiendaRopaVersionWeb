<?php
$servername = "localhost";
$database = "c2060226_alumnos";
$username = "c2060226_alumnos";
$password = "BA94feluro";

$conn = mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO productosRICKI (NULL , nombre, codigo, cantidad,costo,factura,lote)
VALUES ('$nombre', '$codigo', '$cantidad','$costo','$factura','$lote')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>