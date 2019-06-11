<article class="main-content">
  <?php
    if ($uri == '/about_author') $infoId = 1; 
    else $infoId = 2;
    $info = $connection->query(
      "SELECT *
      FROM `info`
      WHERE `id` = $infoId"
    );
    $info = $info->fetchAll();
    $info = $info[0];
  ?>
  <div class="section__header">
    <a 
      <?php
        if ($infoId == 1)
          $infoLink="aboutAuthor";
        else
          $infoLink="forRightholders";
      ?>
      href="/<?=$infoLink?>" 
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