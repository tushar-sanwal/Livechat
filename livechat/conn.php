<?php

$server = 'localhost';
$name = 'root';
$pass = '';
$db_name = 'livechatroom';

$con = new mysqli($server,$name,$pass,$db_name);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}