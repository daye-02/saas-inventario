<?php
include 'conexion.php'; // Incluye el archivo de conexión

$id = $_GET['id']; // Obtener el ID del producto

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Si se confirmó la eliminación
  // Eliminar el producto de la base de datos
  $sql = "DELETE FROM productos WHERE id='$id'";
  if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado correctamente.";
  } else {
    echo "Error al eliminar el producto: " . $conn->error;
  }
}
?>

<p>¿Está seguro que desea eliminar este producto?</p>
<form method="POST">
  <button type="submit">Sí</button>
  <a href="detalles.php?id=<?php echo $id; ?>">No</a>
</form>