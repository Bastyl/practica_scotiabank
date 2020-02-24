

<h1> BUSCAR INFO PERSONAL </h1>
<form action="index.php">

  <input type=submit  value="volver">

</form>


<?php
function Estado($value){
  if($value == "A"){
    return "Sin empezar";
  }
  if($value == "B"){
    return "En proceso";
  }
  if($value == "C"){
    return "Terminado";
  }
}
?>

<?php
$dato = $_GET['id'];
//echo $dato;

$mysqli = new mysqli('localhost', 'root', 'root', 'testpractica');

$resultado = $mysqli->query("SELECT * FROM usuario, solicitud WHERE usuario.Rut = solicitud.Rut AND usuario.Rut ='$dato'");

for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo "nombre: ".$fila['Nombre']; ?> <p> <?php
    echo "rut: ".$fila['Rut'];  ?> <p> <?php
    echo "sid: ".Estado($fila['Sid']);  ?> <p> <?php
    echo "tiba: ".Estado($fila['Tiba']); ?> <p> <?php
    echo "altausuario: ".Estado($fila['Altausuario']);  ?> <p> <?php
    echo "vpn: ".Estado($fila['Vpn']);  ?> <p> <?php
    echo "attlasian: ".Estado($fila['Attlasian']);  ?> <p> <?php
}

$resultado->free();
$mysqli->close();



 ?>

<!--Nombre, Apellido,Edad, usuario.Rut-->
