<?php
session_start();
include('config.php');
date_default_timezone_set('Europe/Paris');
$dt = new DateTime();
$now = $dt->format('H:i:s');
$email = $_POST['user_mail'];
$nbr = $_POST['participants'];
$con->query("INSERT INTO users VALUES ('','$email','$now','$nbr')");
$_SESSION['user'] = $email;
