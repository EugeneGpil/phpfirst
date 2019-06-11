<section id="start-of-articles-previews" class="main-content">
  <?php
    $category = 1;
    $articles = $connection->query(
      "SELECT t1.*, t2.id category_id, t2.title category_title 
      FROM articles t1 
      LEFT JOIN articles_categories t2 
      ON t1.categories_id = t2.id 
      ORDER BY `id` 
      DESC"
    );
    contentSectionHeader("новейшее в блоге", "/articles/page1", "все записи");
    $page = $uri;
    $articlesPerPage = $config['articles_per_page'];
    $firstShownArticle = ($page - 1) * $articlesPerPage;
    $articles = $articles->fetchAll();
    showArticles($articles, $articlesPerPage, $firstShownArticle);
  ?>
  <div class="main-content__change-page-container">
    <a href="<?=$toArticlesUrl?>/page<?=$page - 1?>#start-of-articles-previews"
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
    <a href="<?=$toArticlesUrl?>/page<?=$page + 1?>#start-of-articles-previews"
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
