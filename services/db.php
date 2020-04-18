<?php

$host = 'localhost';
$uname = 'root';
$pass = '';
$dbName = 'pixivmanga';

$conn = mysqli_connect($host, $uname, $pass, $dbName) or die(mysqli_error($conn));