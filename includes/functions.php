<?php
function article_preview($art){
  ?>
    <div class="article-preview">
      <a href="/article.php?id=<?php echo $art['id']; ?>"
        class="article-preview__image-container" 
        style="background-image: url('/static/images/<?php echo $art['image']; ?>');">
      </a>
      <div class="article-preview__information-container">
        <a href="/article.php?id=<?php echo $art['id']; ?>"
          class="article-preview__headline">
          <?php
            echo $art['title'];
          ?>
        </a>
        <div class="article-preview__category-container">
          <span class="article-preview__category">категория:</span>
          <a href="/articles.php?category=<?php echo $art['category_id'];?>" class="article-preview__category">
            <?php
              echo $art['category_title'];
            ?>
          </a>
        </div>
        <a href="/article.php?id=<?php echo $art['id'];?>"
          class="article-preview__text">
          <?php
            echo strip_tags(mb_substr($art['text'], 0, 100, 'utf-8')). '...';
          ?>
        </a>
      </div>
    </div>
  <?php
}
function show_articles($articles, $num_of_articles, $i_of_first_article = 0){
  ?>
  <div class="main-content__articles-container">
    <?php
    $place_of_shown_article = 0;
    $i = $i_of_first_article;
    while ($i <= ($num_of_articles + $i_of_first_article)){
      if ($place_of_shown_article >= $num_of_articles || empty($articles[$i])) break;
      ?>
        <div class="main-content__article-preview-container
          <?php
            if ($place_of_shown_article++ <= 1)
              echo ' main-content__article-preview-container-first-row';
          ?>
          ">
          <?php
            article_preview($articles[$i++]);
          ?>
        </div>
      <?php
    }
    ?>
  </div>
  <?php
}