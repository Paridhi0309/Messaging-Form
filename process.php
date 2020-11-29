<?php ob_start();
if(isset($_POST['submit'])){
    $to="edwin@codingfaculty.com";
    $subject="My subject";
    $txt="Hello World";
    $headers="From:somebodyelse@example.com" . "\r\n" . 
    "CC:webmaster@example.com";
    mail($to,$subject,$txt,$headers);
    header("Location:contact.html");
}






?>