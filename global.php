<h1> INFO GLOBAL </h1>

<form action="index.php">

  <input type=submit  value="volver">

</form>

<style type="text/css">
* {margin: 0; padding: 0;}
#container {height: 100%; width:100%; font-size: 0;}
#left, #middle, #right {display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;}
#left {width: 25%; background: #D5D5D1;}
#middle {width: 50%; background: #D5D5D1;}
#right {width: 25%; background: #D5D5D1;}
</style>

<?php include("connect.php") ?>

<div id="container">
    <div id="left">PROCESO 1 <hr><?php Conexionbdd(); ?></div>
    <div id="middle">PROCESO 2 <hr><?php Conexionbdd(); ?></div>
    <div id="right">PROCESO 3 <hr><?php Conexionbdd(); ?></div>
</div>
