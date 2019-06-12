<section id="start-of-articles-previews" class="main-content">
  <?php
    if ($category == ''){
      $articles = $connection->query(
        "SELECT t1.*, t2.id category_id, t2.title category_title 
        FROM articles t1 
        LEFT JOIN articles_categories t2 
        ON t1.categories_id = t2.id 
        ORDER BY `id` 
        DESC"
      );
      $sectionHeadline = "новейшее в блоге";
    }
    else{
      $articles = $connection->query(
        "SELECT t1.*,
          t2.id category_id, t2.title category_title, t2.url category_url
        FROM articles t1
        LEFT JOIN articles_categories t2 
        ON t1.categories_id = t2.id
        WHERE t2.url = '$category'
        ORDER BY `id` 
        DESC"
      );
    }
    $articles = $articles->fetchAll();
    if ($category != '')
    $sectionHeadline = $articles[0]['category_title'];
    contentSectionHeader($sectionHeadline, $toArticlesUrl. $category, "все записи");
    $articlesPerPage = $config['articles_per_page'];
    $firstShownArticle = ($page - 1) * $articlesPerPage;
    showArticles($articles, $articlesPerPage, $firstShownArticle);
  ?>
  <div class="main-content__change-page-container">
    <a href="<?=$toArticlesUrl?><?=$category?>/page<?=$page - 1?>#start-of-articles-previews"
      class="main-content__page-change-button 
        main-content__page-change-element
        <?php
          if ($page == 1)
            echo "main-content__page-change-element_hidden";
        ?>
        ">
      <--
    </a>
    <div class="main-content__corrent-page main-content__page-change-element"><?=$page?></div>
    <a href="<?=$toArticlesUrl?><?=$category?>/page<?=$page + 1?>#start-of-articles-previews"
      class="main-content__page-change-button
      main-content__page-change-element
        <?php
          if ($page == ceil(count($articles) / $articlesPerPage))
            echo "main-content__page-change-element_hidden";
        ?>
      ">
      -->
    </a>
  </div>
</section>
