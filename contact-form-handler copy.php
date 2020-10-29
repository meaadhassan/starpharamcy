<?php
    $name = $_Post['name'];
    $visitor_email = $_POST['email'];
    $subject = $_Post['subject'];
    $message = $_Post['message'];

    $to= 'meaad_hassan@yahoo.com';
    $headers= 'From: '.$visitor_email;

    $email_subject= 'New Website Form Submission about '.$subject;


    $email_body= "User Name: ".$name."\r\n User Email:" .$visitor_email."\r\n User Subject:" .$subject."\r\n User Message:" .$message."\r\n";
   
    $retval = mail($to, $email_subject, $email_body,$headers);
    if( $retval == true ) {
        echo "Message sent successfully...";
     }else {
        echo "Message could not be sent...";
     }
    header( 'Location: /index.html' ) ;  
?>