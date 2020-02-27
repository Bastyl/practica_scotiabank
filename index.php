<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>


  <div>
    <div style="width:100%; height:100; background:#ED111D;"><IMG SRC="scotia.png" align= "right" ALT="some text" WIDTH=100 HEIGHT=100></div>

    <div style="margin-left:45px; margin-top:45px;">
      <h2> MENU </h2>
      <form action="personal.php?id=">
        <input type=text placeholder="190323323" name="id">
        <input type=submit  value="buscar">
      </form>


      <form action="global.php">
        <input type=submit  value="info global">
      </form>

      <h2>Lista de usuarios en proceso de Onboarding:</h2>

<?php
include "connect.php";
Conexionbdd();
?>
  </div>
</body>
</html>
