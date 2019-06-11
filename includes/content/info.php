<article class="main-content">
  <?php
    $info = $connection->query(
      "SELECT *
      FROM `info`
      WHERE `url` = '$uri'"
    );
    $info = $info->fetchAll();
    $info = $info[0];
  ?>
  <div class="section__header">
    <a
      href="<?=$info['url']?>" 
      class="section__headline content__button_grey-theme">
      <?=$info['title']?>
    </a>
  </div>
  <div class="main-content__image-container"
    style="background-image: url('/static/images/<?=$info['image']?>');">
  </div>
  <div class="main-content__article-text-container">
    <?=$info['text']?>
  </div>
</article>