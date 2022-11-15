<?php
if (isset($_POST['submit'])){
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "okonodestine99@gmail.com";
$headers = "From:".$mailFrom;
$txt = "You have received a business email from:" .$name."\n\n".$message;

mail($mailTo, $txt, $subject, $headers);
header("Location: index.html?mailsend");
}