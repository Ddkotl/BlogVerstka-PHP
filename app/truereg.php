<?php
session_start();
require_once '../vendor/autoload.php'; 
require_once 'core/functions.php';
require_once 'path.php';
?>



<?php require_once "core/components/top.php" ?>

<div class="wrapper">

        <?php require_once "core/components/header.php" ?>
        
        <main class="main">
             Теперь вы можете войти
        <?php require_once "core/components/testdata.php" ?>
        </main>

        <?php require_once "core/components/footer.php" ?>

</div>

<?php require_once "core/components/bot.php" ?>