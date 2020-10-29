<?php
$to = 'soccer_phone@hotmail.com';
$email_subject = 'Testing PHP Mail';
$email_body = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply@ starpharmacy.com';
    $retval = mail($to, $email_subject, $email_body,$headers);
    if( $retval == true ) {
        echo "Message sent successfully...";
     }else {
        echo "Message could not be sent...";
     }
    header( 'Location: /index.html' ) ;  
?>