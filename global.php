<h1> INFO GLOBAL </h1>

<form action="index.php">

  <input type=submit  value="volver">

</form>

<style type="text/css">
* {margin: 0; padding: 0;}
#container {height: 100%; width:100%; font-size: 0;}
#pos1, #pos2, #pos3,#pos4,#pos5 {display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;}
#pos1 {width: 20%; background: #D5D5D1;}
#pos2 {width: 20%; background: #D5D5D1;}
#pos3 {width: 20%; background: #D5D5D1;}
#pos4 {width: 20%; background: #D5D5D1;}
#pos5 {width: 20%; background: #D5D5D1;}
</style>

<?php include("connect.php") ?>

<div id="container">
    <div id="pos1">S-ID <hr><?php Conexionbdd(); ?></div>
    <div id="pos2">T.I.B.A <hr><?php Conexionbdd(); ?></div>
    <div id="pos3">Alta de Usuario <hr><?php Conexionbdd(); ?></div>
    <div id="pos3">VPN <hr><?php Conexionbdd(); ?></div>
    <div id="pos3">Attlasian <hr><?php Conexionbdd(); ?></div>
</div>
