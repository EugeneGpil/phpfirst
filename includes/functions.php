<?php
function articlePreview($art){
  ?>
    <div class="article-preview">
      <a href="/article/<?=$art['id']?>"
        class="article-preview__image-container" 
        style="background-image: url('/static/images/<?=$art['image']?>');">
      </a>
      <div class="article-preview__information-container">
        <a href="/article/<?=$art['id']?>"
          class="article-preview__headline article-preview__interactive-button">
          <?php
            echo $art['title'];
          ?>
        </a>
        <div class="article-preview__category article-preview__interactive-button-container">
          <span class="article-preview__category">категория:</span>
          <a href="/articles/category<?=$art['category_id']?>" class="article-preview__category article-preview__interactive-button">
            <?php
              echo $art['category_title'];
            ?>
          </a>
        </div>
        <a href="/article/<?=$art['id']?>"
          class="article-preview__text content__button_grey-theme">
          <?php
            echo strip_tags(mb_substr($art['text'], 0, 100, 'utf-8')). '...';
          ?>
        </a>
      </div>
    </div>
  <?php
}
function showArticles($articles, $numOfArticles, $iOfFirstArticle = 0){
  ?>
  <div class="main-content__articles-container">
    <?php
    $placeOfShownArticle = 0;
    $i = $iOfFirstArticle;
    while ($i <= ($numOfArticles + $iOfFirstArticle)){
      if ($placeOfShownArticle >= $numOfArticles || empty($articles[$i])) break;
      ?>
        <div class="main-content__article-preview-container
          <?php
            if ($placeOfShownArticle++ <= 1)
              echo ' main-content__article-preview-container-first-row';
          ?>
          ">
          <?php
            articlePreview($articles[$i++]);
          ?>
        </div>
      <?php
    }
    ?>
  </div>
  <?php
}