<?php

session_start();


require_once '../functions.php';
require_once '../../../vendor/autoload.php';

checkTrueReqerst('../../index.php');


$login = $_POST['login'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;

if(empty($login)){
    addValidationError('login','Неверное имя');
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    addValidationError('email','Неверный email');
}

if(empty($password)){
    addValidationError('password','Пароль пустой');
}

if(!($password === $passwordConfirmation)){
    addValidationError('passwordConfirmation','Пароли не совпадают');
}

if(!empty($_SESSION['validation'])){
    addOldValue('login',$login);
    addOldValue('email',$email);
    redirect('../../registr.php');
}

$pdo = getPDO();

$query = "INSERT INTO users (login,email,password,admin) VALUES (:login,:email,:password,:admin)";
$params = [
    'login' => $login,
    'email' => $email,
    'password' => password_hash($password,PASSWORD_DEFAULT),
    'admin' => 0
];
$stmt = $pdo->prepare($query);

try{
    $stmt->execute($params);
}catch(\Exception $e){
    die($e->getMessage());
}


redirect('../../truereg.php');

// dump($_SESSION);
// dump($_POST);