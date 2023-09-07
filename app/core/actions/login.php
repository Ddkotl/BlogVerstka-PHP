<?php
session_start();

require_once '../functions.php';
require_once '../../../vendor/autoload.php';

checkTrueReqerst('../../index.php');

$loginIn = $_POST['loginin'] ?? null;
$passwordIn = $_POST['passwordin'] ?? null;

if(empty($loginIn)){
    addValidationError('loginin','Введите электронную почту');
}

if(!empty($loginIn)){
    if(!filter_var($loginIn,FILTER_VALIDATE_EMAIL)){
        addValidationError('loginin','Неверный формат электронной почты');
    }
}

if(empty($passwordIn)){
    addValidationError('passwordin','Введите пароль');
}

$pdo = getPDO();

$stmt = $pdo->prepare("SELECT * FROM users WHERE `email` = :email");
$stmt->execute(['email'=> $loginIn]);
$usercheck = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($loginIn)){
    if(filter_var($loginIn,FILTER_VALIDATE_EMAIL)){
        if(!$usercheck){
            addValidationError('loginin','Электронная почта не зарегистрирована');
        }
    }
}

if(!empty($passwordIn)){
    if($usercheck){
        if (!password_verify($passwordIn,$usercheck['password'])){
            addValidationError('passwordin','Неверный пароль');
        }
    }
}

if(!empty($_SESSION['validation'])){
    addOldValue('loginin',$loginIn);
    redirect('../../registr.php');
}

$_SESSION['user']['id'] = $usercheck['id'];

redirect('../../personaloffise.php');


// dump($_SESSION);
// dump($_POST);
// dump($usercheck);
