<?php


require_once 'core/database/connect.php';

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    
    <div class="wrapper">

    <?php require_once "core/components/header.php" ?>
        
        <main class="main">
            <?php require_once "core/components/collection.php" ?>  
            <?php require_once "core/components/slider.php" ?>
        </main>
            <?php require_once "core/components/footer.php" ?>
        
    </div>
    
<script src="js/main.min.js"></script>
</body>
</html>