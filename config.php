<?php
// Development Connection
//$db_user = "root";
//$db_pass = "";
//$db_name = "useraccounts";

//Remote Database Connection
$host = 'remotemysql.com';
$db_name = 'dgPXnrqmh2';
$db_user = 'dgPXnrqmh2';
$db_pass = 'zRaIOnGspo';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
//$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db = new PDO($dsn, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//NOTE NA UPLOAD NA NI SA HEROKU