<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'testpractica');
$resultado = $mysqli->query("SELECT contadortop FROM contadormail");
$num_fila = $resultado->num_rows - 1;
$resultado->data_seek($num_fila);
$fila = $resultado->fetch_assoc();


$a = $fila["contadortop"];
$hostname = '{outlook.office365.com:993/imap/ssl/novalidate-cert}INBOX';
$username = 'test.practica@outlook.com';
$password = 'Scotia.2020';

$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to '.$hostname.': ' . imap_last_error());
if ($inbox) {
  $num = imap_num_msg($inbox);

  for($i = $a+1; $i<=$num; $i++){
    $new_text = imap_qprint(imap_body($inbox, $i));

//______________________LLEGADA DE SOLICITUDES__________________________________________________________
    if (strpos($new_text,"Worker profile is approved or updated")){  //CONTRACTORS S-ID
      $contractorapproved = explode("Name:", $new_text);
      $last_name_ex = explode(", ", $contractorapproved[1]);
      $name_ex = explode("]", $last_name_ex[1]);

      $rut = 100000000+$a; //modificar random rut
      $edad = 20+$a; //modificar random rut

      $sql = "INSERT INTO usuario(Nombre, Apellido, Edad, Rut) VALUES ('$name_ex[0]','$last_name_ex[0]','$edad','$rut')";
      $mysqli->query($sql);

      $sql = "INSERT INTO altausuario(Rut, sp1, sp2) VALUES ('$rut','A','A')"; //altausuario
      $mysqli->query($sql);

      $sql = "INSERT INTO attlasian(Rut, sp1, sp2, sp3, sp4, sp5, sp6) VALUES ('$rut','A','A','A','A','A','A')"; //attlasian
      $mysqli->query($sql);

      $sql = "INSERT INTO sid(Rut, sp1, sp2) VALUES ('$rut','C','A')"; //sid
      $mysqli->query($sql);

      $sql = "INSERT INTO solicitud(Rut, Sid, Tiba, Altausuario, Vpn, Attlasian) VALUES ('$rut','B','A','A','A','A')"; //solicitud
      $mysqli->query($sql);

      $sql = "INSERT INTO tiba(Rut, sp1, sp2) VALUES ('$rut','A','A')"; //tiba
      $mysqli->query($sql);

      $sql = "INSERT INTO vpn(Rut, sp1, sp2, sp3) VALUES ('$rut','A','A','A')"; //vpn
      $mysqli->query($sql);

    }

    if (strpos($new_text,"Solicitud_de_alta_de_usuario_externo")){
      if (strpos($new_text,"ha iniciado.")){
        $coasinapproved = explode("Notificacion Inicio de Requerimiento de ", $new_text);
        $name_ex = explode(" ", $coasinapproved[1]);
        $last_name_ex = explode(".", $name_ex[1]);

        echo " ".$name_ex[0]." ".$last_name_ex[0];

        $obtener_rut = $mysqli->query("SELECT * FROM usuario WHERE usuario.Nombre = '$name_ex[0]' AND usuario.Apellido = '$last_name_ex[0]'");

        $rut_encontrado = $obtener_rut->fetch_assoc();
        echo $rut_encontrado['Rut'];

        $sql = "UPDATE altausuario SET sp1='B' WHERE Rut = 110001112";
        $mysqli->query($sql);

        $sql = "UPDATE solicitud SET Altausuario ='B' WHERE Rut = 110001112";
        $mysqli->query($sql);
      }



    }
      //IF ( COASIN SOLICITUD TIBA ){}
      //IF ( COASIN SOLICITUD ETC ){}
      //IF ( COASIN SOLICITUD ETC ){}


    }



    $sql = "UPDATE contadormail SET contadortop = '$num' WHERE contadortop = '$a'";
    $mysqli->query($sql);
}

$mysqli->close();
imap_close($inbox);

?>
