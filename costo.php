<!DOCTYPE html>
<html>
<head>
<style>
table {
  margin-top: 10px;
  color: white;
  width: 60%;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
}

table, td, th {
  color: white;
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;
    color: white;}

#precio{
  color: #2AAA00;
  text-align: center;

}
#precioConIva{
  color: #2AAA00;
  text-align: center;
}

#valor{
  color: #2AAA00;
}
#valorIva{
  color: #2AAA00;
}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$arrayValores=explode(":",$q);

$codigo=$arrayValores[0];
$laGanancia=$arrayValores[1];

$servername = "localhost";
$database = "c2060226_alumnos";
$username = "c2060226_alumnos";
$password = "BA94feluro";


$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM productosRICKI WHERE codigo = '".$codigo."'";
$result = mysqli_query($conn,$sql);

$fila=mysqli_fetch_array($result);
$elCosto=$fila['costo'];
$elPrecio=$elCosto*(1+$laGanancia/100);
$elPrecioIva=$elPrecio+0.21*$elPrecio;


echo "<table>
<tr>
<th id=\"precio\">Precio</th>
<th id=\"precioConIva\">Precio con IVA</th>

</tr>";
mysqli_data_seek($result,0);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td id=\"valor\">" . $elPrecio . "</td>";
  echo "<td id=\"valorIva\">" . $elPrecioIva . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>