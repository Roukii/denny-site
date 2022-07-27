<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $message = $_POST['message'];
  $formcontent=" From: $name \n Email: $email Message: $message";
  $recipient = "hola@ddesign.es";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
?>