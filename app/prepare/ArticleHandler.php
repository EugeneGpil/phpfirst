<?php
namespace App\Prepare;

use PDO;

class ArticleHandler
{
  public static function getArticleData($connection, $urlArray, $config)
  {

    $article = $connection->query(
      "SELECT title, url, image, `text`, views
      FROM articles
      WHERE url = '" . $urlArray[1] . "'"
    );
    $article = $article->fetch(PDO::FETCH_ASSOC);

    $article['image'] = $config['urls']['url_to_images'] . '/' . $article['image'];

    return $article;
  }
}
