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
                      
                      <div class="blog__item blog-one__item"> 
                        <h3 class="blog__item-title blog-one__item-title">
                            <a href="singlepost.php">заголовок</a> 
                        </h3>
                        <img src="images/dist/1.avif" alt="статья" class="blog__item-img
                        blog-one__item-img">
                        <div class="blog__item-info blog-one__item-info">
                          <span class="blog__item-data blog-one__item-data">
                            дата
                          </span> |
                          <a href="" class="blog__item-author blog-one__item-author">
                            автор
                          </a>
                         
                          <p class="blog__item-text blog-one__item-text">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat est, ea aliquid consectetur quasi aperiam quaerat, explicabo magnam iure praesentium accusantium error facilis doloribus possimus fugit nisi exercitationem quidem et cumque. Tempora dicta ducimus saepe quis delectus quae sunt illo quam provident itaque, sapiente cumque veritatis cum assumenda omnis dolores error corporis ratione. Tempora ullam aliquam, magni odio necessitatibus possimus officiis, recusandae nobis veniam perspiciatis laboriosam dicta repellendus voluptate blanditiis eligendi alias dolores porro libero illo quia. Modi nemo quas nisi quo nobis dolor consectetur tenetur. Dolore, velit. Ex distinctio similique perspiciatis voluptatibus quibusdam ad animi sit, assumenda fugit quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo delectus quas optio voluptatum? Facere necessitatibus illum, cupiditate repellat omnis eum eveniet obcaecati nihil molestias, quod blanditiis rem consectetur, ratione amet. Aspernatur rerum saepe cumque cupiditate labore, fugit eligendi modi quis culpa quod corrupti voluptas mollitia assumenda impedit dolor exercitationem hic commodi temporibus vero! Distinctio eum odit, dolores earum ducimus in temporibus debitis inventore tenetur nemo libero quasi harum eius consequuntur! Molestias aspernatur dignissimos fugit enim accusamus vero cum ex eum eaque quasi laboriosam aut quam modi inventore cumque minima, suscipit quisquam dolores corporis consectetur repellendus esse. Nemo dignissimos mollitia animi?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, autem?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit qui rerum commodi cupiditate assumenda harum pariatur magni quaerat fugiat. Nostrum.
                          </p>
                        </div>

                        <div class="blog-one__tags">
                            <h4 class="blog-one__tags-title">
                                Тэги статьи:
                            </h4>
                            <div class="blog-one__tags-list">
                                <a href="#" class="blog-one__tags-link">СонИОтдых</a>
                                <a href="#" class="blog-one__tags-link">Спорт</a>
                                <a href="#" class="blog-one__tags-link">Фитнес</a>
                                <a href="#" class="blog-one__tags-link">Медитация</a>
                            </div>
                        </div>

                        <div class="blog-one__links">
                            <a href="#" class="blog-one__link blog-one__link-prew">
                                Предыдущая статья
                            </a>
                            <a href="#" class="blog-one__link blog-one__link-next">
                                Следующая статья
                            </a>
                        </div>
                        <div class="blog-one__coments">
                          <h4 class="blog-one__coments-title">
                              Коментарии:
                          </h4>
                          <div class="blog-one__coments-item">
                            <img src="images/dist/avatar.avif" alt="аватар" class="blog-one__coments-avatar">
                            <div class="blog-one__coments-info">
                              <p class="blog-one__coments-name">
                                  Имя пользователя
                              </p>
                              <p class="blog-one__coments-data">
                                  дата
                              </p>
                              <p class="blog-one__coments-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore quam dolor atque error dolore laborum saepe cum ab ducimus hic!
                              </p>
                            </div>
                            <button class="blog-one__coments-reply">
                                Ответить
                            </button>
                          </div>
                          <form action="POST" class="blog-one__form">
                            <h4 class="blog-one__form-title">
                              Напишите комментарий:
                            </h4>
                            <textarea  class="blog-one__form-textarea" placeholder="Ваш комментарий"></textarea>
                            <button type="submit" class="blog-one__form-btn">Отправить</button>
                          </form>
                        </div>
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


