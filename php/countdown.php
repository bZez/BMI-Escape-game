<?php
$user = $_SESSION['user'];
$req = $con->query("SELECT * FROM users WHERE `email`='$user'");
while ($time = $req->fetch_assoc()) {
    date_default_timezone_set('Europe/Paris');
    $start = explode(':', $time['start']);
    $hrs = '' . $start[0] . '';
    $min = '' . $start[1] . '';
    $sec = '' . $start[2] . '';
    $startDate = new DateTime($hrs . ':' . $min . ':' . $sec);
    $dt = new DateTime();
    $interval = $dt->diff($startDate);
    $ecart = $interval->format('%H:%I:%S');
    $to_time = strtotime('00:45:00');
    $from_time = strtotime($ecart);
    $time_diff = $to_time - $from_time;
    $countdown = 'countdown("' . gmdate("i:s", $time_diff) . '")';
}
