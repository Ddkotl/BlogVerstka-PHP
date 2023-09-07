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
            <section class="new-collection">
                <div class="container">
                    <h3 class="new-collection__title">
                        Добро пожаловать в мир здорового образа жизни!
                    </h3>
                    <p class="new-collection__text">
                        Приветствуем вас на нашем блоге, посвященном здоровью и благополучию! Здесь мы исследуем секреты поддержания баланса между физической активностью, правильным питанием и психологическим равновесием.
                    </p>
                    <p class="new-collection__text">
                        Наши статьи помогут вам разобраться в тонкостях здорового образа жизни, предоставив информацию о сбалансированном рационе, эффективных тренировках и методах релаксации. Мы стремимся помочь вам на пути к укреплению тела и ума, а также к созданию гармоничной и счастливой жизни.
                    </p>
                    <p class="new-collection__text">
                        Присоединяйтесь к нашей вдохновляющей сообществу и начните свое путешествие к лучшему здоровью и благополучию прямо сейчас. Вместе мы достигнем больших высот в создании здорового, счастливого и осознанного стиля жизни!
                    </p>
                    <div class="collection">
                        <div class="collection__item">
                            <img src="images/dist/1.avif" alt="#" class="collection__img">
                            <div class="collection__info">
                                <h6 class="collection__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="collection__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                        </div>
                        <div class="collection__item">
                            <img src="images/dist/2.avif" alt="#" class="collection__img">
                            <div class="collection__info">
                                <h6 class="collection__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="collection__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                        </div>
                        <div class="collection__item">
                            <img src="images/dist/3.avif" alt="#" class="collection__img">
                            <div class="collection__info">
                                <h6 class="collection__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="collection__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                        </div>
                        <div class="collection__item">
                            <img src="images/dist/4.avif" alt="#" class="collection__img">
                            <div class="collection__info">
                                <h6 class="collection__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="collection__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                        </div>
                        <div class="collection__item">
                            <img src="images/dist/5.avif" alt="#" class="collection__img">
                            <div class="collection__info">
                                <h6 class="collection__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="collection__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/dist/1.avif" alt="#" class="swiper-slide__img">
                            <div class="swiper-slide__info">
                                <h6 class="swiper-slide__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="swiper-slide__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/dist/2.avif" alt="#" class="swiper-slide__img">
                            <div class="swiper-slide__info">
                                <h6 class="swiper-slide__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="swiper-slide__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/dist/3.avif" alt="#" class="swiper-slide__img">
                            <div class="swiper-slide__info">
                                <h6 class="swiper-slide__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="swiper-slide__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/dist/4.avif" alt="#" class="swiper-slide__img">
                            <div class="swiper-slide__info">
                                <h6 class="swiper-slide__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="swiper-slide__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/dist/5.avif" alt="#" class="swiper-slide__img">
                            <div class="swiper-slide__info">
                                <h6 class="swiper-slide__info-title">
                                    Truffaut literally trust
                                </h6>
                                <p class="swiper-slide__info-text">
                                    Living room furntiture
                                </p>
                            </div>
                </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <?php require_once "core/components/testdata.php" ?>
        </main>
        
        <?php require_once "core/components/footer.php" ?>
        
    </div>
    
<?php require_once "core/components/bot.php" ?>