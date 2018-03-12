<?php
session_start();
//SQL Connect
$host = '91.134.133.249';
$user = 'EscapeUti';
$pass = '849653-mdpT';
$db = 'escapeBMI';



$con = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//HACKERMAIL
$good_login = 'P47M4N';
$good_pwd = '$2rWsvC!';

//CASQUES
$solutions[1] = array('3', '5');
$solutions[2] = array('1', '2');
$solutions[3] = array('3', '5');
$solutions[4] = array('3', '5');
$solutions[5] = array('3', '5');
$solutions[6] = array('3', '5');

//TBI
$discoword = 'HACKING';