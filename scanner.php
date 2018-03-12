<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0, shrink-to-fit=yes"/>
    <title>QR Code Scanner Example</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <style>
        * {
            overflow: hidden;
        }
    </style>
</head>
<body style="margin:0;padding:0;overflow: hidden">
<nav class="position-fixed fixed-top">
    <a class="logout green pl-2" href="index.php">
        <h1 class="x_logout">&times;</h1>
    </a>

    <div class="green digit countdown text-center" id="timer"></div>
    <?php include 'php/config.php';
    include('php/countdown.php');
    echo '<script src="js/countdown.js"></script><script>' . $countdown . '</script>';
    ?>
    <div class="button">
        <a class="btn-open" href="#"></a>
    </div>

</nav>
<div style="z-index:1 ;" class="fixed-top nav2 text-center nav-green pr-1">QR Scanner</div>
<div class="overlay">
    <div class="wrap">
        <ul class="wrap-nav">
            <li>
                <a href="index.php">
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
<article>
    <section style="width:100vw;height:100vh; margin:8vh auto;">
        <!-- webcamera view component -->
        <video id="webcameraPreview" playsinline autoplay muted loop style="width: 100%;"></video>
    </section>
</article>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/adapter.min.js"></script>
<script type="text/javascript" src="js/instascan.js"></script>
<script type="text/javascript" src="js/QrCodeScanner.js"></script>
<script type="text/javascript">
    //HTML video component for web camera
    var videoComponent = $("#webcameraPreview");
    //HTML select component for cameras change
    var webcameraChanger = $("#webcameraChanger");
    var options = {};
    //init options for scanner
    options = initVideoObjectOptions("webcameraPreview");
    var cameraId = 0;

    initScanner(options);

    initAvaliableCameras(
        webcameraChanger,
        function () {
            cameraId = parseInt(getSelectedCamera(webcameraChanger));
        }
    );

    initCamera(cameraId);


    scanStart(function (data) {
        alert(data);
    });

</script>
<?php
include('footer.php');
?>
</body>
</html>