<?php
    $name = $_Post['name'];
    $visitor_email = $_POST['email'];
    $subject = $_Post['subject'];
    $message = $_Post['message'];

    $to= 'meaadhassan09@gmail.com';
    $headers= "From: ". $visitor_email;

    $email_subject= "New Website Form Submission about ".$message;
    $email_body= "Name: ".$name.".\n\n Message".$message

    mail($to, $email_subject, $email_body,$headers);
    header( 'Location: /index.html' ) ;  

?>