<?php

require_once 'database/configDB.php';


function redirect(string $path){
    header('Location:'.$path);
    die();
} 

function addValidationError(string $fieldName, string $message){
    $_SESSION['validation'][$fieldName] = $message;
}

function hasValidationError(string $fieldName):bool{
    return isset($_SESSION['validation'][$fieldName]);
}

function validationErrorAttr(string $fieldName){
    echo isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}

function validationErrorMessage(string $fieldName){
    $message = isset($_SESSION['validation'][$fieldName]) ? $_SESSION['validation'][$fieldName] : '';
    unset($_SESSION['validation'][$fieldName]);
    echo $message;
}

function addOldValue(string $key, mixed $value){
    $_SESSION['old'][$key] = $value;
}

function old(string $key){
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function getPDO():PDO{
    try{
        return new PDO(DB_DRIVER.':dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT.';charset='.DB_CHARSET,DB_USER, DB_PASS, DB_OPTIONS);
    }catch(PDOException $e){
        die('BD connection error: '.$e->getMessage());
    }
}

