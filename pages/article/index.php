<?php
  require '../../includes/config.php';
  $_GET['id'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$config['title']?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <div class="wrapper">
    <?php
      include '../../includes/header.php';
    ?>
    <div class="content-wrapper">
      <div class="content">
        <?php
          $articleQ = mysqli_query($connection, 
            "SELECT * 
            FROM `articles` 
            WHERE `id` = ". (int) $_GET['id']);
          $articleDoubleMas = mysqli_fetch_all($articleQ, MYSQLI_ASSOC);
          $article = $articleDoubleMas[0];
          mysqli_query($connection, 
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
            $usersQ = mysqli_query($connection, "SELECT `login` FROM `users`");
            $users = mysqli_fetch_all($usersQ, MYSQLI_ASSOC);
            $logins = array_column($users, 'login');
            $commentToAdd = $_POST;
            if (!empty($commentToAdd)){
              $errors = [];
              if (!in_array($commentToAdd['name'], $logins))
                $errors['name'] = "Имя не найдено!";
              if (!strlen($commentToAdd['comment-text']))
                $errors['comment-text'] = "Введите текст комментария!";
              if (empty($errors)){
                mysqli_query($connection, 
                  "INSERT INTO `comments` (`author`,`text`,`article_id`)
                  VALUES ('". $commentToAdd['name']. "', '". $commentToAdd['comment-text']. "', '". $article['id']. "')");
                $commentToAdd = null; // for clean form add comment
              }
            }
            //end of add comment---------------------------------------------
            $commentsQ = mysqli_query($connection, 
              "SELECT comments.*,
                users.login `login`, users.avatar `avatar`
              FROM `comments` comments
              LEFT JOIN `users` users
              ON comments.author = users.login
              WHERE comments.article_id = ". $article['id'].
              " ORDER BY comments.pubdate
              DESC");
            $comments = mysqli_fetch_all($commentsQ, MYSQLI_ASSOC);
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
          <form action="/article<?=$article['id']?>#add-comment-section" method="POST"> <!-- name="add-comment-form" -->
            <!-- add comment -->
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
      </div>
      <?php
        include '../../includes/sidebar.php';
      ?>
    </div>
    <?php
      include '../../includes/footer.php';
    ?>
  </div>
</body>