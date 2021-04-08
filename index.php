<?php 
    $to = '';
    $from = '';
    $subject = "Subject";
    $message = "<html lang='en'><head><meta charset='UTF-8'></head><body>";
    $message .= "<p>Message</p>";
    $message .= "</body></html>";

    $headers = 'From: '. $from . " " . "\r\n" .'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    imap_mail($to, $subject, $message, $headers);
?>