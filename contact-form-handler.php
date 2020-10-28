<?php
    $name = $_Post['name'];
    $visitor_email = $_POST['email'];
    $subject = $_Post['subject'];
    $message = $_Post['message'];

    $to= 'meaadhassan09@gmail.com';
    $headers= "From: ". $visitor_email;

    $email_subject= "New Website Form Submission about ".$message;
    $email_body= "Name: ".$name.".\n\n Message".$message

<<<<<<< HEAD
    mail($to, $email_subject, $email_body,$headers);
    header( 'Location: /index.html' ) ;  

=======
    $email_body= "";

    $email_body.= "User Name: ".$name."\r\n";
    $email_body.= "User Email:" .$visitor_email."\r\n";
    $email_body.= "User Subject:" .$subject."\r\n";
    $email_body.= "User Message:" .$message."\r\n";
   
    mail($to, $email_subject, $email_body);
    
>>>>>>> parent of aed7196... Update contact-form-handler.php
?>