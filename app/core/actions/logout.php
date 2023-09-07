<?php

session_start();


require_once '../functions.php';
require_once '../../../vendor/autoload.php';

checkTrueReqerst('../../index.php');

logOut();

redirect('../../index.php');

