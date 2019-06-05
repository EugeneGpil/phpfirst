<?php
  require 'includes/config.php';
  $_GET['id'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Блог IT_Минималиста</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <div class="wrapper">
    <?php
      include 'includes/header.php';
    ?>
    <div class="content-wrapper">
      <div class="content">
        <?php
          $article_q = mysqli_query($connection, 
            "SELECT * 
            FROM `articles` 
            WHERE `id` = ". (int) $_GET['id']);
          $article = mysqli_fetch_all($article_q, MYSQLI_ASSOC);
          mysqli_query($connection, 
            "UPDATE `articles` 
            SET `views` = `views` + 1 
            WHERE `id` = ". $article[0]['id']);
        ?>
        <article class="main-content">
          <div class="section__header">
            <a href="#" class="section__headline"><?php echo $article[0]['title'];?></a>
            <div class="main-content__header-button"><?php echo $article[0]['views'];?></div>
          </div>
          <div class="main-content__image-container"
            style="background-image: url('/static/images/<?php echo $article[0]['image'];?>')">
          </div>
          <div class="main-content__article-text-container">
            <p class="main-content__article-text"><?php echo $article[0]['text'];?></p>
          </div>
        </article>
        <!-- comments -->
        <section class="main-content">
          <div class="section__header">
            <div class="section__headline">комментарии</div>
            <a href="#add-comment-section" class="main-content__header-button">Добавить свой</a>
          </div>
          <div class="main-content__articles-container main-content__comments-container">
            <div class="main-content__article-preview-container 
              main-content__article-preview-container-first-row
              main-content__comment-big-container">
              <div class="article-preview main-content__comment-small-container">
                <a href="#" class="article-preview__image-container">
                  <img src="" alt="">
                </a>
                <div class="article-preview__information-container">
                  <a href="#" class="article-preview__headline">name of user</a>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">12.12.2012</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </div>
            </div>
            <div class="main-content__article-preview-container main-content__comment-big-container">
              <div class="article-preview main-content__comment-small-container">
                <a href="#" class="article-preview__image-container">
                  <img src="" alt="">
                </a>
                <div class="article-preview__information-container">
                  <a href="#" class="article-preview__headline">name of user</a>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">12.12.2012</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </div>
            </div>
            <div class="main-content__article-preview-container main-content__comment-big-container">
              <div class="article-preview main-content__comment-small-container">
                <a href="#" class="article-preview__image-container">
                  <img src="" alt="">
                </a>
                <div class="article-preview__information-container">
                  <a href="#" class="article-preview__headline">name of user</a>
                  <div class="article-preview__category-container">
                    <span class="article-preview__category">12.12.2012</span>
                  </div>
                  <div class="article-preview__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia debitis, ab asperiores in doloremque odio. Libero, est inventore...</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- add comment -->
        <section class="main-content" id="add-comment-section">
          <div class="section__header">
            <div class="section__headline">добавить комментарий</div>
          </div>
          <form action="" name="add-comment-form" method="POST">
            <div class="add-comment__short-inputs-container">
              <input type="text" class="add-comment__input add-comment__short-input" name="name" id="nickname" placeholder="Имя">
              <input type="text" class="add-comment__input add-comment__short-input" name="nickname" id="nickname" placeholder="Никнэйм">
            </div>
            <textarea class="add-comment__input add-comment__comment-text-input" 
              name="comment-text" id="comment-text" cols="30" rows="10"
              placeholder="Текст комментария..."></textarea>
            <input type="submit" class="add-comment__input add-comment__submit" name="submit" id="submit" value="Добавить комментарий">
          </form>
        </section>
      </div>
      <?php
        include 'includes/sidebar.php';
      ?>
    </div>
    <?php
      include 'includes/footer.php';
    ?>
  </div>
</body>