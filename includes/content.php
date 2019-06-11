<?php
  $uri = $_SERVER['REQUEST_URI'];
  if ($uri == '/'){
    $articlesQ = mysqli_query($connection, 
      "SELECT t1.*, t2.id category_id, t2.title category_title 
      FROM articles t1 
      LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id  
      ORDER BY `id` DESC");
    $articles = mysqli_fetch_all($articlesQ, MYSQLI_ASSOC);
    $newArticlesCount = $config['count_of_new_articles_main_page'];
    showArticlesSection(
      $articles, 
      "Новейшее в блоге", 
      $newArticlesCount, 
      "articles/page1", 
      "Все записи"
    );
    $articlesSortedByCategoryTitle = [];
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
    $articlesCount = $config['count_of_articles_by_category_main_page'];
    foreach ($articlesSortedByCategoryTitle as $articlesInThisCategory){
      showArticlesSection(
        $articlesInThisCategory,
        $articlesInThisCategory[0]['category_title'],
        $articlesCount,
        "articles/category3/page1",
        "Все записи"
      );
    }
  }
  else if ($url == 'aboutAuthor'){

  }
?>