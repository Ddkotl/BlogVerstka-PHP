<?php

 
$driver = 'mysql';
$host = 'lamp-mysql8';
$db_name = 'blog';
$db_user = 'dima';
$db_pass = '4236';
$charset = 'utf8';
$port = '3306';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
    $pdo = new PDO(
        "$driver:dbname=$db_name;host=$host;port=$port;charset=$charset",
        $db_user, $db_pass, $options
    );
}catch(PDOException $i){
    die("Ошибка подключения к базе данных");
}

