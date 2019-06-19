<?php
namespace App\Prepare;

use PDO;

class MainPageHandler
{
  public static function getMainPageArray($config, $connection)
  {
    $lastArticles = $connection->query(
      "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
      FROM articles t1 
      LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id  
      ORDER BY `id` DESC
      LIMIT " . $config['count_of_new_articles_main_page']
    );
    $lastArticles = $lastArticles->fetchAll(PDO::FETCH_ASSOC);

    foreach ($config['main_page_categories'] as $category) {
      $articlesByCategory = $connection->query(
        "SELECT t1.id, t1.title, t1.url, t1.image, t1.text, t2.title category_title, t2.url category_url
        FROM articles t1
        LEFT JOIN articles_categories t2 ON t1.categories_id = t2.id 
        WHERE t2.title = '" . $category .
          "' ORDER BY `id` DESC
        LIMIT " . $config['count_of_articles_by_category_main_page']
      );
      $articlesByCategory = $articlesByCategory->fetchAll(PDO::FETCH_ASSOC);
      $articlesByCategories[$category] = $articlesByCategory;
    }

    $mainPageArray['lastArticles'] = $lastArticles;
    $mainPageArray['articlesByCategories'] = $articlesByCategories;
    return $mainPageArray;
  }
}
