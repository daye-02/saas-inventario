<?php
include 'conexion.php'; // Incluye el archivo de conexión


if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Si se envió el formulario
  // Obtener los datos del formulario
  $clasificacion = $_POST['clasificacion'];
  $proveedor = $_POST['proveedor'];

  // Buscar los productos en la base de datos
  $sql = "SELECT * FROM productos WHERE clasificacion='$clasificacion' AND proveedor='$proveedor'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Mostrar los productos encontrados
    while($row = $result->fetch_assoc()) {
      echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Clasificación: " . $row["clasificacion"]. " - Proveedor: " . $row["proveedor"]. " - Cantidad: " . $row["cantidad"]. "<br>";
    }
  } else {
    echo "No se encontraron productos.";
  }
}
?>

<form method="POST">
  <label>Clasificación:</label>
  <input type="text" name="clasificacion">

  <label>Proveedor:</label>
  <input type="text" name="proveedor">

  <button type="submit">Buscar</button>
</form>