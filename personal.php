<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div style="margin-left:45px; margin-top:45px;">
<h2> MENU </h2>
<form action="personal.php?id=">

  <input type=text placeholder="190323323" name="id">
  <input type=submit  value="buscar">
</form>

<form action="index.php?">
  <input type=submit  value="Lista de externos">
</form>
<form action="global.php">
  <input type=submit  value="info global">
</form>


<h1> INFORMACIÓN PERSONAL </h1>

<h2> A = sin empezar <p> B = en proceso <p> C = terminado </h2>

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
    //DATOS PERSONALES:
    echo "nombre: ".$fila['Nombre']; ?> <p> <?php
    echo "rut: ".$fila['Rut'];  ?> <p> <?php

//______________________________________________________________________________

    echo "sid: ".Estado($fila['Sid']);  ?> <p> <?php
    //resultado sid:
    $rut = $fila['Rut'];
    $sid_resultado = $mysqli->query("SELECT * FROM sid WHERE sid.Rut = '$rut'");
    $sid_fila = $sid_resultado->fetch_assoc();

    echo "subprocesos sid: ".$sid_fila['sp1']." ".$sid_fila['sp2']; ?> <p> <?php
    $sid_resultado->free();

//______________________________________________________________________________

    echo "tiba: ".Estado($fila['Tiba']); ?> <p> <?php
    //resultado tiba:
    $tiba_resultado = $mysqli->query("SELECT * FROM tiba WHERE tiba.Rut = '$rut'");
    $tiba_fila = $tiba_resultado->fetch_assoc();

    echo "subprocesos tiba: ".$tiba_fila['sp1']." ".$tiba_fila['sp2']; ?> <p> <?php
    $tiba_resultado->free();

//______________________________________________________________________________

    echo "altausuario: ".Estado($fila['Altausuario']);  ?> <p> <?php
    //resultado altausuario:
    $altausuario_resultado = $mysqli->query("SELECT * FROM altausuario WHERE altausuario.Rut = '$rut'");
    $altausuario_fila = $altausuario_resultado->fetch_assoc();

    echo "subprocesos altausuario: ".$altausuario_fila['sp1']." ".$altausuario_fila['sp2']; ?> <p> <?php
    $altausuario_resultado->free();

//______________________________________________________________________________


    echo "vpn: ".Estado($fila['Vpn']);  ?> <p> <?php
    //resultado vpn:
    $vpn_resultado = $mysqli->query("SELECT * FROM vpn WHERE vpn.Rut = '$rut'");
    $vpn_fila = $vpn_resultado->fetch_assoc();

    echo "subprocesos vpn: ".$vpn_fila['sp1']." ".$vpn_fila['sp2']." ".$vpn_fila['sp3']; ?> <p> <?php
    $vpn_resultado->free();

//______________________________________________________________________________


    echo "attlasian: ".Estado($fila['Attlasian']);  ?> <p> <?php
    //resultado attlasian:
    $attlasian_resultado = $mysqli->query("SELECT * FROM attlasian WHERE attlasian.Rut = '$rut'");
    $attlasian_fila = $attlasian_resultado->fetch_assoc();

    echo "subprocesos attlasian: ".$attlasian_fila['sp1']." ".$attlasian_fila['sp2']." ".$attlasian_fila['sp3']." ".$attlasian_fila['sp4']." ".$attlasian_fila['sp5']." ".$attlasian_fila['sp6']; ?> <p> <?php
    $attlasian_resultado->free();



}
$resultado->free();
$mysqli->close();

 ?>

</div>
