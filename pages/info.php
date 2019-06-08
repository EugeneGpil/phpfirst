<?php
  require '../includes/config.php';
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
      include '../includes/header.php';
    ?>
    <div class="content-wrapper">
      <div class="content">
        <article class="main-content">
          <?php
            $infoId = $_GET['id'];
            $infoQ = mysqli_query($connection, 
              "SELECT *
              FROM `info`
              WHERE `id` = $infoId");
            $info = mysqli_fetch_all($infoQ, MYSQLI_ASSOC);
            $info = $info[0];
          ?>
          <div class="section__header">
            <a href="/pages/info.php?id=<?=$info['id']?>" class="section__headline"><?=$info['title']?></a>
          </div>
          <div class="main-content__image-container"
            style="background-image: url('/static/images/<?=$info['image']?>');">
          </div>
          <div class="main-content__article-text-container">
            <?=$info['text']?>
          </div>
        </article>
      </div>
      <?php
        include '../includes/sidebar.php';
      ?>
    </div>
    <?php
      include '../includes/footer.php';
    ?>
  </div>
</body>