<?php

function Conexionbdd(){
  $mysqli = new mysqli('localhost', 'root', 'root', 'testpractica');
  if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  $resultado = $mysqli->query("SELECT Nombre, Rut FROM usuario");

  for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    ?><p><a href=<?php echo "personal.php?id=".$fila['Rut'];?>><?php echo $fila['Nombre']." " ; echo $fila['Rut']; ?></a><p><?php
  }
  $resultado->free();
  $mysqli->close();
}
?>


<?php

function Estado($value){
  $mysqli = new mysqli('localhost', 'root', 'root', 'testpractica');
  $resultado = $mysqli->query($value);

  for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    ?>
    <p><a href=<?php echo "personal.php?id=".$fila['Rut'];?>><?php echo $fila['Nombre']." " ; echo $fila['Rut']; ?></a><p><?php
  }
  $resultado->free();
  $mysqli->close();
}
?>
