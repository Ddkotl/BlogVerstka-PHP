<?php

session_start();


require_once '../functions.php';
require_once '../../../vendor/autoload.php';


$login = $_POST['login'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;

addOldValue('login',$login);
addOldValue('email',$email);

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
    redirect('../../registr.php');
}

$pdo = getPDO();

$query = "INSERT INTO users (login,email,password) VALUES (:login,:email,:password)";
$params = [
    'login' => $login,
    'email' => $email,
    'password' => password_hash($password,PASSWORD_DEFAULT)
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