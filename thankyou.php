<?php 

$msg = "We really appreciate you reaching out to us, $_POST['name']. We are reading your message and should be contacting you shortly.";

$msg = wordwrap($msg,70);

mail($_POST['emailaddress'], "Thanks For Contacting Us!", $msg);

header("Location: http://35.190.168.192/thankyou.html");
?>