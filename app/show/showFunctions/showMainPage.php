<?php
  namespace app\show\showFunctions;

  use PDO;

  //$config['count_of_new_articles_main_page']
  $count = $config['count_of_articles_by_category_main_page'];

  $lastArticles = $connection->query(
    "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
    FROM articles t1 
    LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id  
    ORDER BY `id` DESC
    LIMIT " . $config['count_of_new_articles_main_page']
  );
  $lastArticles = $lastArticles->fetchAll(PDO::FETCH_ASSOC);

  $ArticlesbyCategory1 = $connection->query(
    "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
    FROM articles t1
    LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id 
    WHERE t2.title = '"
    .  $config['main_page_categories'][0].
    "' ORDER BY `id` DESC
    LIMIT " . $count
  );
  $ArticlesbyCategory1 = $ArticlesbyCategory1->fetchAll(PDO::FETCH_ASSOC);

  $ArticlesbyCategory2 = $connection->query(
    "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
    FROM articles t1
    LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id 
    WHERE t2.title = '"
    .  $config['main_page_categories'][1].
    "' ORDER BY `id` DESC
    LIMIT " . $count
  );
  $ArticlesbyCategory2 = $ArticlesbyCategory2->fetchAll(PDO::FETCH_ASSOC);

  $ArticlesbyCategory3 = $connection->query(
    "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
    FROM articles t1
    LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id 
    WHERE t2.title = '"
    .  $config['main_page_categories'][2].
    "' ORDER BY `id` DESC
    LIMIT " . $count
  );
  $ArticlesbyCategory3 = $ArticlesbyCategory3->fetchAll(PDO::FETCH_ASSOC);

  $articles['last'] = $lastArticles;
  $articles[$ArticlesbyCategory1[0]['category_title']] = $ArticlesbyCategory1;
  $articles[$ArticlesbyCategory2[0]['category_title']] = $ArticlesbyCategory2;
  $articles[$ArticlesbyCategory3[0]['category_title']] = $ArticlesbyCategory3;

  function showMainPage($articlesDoubleArray){
    foreach ($articlesDoubleArray as $articlesArray){
      showArticles($articlesArray, key($articlesDoubleArray));
    }
    
  }

  showMainPage($articles);
  ?>
  

  function showArticles ()
    <section class="main-content">
    <?php
    contentSectionHeader("Новейшее в блоге", $toArticlesUrl, "Посмотреть все");
    showArticles($this->newArticles, $this->countOfNewArticlesMainPage);
    ?>
  </section>
  <?php
  foreach ($this->articlesByCategories as $articlesInThisCategory) {
    // var_dump($articlesInThisCategory);
    ?>
    <section class="main-content">
      <?php
      contentSectionHeader(
        $articlesInThisCategory[0]['category_title'],
        $toArticlesUrl . $articlesInThisCategory[0]['category_url'],
        "Все записи"
      );
      showArticles($articlesInThisCategory, $this->countOfArticlesByCategoryMainPage);
      ?>
    </section>
  <?php
  }