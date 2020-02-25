<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--?php
//https://stackoverflow.com/questions/41395245/accessing-my-outlook-inbox-via-php-code

$hostname = '{outlook.office365.com:993/imap/ssl/novalidate-cert}INBOX';
    $username = 'test.practica@outlook.com';
    $password = 'Scotia.2020';

/* try to connect */
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to '.$hostname.': ' . imap_last_error());

if( $inbox) {
  //Check no.of.msgs
  $num = imap_num_msg($inbox);

  //if there is a message in your inbox
  if( $num >0 ) {
       //read that mail recently arrived
       //echo imap_qprint(imap_body($inbox, $num));  Recibe el mail codificado en base64
       $new_text = imap_qprint(imap_body($inbox, 2));//$num-1)); //STring codificado en base64
       //echo $new_text;
       echo base64_decode($new_text); //decode text

  }

  //close the stream
  imap_close($inbox);

}

?>
-->

<div style="margin-left:45px; margin-top:45px;">
<h2> MENU </h2>
<form action="personal.php?id=">
  <input type=text placeholder="190323323" name="id">
  <input type=submit  value="info personal">
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
