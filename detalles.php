<?php
include 'conexion.php'; // Incluye el archivo de conexión

$id = $_GET['id']; // Obtener el ID del producto

// Obtener los detalles del producto de la base de datos
$sql = "SELECT * FROM productos WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Mostrar los detalles del producto
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. "<br>";
    echo "Nombre: " . $row["nombre"]. "<br>";
    echo "Clasificación: " . $row["clasificacion"]. "<br>";
    echo "Proveedor: " . $row["proveedor"]. "<br>";
    echo "Cantidad: " . $row["cantidad"]. "<br>";
    echo "Fecha de vencimiento: " . $row["fecha_vencimiento"]. "<br>";
    echo "Lote: " . $row["lote"]. "<br>";
    echo "Farmacéutico: " . $row["farmaceuta"]. "<br>";
    echo "Fecha de ingreso: " . $row["fecha_ingreso"]. "<br>";
    echo "Personal que lo ingresa: " . $row["personal_ingresa"]. "<br>";
    echo "Factura de recepción: " . $row["factura_recepcion"]. "<br>";
    echo "Número de control de la factura: " . $row["num_control_factura"]. "<br>";
    echo "Días de vencimiento: " . $row["dias_vencimiento"]. "<br>";
  }
} else {
  echo "No se encontró el producto.";
}
?>