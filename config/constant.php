<?php
session_start();
$url = "http://localhost/2114_pixie/admin/Upload/";
$serverName = 'localhost';
$username = 'root';
$password = '';
$DB_Name = 'pixie';

$conn = mysqli_connect($serverName,$username,$password,$DB_Name);
?>