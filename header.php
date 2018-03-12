<?php session_start();
header('content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>LE HACKER DE LA BMI</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/simon.css">
    <link rel="stylesheet" href="css/casques.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">

</head>
<body class="text-white" style="overflow: hidden">
<nav class="position-fixed fixed-top">
        <div class="green digit countdown text-center" id="timer">45:00</div>
    <?php include 'php/config.php';
    include('php/countdown.php');
    echo '<script src="js/countdown.js"></script><script>' . $countdown . '</script>';
    ?>
    <div class="button">
        <a class="btn-open" href="#"></a>
    </div>

</nav>
<div class="overlay">
    <div class="wrap">
        <ul class="wrap-nav">
            <li>
                <a href="scanner.php">
                    <div class="menu-item"><img src="img/scanner.png"></div>
                </a>

            </li>
            <li>
                <a href="fakemail.php">
                    <div class="menu-item">
                        <img src="img/map.png"></div>
                </a>
            </li>
            <li>
                <a href="casques.php">
                    <div class="menu-item">
                        <img src="img/mail.svg"></div>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <div class="menu-item">
                        <img src="img/indice.png"></div>
                </a>
            </li>
            <li>
                <a href="hackermail.php">
                    <div class="menu-item">
                        <img src="img/anonymous.svg"></div>
                </a>
            </li>
        </ul>
    </div>
</div>