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

<h2> MENU </h2>
<form action="personal.php">
  <input type=submit  value="info personal">
</form>

<form action="global.php">
  <input type=submit  value="info global">
</form>
