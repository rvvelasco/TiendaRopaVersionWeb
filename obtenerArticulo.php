<!DOCTYPE html>
<html>
<head>
<style>
table {
  color: white;
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  color: white;
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;
    color: white;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);


$servername = "localhost";
$database = "c2060226_alumnos";
$username = "c2060226_alumnos";
$password = "BA94feluro";


$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM productosRICKI WHERE codigo = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>id</th>
<th>Nombre</th>
<th>Codigo</th>
<th>Cantidad</th>
<th>Costo</th>
<th>Factura</th>
<th>Lote</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['codigo'] . "</td>";
  echo "<td>" . $row['cantidad'] . "</td>";
  echo "<td>" . $row['costo'] . "</td>";
  echo "<td>" . $row['factura'] . "</td>";
  echo "<td>" . $row['lote'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>