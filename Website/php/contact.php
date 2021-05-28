<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message']


    $email_from = '192.168.178.56';

    $email_subject = 'Eismart Kontakt'

    $email_body = "User Name: $name.\n"
                  "User E-Mail: $visitor_email.\n"
                  "User Message: $message.\n"

    $to = "senfautomat04@gmail.com"

    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html")
?>