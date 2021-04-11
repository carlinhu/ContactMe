<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "carlitoconcencio@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an E-Mail from ".$name.".\n\n".$message;


    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>