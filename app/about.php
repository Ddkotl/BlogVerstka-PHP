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
            <?php require_once "core/components/bread.php" ?>

            
            <section class="about">
              <div class="about__prev">
                <div class="container">
                  <h2 class="about__prev-title">
                    О нас
                  </h2>
                </div>
              </div>
                <div class="about__content">
                  <div class="container">
                    <h3 class="about__title">Добро пожаловать в мир здоровья и благополучия!</h3>
                      <div class="about__text">
                        <p>Мы - команда энтузиастов, которые горячо верят, что здоровье - это не только отсутствие болезней, но и гармония тела, разума и души. Наш блог - это место, где мы стремимся поделиться нашим опытом, знаниями и вдохновением для достижения полноценной и счастливой жизни.</p>
                        <p>Мы исследуем разнообразные аспекты здоровья: от питания и физической активности до духовной практики и психологического благополучия. Наша цель - помочь вам принимать осознанные решения и внести позитивные изменения в ваш образ жизни.</p>
                        <p>Следите за нашими статьями, советами и исследованиями, чтобы найти вдохновение и поддержку на своем пути к лучшему здоровью и саморазвитию. Совместно мы можем сделать каждый день особенным и наполненным радостью и энергией!</p>
                      </div>
                  </div>
              </div>
           </section>


           <?php require_once "core/components/testdata.php" ?>
        </main>

        <?php require_once "core/components/footer.php" ?>

</div>

<?php require_once "core/components/bot.php" ?>