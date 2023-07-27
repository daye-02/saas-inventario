<?php
include 'conexion.php'; // Incluye el archivo de conexión

$id = $_GET['id']; // Obtener el ID del producto

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Si se envió el formulario
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $clasificacion = $_POST['clasificacion'];
  $proveedor = $_POST['proveedor'];
  $cantidad = $_POST['cantidad'];
  $fecha_vencimiento = $_POST['fecha_vencimiento'];
  $lote = $_POST['lote'];
  $farmaceuta = $_POST['farmaceuta'];
  $fecha_ingreso = $_POST['fecha_ingreso'];
  $personal_ingresa = $_POST['personal_ingresa'];
  $factura_recepcion = $_POST['factura_recepcion'];
  $num_control_factura = $_POST['num_control_factura'];
  $dias_vencimiento = $_POST['dias_vencimiento'];

 {
    // Actualizar el producto en la base de datos
    $sql = "UPDATE productos SET nombre='$nombre', clasificacion='$clasificacion', proveedor='$proveedor', cantidad='$cantidad', fecha_vencimiento='$fecha_vencimiento', lote='$lote', farmaceuta='$farmaceuta', fecha_ingreso='$fecha_ingreso', personal_ingresa='$personal_ingresa', factura_recepcion='$factura_recepcion', num_control_factura='$num_control_factura', dias_vencimiento='$dias_vencimiento' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "P

roducto actualizado correctamente.";
    } else {
      echo "Error al actualizar el producto: " . $conn->error;
    }
  }
}

// Obtener los detalles del producto de la base de datos
$sql = "SELECT * FROM productos WHERE id='$id'";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
  // Mostrar el formulario para editar el producto
  while($row = $result->fetch_assoc()) {
?>

<form method="POST">
  <label>Nombre:</label>
  <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>

  <label>Clasificación:</label>
  <input type="text" name="clasificacion" value="<?php echo $row['clasificacion']; ?>" required>

  <label>Proveedor:</label>
  <input type="text" name="proveedor" value="<?php echo $row['proveedor']; ?>" required>

  <label>Cantidad:</label>
  <input type="number" name="cantidad" value="<?php echo $row['cantidad']; ?>">

  <label>Fecha de vencimiento:</label>
  <input type="date" name="fecha_vencimiento" value="<?php echo $row['fecha_vencimiento']; ?>">

  <label>Lote:</label>
  <input type="text" name="lote" value="<?php echo $row['lote']; ?>">

  <label>Farmacéutico:</label>
  <input type="text" name="farmaceuta" value="<?php echo $row['farmaceuta']; ?>">

  <label>Fecha de ingreso:</label>
  <input type="datetime-local" name="fecha_ingreso" value="<?php echo date('Y-m-d\TH:i:s', strtotime($row['fecha_ingreso'])); ?>">

  <label>Personal que lo ingresa:</label>
  <input type="text" name="personal_ingresa" value="<?php echo $row['personal_ingresa']; ?>">

  <label>Factura de recepción:</label>
  <input type="text" name="factura_recepcion" value="<?php echo $row['factura_recepcion']; ?>">

  <label>Número de control de la factura:</label>
  <input type="text" name="num_control_factura" value="<?php echo $row['num_control_factura']; ?>">

  <label>Días de vencimiento:</label>
  <input type="number" name="dias_vencimiento" value="<?php echo $row['dias_vencimiento']; ?>">

  <button type="submit">Actualizar</button>
</form>
<?php
  }
} else {
  echo "No se encontró el producto.";
}
?>