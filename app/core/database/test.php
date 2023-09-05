<?php

require_once '../../../vendor/autoload.php';
// $host='lamp-mysql8';
// $data='blog';
// $user='root';
// $password='4236'; 


// const DB_DRIVER = 'mysql';
// const DB_HOST = 'lamp-mysql8';
// const DB_NAME = 'blog';
// const DB_USER = 'dima';
// const DB_PASS = '4236';
// const DB_CHARSET = 'utf8';
// const DB_PORT = '3306';
// const DB_OPTIONS = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// try{
//     $connection = new PDO(DB_DRIVER.':dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT.';charset='.DB_CHARSET,DB_USER, DB_PASS, DB_OPTIONS);
// }catch(PDOException $e){
//     echo('BD connection error: '.$e->getMessage());
// }



//$connection = new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
// $connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// if($connection->connect_error) die('error connecton');

// $query12= "SELECT * FROM users";
// $result= $connection->query($query12);

// if(!$result) die('error data');

// $rows = $result->num_rows;

// for($i=0;$i<$rows;++$i){
//     $result->data_seek($i);
//     echo 'email:' . $result->fetch_assoc()['email'] . '<br>';
// }

// $result->close();
// $connection->close();

// $pdo =  new PDO(DB_DRIVER.':dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT.';charset='.DB_CHARSET,DB_USER, DB_PASS, DB_OPTIONS);
// if(!$pdo) echo('error data');


// try{
//     $connection =  new PDO(DB_DRIVER.':dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT.';charset='.DB_CHARSET,DB_USER, DB_PASS, DB_OPTIONS);
// }catch(PDOException $e){
//     echo('BD connection error: '.$e->getMessage());
// }


// $query12= "INSERT INTO users (login,email,password) VALUES ('klim11','11klim@mail.ru','41156654')";
// $count = $connection->exec($query12);


// $query = "INSERT INTO users (login,email,password) VALUES (:login,:email,:password)";
// $params = [
//     'login' => 'dd12dddd',
//     'email' => 'eeee12eeeeee',
//     'password' => 123123456
// ];
// $stmt = $connection->prepare($query);

// try{
//     $stmt->execute($params);
// }catch(Exception $e){
//     die('Data error: '.$e->getMessage());
// }


//     $query = "INSERT INTO users (login,email,password) VALUES (:login,:email,:password)";
// $params = [
//     'login' => 'dddddd',
//     'email' => 'eeeeeeeeee',
//     'password' => 123456
// ];
// $stmt = $pdo->prepare($query);

// try{
//     $stmt->execute($params);
// }catch(\Exception $e){
//     die($e->getMessage());
// }