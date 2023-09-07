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


            <section class="blog">
              <div class="container">
                <div class="blog__inner">

                    <div class="blog__items">
                      
                      <div class="blog__item">
                        <img src="images/dist/1.avif" alt="статья" class="blog__item-img">
                        <div class="blog__item-info">
                          <span class="blog__item-data">
                            дата
                          </span> |
                          <a href="" class="blog__item-author">
                            автор
                          </a>
                          <h3 class="blog__item-title">
                            <a href="singlepost.php">заголовок</a> 
                          </h3>
                          <p class="blog__item-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, autem?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit qui rerum commodi cupiditate assumenda harum pariatur magni quaerat fugiat. Nostrum.
                          </p>
                        </div>
                      </div>


                      <div class="pagination">
                        
                          
                        
                        <ul class="pagination__list">
                          <li class="pagination__list-item pagination__list-item-diseble">
                            <a href="" class="pagination__link">
                              <img class="pagination__link-icon" src="images/dist/arrow-left.svg" alt="left">
                            </a>
                          </li>
                          <li class="pagination__list-item">
                            <a href="#" class="pagination__list-num pagination__list-num-active">1</a>
                          </li>
                          <li class="pagination__list-item">
                            <a href="#" class="pagination__list-num">2</a>
                          </li>
                          <li class="pagination__list-item">
                            <a href="" class="pagination__link">
                              <img class="pagination__link-icon" src="images/dist/arrow-right.svg" alt="left">
                            </a>
                          </li>
                        </ul>
                        
                         
                        
                      </div>
                    </div>

                    <?php require_once "core/components/aside.php" ?>
                </div>
              </div> 
            </section>


             <?php require_once "core/components/testdata.php" ?>
        </main>

        <?php require_once "core/components/footer.php" ?>

</div>

<?php require_once "core/components/bot.php" ?>













