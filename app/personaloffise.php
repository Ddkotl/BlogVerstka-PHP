<?php
session_start();
require_once '../vendor/autoload.php'; 
require_once 'core/functions.php';
require_once 'path.php';
checkAuth();
?>

<?php require_once "core/components/top.php" ?>

<div class="wrapper">

        <?php require_once "core/components/header.php" ?>
        
        <main class="main">
            <?php require_once "core/components/bread.php" ?>


            <div class="container">
                <div class="personal__offise-container">
                    <h2 class="personal__offise-title">
                        Личный кабинет
                    </h2>
                    <form action="core/actions/logout.php" method="POST">
                        <button class="personal__offise-button">
                            выйти из акаунта
                        </button>
                    </form>
                    <div class="personal__offise-info">
                    <?php
                    $user=currentUser();
                    dump($user);
                    ?>
                    </div>
                </div>
            </div>

            <?php require_once "core/components/testdata.php" ?>
        </main>

        <?php require_once "core/components/footer.php" ?>

</div>

<?php require_once "core/components/bot.php" ?>









