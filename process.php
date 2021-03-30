<?php

if (isset($_POST['btn-send'])) {

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userSubject = $_POST['subject'];
$msg = $_POST['msg'];

$text = 'Name: '.$userName.' Email: '.$userEmail.' Test: '.$msg.'';

$form_mail="faithonline008@gmail.com";

if (empty($userName) || empty($userEmail) || empty($userSubject) || empty($msg)) {
header('location:index.php?error');
} else{
$to = "info@swiftcarsbillericay.co.uk";
if (mail($to, $userSubject, $text, $form_mail)) {
header("location:index.php?success");
}
}
} else{
header("location:index.php");
}
