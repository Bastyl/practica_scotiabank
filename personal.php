<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

  <body>


    <div style="width:100%; height:100; background:#ED111D;"><IMG SRC="scotia.png" align= "right" ALT="some text" WIDTH=100 HEIGHT=100></div>

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

<!--
<h2> A = sin empezar <p> B = en proceso <p> C = terminado </h2>
-->

    <?php
    function Transformar($value){
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
$mysqli = new mysqli('localhost', 'root', 'root', 'testpractica');

$resultado = $mysqli->query("SELECT * FROM usuario, solicitud WHERE usuario.Rut = solicitud.Rut AND usuario.Rut ='$dato'");
$fila = $resultado->fetch_assoc();

    //DATOS PERSONALES:
?><h2>Información Onboarding de <?php echo $fila['Nombre']." ".$fila['Rut'];?></h2><hr><br><?php

//______________________________________________________________________________

    echo "<h2>Estado S-ID: ".Transformar($fila['Sid']);  ?> </h2><p> <?php
    //resultado sid:
    $rut = $fila['Rut'];
    $sid_resultado = $mysqli->query("SELECT * FROM sid WHERE sid.Rut = '$rut'");
    $sid_fila = $sid_resultado->fetch_assoc();

    echo "<h3>subprocesos sid: </h3>"."<br>"."Generación S-ID por CONTRACTORS: ".Transformar($sid_fila['sp1']);

    echo "<br>"."Acceso y configuración de perfil: ".Transformar($sid_fila['sp2']); ?> <p><hr>

<?php
    $sid_resultado->free();

//______________________________________________________________________________

    echo "<h2>Estado T.I.B.A: ".Transformar($fila['Tiba']); ?> </h2><p> <?php
    //resultado tiba:
    $tiba_resultado = $mysqli->query("SELECT * FROM tiba WHERE tiba.Rut = '$rut'");
    $tiba_fila = $tiba_resultado->fetch_assoc();

    echo "<h3>subprocesos tiba: </h3>"."<br>"."Generación de TIBA por parte de los encargados de seguridad: ".Transformar($tiba_fila['sp1'])."<br>"."Retiro y prueba de Tiba: ".Transformar($tiba_fila['sp2']); ?> <p><hr><?php
    $tiba_resultado->free();

//______________________________________________________________________________

    echo "<h2>Estado Alta de Usuario: ".Transformar($fila['Altausuario']);  ?>  </h2><p> <?php
    //resultado altausuario:
    $altausuario_resultado = $mysqli->query("SELECT * FROM altausuario WHERE altausuario.Rut = '$rut'");
    $altausuario_fila = $altausuario_resultado->fetch_assoc();

    echo "<h3>subprocesos altausuario: </h3>"."<br>"."Generación de alta de usuario y correo del solicitante por parte de COASiN: ".Transformar($altausuario_fila['sp1'])."<br>"."Acceso y configuración de correo : ".Transformar($altausuario_fila['sp2']); ?> <p><hr> <?php
    $altausuario_resultado->free();

//______________________________________________________________________________


    echo "<h2>Estado Vpn: ".Transformar($fila['Vpn']);  ?> </h2><p><?php
    //resultado vpn:
    $vpn_resultado = $mysqli->query("SELECT * FROM vpn WHERE vpn.Rut = '$rut'");
    $vpn_fila = $vpn_resultado->fetch_assoc();

    echo "<h3>subprocesos vpn: </h3>"."<br>"."Generación de credenciales por parte de COASIN : ".Transformar($vpn_fila['sp1'])."<br>"."Petición de credencial al supervisor: ".Transformar($vpn_fila['sp2'])."<br>"."Enrolamiento de credenciales en equipo del solicitante: ".Transformar($vpn_fila['sp3']); ?> <p><hr><?php
    $vpn_resultado->free();

//______________________________________________________________________________


    echo "<h2>Estado Attlasian: ".Transformar($fila['Attlasian']);  ?> </h2><p> <?php
    //resultado attlasian:
    $attlasian_resultado = $mysqli->query("SELECT * FROM attlasian WHERE attlasian.Rut = '$rut'");
    $attlasian_fila = $attlasian_resultado->fetch_assoc();

    echo "<h3>subprocesos attlasian: </h3>"."<br>"."Envio de solicitud por Service now: ".Transformar($attlasian_fila['sp1'])."<br>";
    echo "Aprobación de solicitud por el supervisor: ".Transformar($attlasian_fila['sp2'])."<br>"."Acceso a sistemas y proyectos: ".Transformar($attlasian_fila['sp3']);
    echo "<br>"."Envio de solicitud de acceso a repositorios: ".Transformar($attlasian_fila['sp4'])."<br>"."Aprobación de admin del proyecto: ".Transformar($attlasian_fila['sp5']);
    echo "<br>"."Acceso a repositorios: ".Transformar($attlasian_fila['sp6']); ?> <p>
      <?php
    $attlasian_resultado->free();

$resultado->free();
$mysqli->close();

 ?>
    </div>
  </body>
</html>
