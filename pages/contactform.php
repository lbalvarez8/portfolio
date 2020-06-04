<?php 

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "lbalvarez8@gmail.com";
    $headers = "From: " .$emailFrom;
    $txt = "You got mail from " .$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: contact.html");



} else echo ('error');

?>
