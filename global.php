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
    </div>


    <h1 align="center"> INFORMACIÓN GLOBAL </h1>

    <style type="text/css">
    #container { width:100%; font-size: 0;}
    #pos1 {display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;width: 20%; background: #D5D3D1; border-radius: 5px;}
    </style>

    <?php include("connect.php") ?>
    <br><br>

    <h2 align="center">Solicitudes en proceso:</h2>
    <div id="container">
      <div align="center" id="pos1">S-ID <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Sid = 'B'"); ?></div>
      <div align="center" id="pos1">T.I.B.A <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Tiba = 'B'"); ?></div>
      <div align="center" id="pos1">Alta de Usuario <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Altausuario = 'B'"); ?></div>
      <div align="center" id="pos1">VPN <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Vpn = 'B'"); ?></div>
      <div align="center" id="pos1">Attlasian <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Attlasian = 'B'"); ?></div>
    </div>

    <br><br><br><br>

    <h2 align="center">Solicitudes sin empezar:</h2>
    <div id="container" >
      <div align="center" id="pos1">S-ID <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Sid = 'A'"); ?></div>
      <div align="center" id="pos1">T.I.B.A <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Tiba = 'A'"); ?></div>
      <div align="center" id="pos1">Alta de Usuario <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Altausuario = 'A'"); ?></div>
      <div align="center" id="pos1">VPN <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Vpn = 'A'"); ?></div>
      <div align="center" id="pos1">Attlasian <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Attlasian = 'A'"); ?></div>
    </div>

    <br><br><br><br>

    <h2 align="center">Solicitudes terminadas:</h2>
    <div id="container" >
      <div align="center" id="pos1">S-ID <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Sid = 'C'"); ?></div>
      <div align="center" id="pos1">T.I.B.A <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Tiba = 'C'"); ?></div>
      <div align="center" id="pos1">Alta de Usuario <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Altausuario = 'C'"); ?></div>
      <div align="center" id="pos1">VPN <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Vpn = 'C'"); ?></div>
      <div align="center" id="pos1">Attlasian <hr><?php Estado("SELECT usuario.Nombre, usuario.Rut FROM usuario,solicitud WHERE usuario.Rut = solicitud.Rut AND solicitud.Attlasian = 'C'"); ?></div>
    </div>

  </body>
</html>
