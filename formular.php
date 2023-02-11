<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "you@example.com";
  $subject = "Kontaktanfrage von $name";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  mail($to, $subject, $body);
}
?>