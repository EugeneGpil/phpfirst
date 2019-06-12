<?php
  $article = $connection->query( 
    "SELECT * 
    FROM `articles` 
    WHERE `url` = '$uri'");
  if ($article->rowCount() == 0)
    echo 'нет такой статьи<br>';
  else{
    $article = $article->fetchAll();
    $article = $article[0];
    $connection->query( 
      "UPDATE `articles` 
      SET `views` = `views` + 1 
      WHERE `id` = ". $article['id']);
  ?>
  <article class="main-content">
    <div class="section__header">
      <a href="#" class="section__headline content__button_grey-theme"><?=$article['title']?></a>
      <div class="main-content__header-button"><?=$article['views']?></div>
    </div>
    <div class="main-content__image-container"
      style="background-image: url('/static/images/<?=$article['image']?>')">
    </div>
    <div class="main-content__article-text-container">
      <p class="main-content__article-text"><?=$article['text']?></p>
    </div>
  </article>
  <!-- comments -->
  <section class="main-content">
    <div class="section__header">
      <div class="section__headline content__button_grey-theme">комментарии</div>
      <a href="#add-comment-section" class="main-content__header-button content__button_grey-theme">Добавить свой</a>
    </div>
    <?php
      // add comment-----------------------------------------------

      //end of add comment---------------------------------------------
      $comments = $connection->query( 
        "SELECT comments.*,
          users.login `login`, users.avatar `avatar`
        FROM `comments` comments
        LEFT JOIN `users` users
        ON comments.author = users.login
        WHERE comments.article_id = ". $article['id'].
        " ORDER BY comments.pubdate
        DESC");
    ?>
    <div class="main-content__articles-container main-content__comments-container">
      <?php
        $firstRow = true;
        foreach ($comments as $comment){
          ?>
          <div class="main-content__article-preview-container 
            <?php
              if ($firstRow){
                echo "main-content__article-preview-container-first-row ";
                $firstRow = false;
              }
            ?>
            main-content__comment-big-container">
            <div class="article-preview main-content__comment-small-container">
              <a href="/user/<?=$comment['author']?>" 
                class="article-preview__image-container"
                style="background-image: url('../../static/avatars/<?=$comment['avatar']?>');">
              </a>
              <div class="article-preview__information-container">
                <a href="/user/<?=$comment['author']?>" 
                  class="article-preview__headline article-preview__interactive-button"><?=$comment['author']?>
                </a>
                <div class="article-preview__category article-preview__interactive-button-container">
                  <span class="article-preview__category"><?=$comment['pubdate']?></span>
                </div>
                <div class="article-preview__text"><?=$comment['text']?></div>
              </div>
            </div>
          </div>
          <?php
        }
      ?>
    </div>
  </section>
  <!-- add comment -->
  <section class="main-content" id="add-comment-section">
    <div class="section__header">
      <div class="section__headline content__button_grey-theme">добавить комментарий</div>
    </div>
    <form action="<?=$toArticlesUrl. $article['url']?>#add-comment-section" method="POST"> <!-- name="add-comment-form" -->
      <!-- add comment -->
      <?php
        $_SESSION['article_id'] = $article['id'];
      ?>
      <div class="add-comment__short-inputs-container">
        <div class="add-comment__error-container"><?=$errors['name']?></div>
        <input type="text" 
          class="add-comment__input add-comment__short-input" 
          name="name" id="nickname" placeholder="Имя"
          value="<?=$commentToAdd['name']?>">
        <!-- <input type="text" class="add-comment__input add-comment__short-input" name="nickname" id="nickname" placeholder="Никнэйм"> -->
      </div>
      <div class="add-comment__error-container"><?=$errors['comment-text']?></div>
      <textarea class="add-comment__input add-comment__comment-text-input" 
        name="comment-text" id="comment-text" cols="30" rows="10"
        placeholder="Текст комментария..."><?=$commentToAdd['comment-text']?></textarea>
      <input type="submit" class="add-comment__input add-comment__submit" name="submit" id="submit" value="Добавить комментарий">
    </form>
  </section>
  <?php
  }
?>
