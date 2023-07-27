<?php
include 'conexion.php'; // Incluye el archivo de conexión


// Dayerlin Lombana c.i: 29.836.247//


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
    // Agregar el nuevo producto a la base de datos
    $sql = "INSERT INTO productos (nombre, clasificacion, proveedor, cantidad, fecha_vencimiento, lote, farmaceuta, fecha_ingreso, personal_ingresa, factura_recepcion, num_control_factura, dias_vencimiento) VALUES ('$nombre', '$clasificacion', '$proveedor', '$cantidad', '$fecha_vencimiento', '$lote', '$farmaceuta', '$fecha_ingreso', '$personal_ingresa', '$factura_recepcion', '$num_control_factura', '$dias_vencimiento')";

    if ($conn->query ($sql) === TRUE) {
      echo "Producto agregado correctamente.";
    } else {
      echo "Error al agregar el producto: " . $conn->error;
    }
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario Farmacia SAAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/img/logosaas.png" alt="Logo" width="160" height="130" >
      
    </a>
  </div>
</nav>
   
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

<form method="POST">
  <label>Nombre:</label>
  <input type="text" name="nombre" required>

  <label>Clasificación:</label>
  <input type="text" name="clasificacion" required>

  <label>Proveedor:</label>
  <input type="text" name="proveedor" required>

  <label>Cantidad:</label>
  <input type="number" name="cantidad">

  <label>Fecha de vencimiento:</label>
  <input type="date" name="fecha_vencimiento">

  <label>Lote:</label>
  <input type="text" name="lote">

  <label>Farmacéutico:</label>
  <input type="text" name="farmaceuta">

  <label>Fecha de ingreso:</label>
  <input type="datetime-local" name="fecha_ingreso">

  <label>Personal que lo ingresa:</label>
  <input type="text" name="personal_ingresa">

  <label>Factura de recepción:</label>
  <input type="text" name="factura_recepcion">

  <label>Número de control de la factura:</label>
  <input type="text" name="num_control_factura">

  <label>Días de vencimiento:</label>
  <input type="number" name="dias_vencimiento">
  
  <button type="submit" class="btn btn-success">Agregar</button>
</form>