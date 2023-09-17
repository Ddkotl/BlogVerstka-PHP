<?php

require_once '../../../vendor/autoload.php';
require_once 'configDB.php';
require_once '../functions.php';

function checkErrorPreparingToRequest($var){
    $errorInfo = $var->errorInfo();

    if($errorInfo[0] !== PDO::ERR_NONE){
        echo $errorInfo[2];
        exit();
    }
    return true;
}

function seleclAllFromTable($table, $params=[]){
    $pdo=getPDO();
    $sql="SELECT * FROM $table";
    if(!empty($params)){
        $i=0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    checkErrorPreparingToRequest($query);
    return $query->fetchAll(); 
}

function selectOneStringFromTable($table, $params=[]){
    $pdo=getPDO();
    $sql="SELECT * FROM $table";
    if(!empty($params)){
        $i=0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    checkErrorPreparingToRequest($query);
    return $query->fetch(); 
}

function insertRecordIntoTable($table,$params){
    $pdo=getPDO();
    $i=0;
    $row = '';
    $mask = '';
    foreach ($params as $key => $value){
        if($i === 0){
            $row = $row . "$key";
            $mask = $mask . ":$key";
        }else{
        $row = $row . "," . " $key";
        $mask = $mask . "," . " :$key";
        }
        $i++;
    }
    $sql ="INSERT INTO $table ($row) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    checkErrorPreparingToRequest($query);
}

function updateRecordIntoTable($table, $id, $params){
    $pdo=getPDO();
    $i=0;
    $str = '';
    foreach ($params as $key => $value){
        if($i === 0){
            $str = $str . $key  . " = ':" . $key ."'";
        }else{
            $str = $str . "," . $key . " = ':" . $key ."'";
        }
        $i++;
    }
    $sql ="UPDATE $table SET $str WHERE id = $id";
    // dump($sql);
    // exit();
    $query = $pdo->prepare($sql);
    $query->execute($params);
    checkErrorPreparingToRequest($query);
}




$params = [
    'login' => 'tytyt',
    'email' => 'cghj@mail.ru',
    'avatar' => NULL,
    'password' => '123',
    'admin' => '0'
];

updateRecordIntoTable('users',171,$params);