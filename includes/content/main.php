<section class="main-content">
  <?php
    contentSectionHeader("Новейшее в блоге", $toArticlesUrl, "Посмотреть все");
    showArticles($this->newArticles, $this->countOfNewArticlesMainPage);
  ?>
</section>
<?php
  foreach ($this->articlesByCategories as $articlesInThisCategory)
  {
    // var_dump($articlesInThisCategory);
    ?>
      <section class="main-content">
        <?php
          contentSectionHeader(
            $articlesInThisCategory[0]['category_title'], 
            $toArticlesUrl. $articlesInThisCategory[0]['category_url'], 
            "Все записи");
          showArticles($articlesInThisCategory, $this->countOfArticlesByCategoryMainPage);
        ?>
      </section>
    <?php
  }

  // foreach ($articlesSortedByCategoryTitle as $articlesInThisCategory){
    ?>
      <!-- <section class="main-content">
        <?php
          // contentSectionHeader(
          //   $articlesInThisCategory[0]['category_title'], 
          //   "articles/category3/page1", 
          //   "Все записи");
          // showArticles($articlesInThisCategory, $articlesCount);
        ?>
      </section> -->


<!-- $articlesSortedByCategoryTitle = [];
  foreach ($config['main_page_categories'] as $category){
    foreach ($articles as $article){
      if ($article['category_title'] != $category) continue;
      if (!is_array($articlesSortedByCategoryTitle[$category]))
        $articlesSortedByCategoryTitle[$category] = [];
      $articlesSortedByCategoryTitle[$category][] = $article;
    }
    if (!is_array($articlesSortedByCategoryTitle[$category]))
      echo 'category in config file is not ok<br>';
  }
  $articlesCount = $config['count_of_articles_by_category_main_page']; -->